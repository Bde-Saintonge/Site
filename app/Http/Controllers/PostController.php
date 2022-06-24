<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterPostRequest;
use App\Models\Office;
use App\Models\Post;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Gate;

class PostController extends Controller
{
    /**
     * Method to obtain the office posts view.
     */
    public function index(Office $office): Factory|View|Application
    {
        $posts = Post::select([
            'title',
            'image_url',
            'slug',
            'summary',
            'created_at',
        ])
            ->where([['office_id', $office->id], ['is_published', true]])
            ->latest()
            ->paginate(7);

        return view('posts.index', compact('posts', 'office'));
    }

    public function create(): Factory|View|Redirector|RedirectResponse|Application
    {
        // TODO Remove when finished
        $office = Gate::allows('verified-role', ['admin'])
            ? Office::all()
            : auth()->user()->office;

        return view('posts.create', ['office' => $office]);
    }

    public function store(
        RegisterPostRequest $request
    ): Redirector|RedirectResponse|Application
    {
        $validated = $request->validated();
        // TODO: generateSlug generateSummary

        $post = Post::create([
            'title' => $request->input('title'),
            'image_url' => $request->input('image_url'),
            'content' => $request->input('content'),
            'office_id' => $office->id,
        ]);

        return redirect("dashboard/{$post->office->code_name}")->with([
            'success' => ['Article créer avec succès !'],
        ]);
    }

    public function show(Office $office, Post $post): Factory|View|Application
    {
//        $post = Post::where('slug', $post_slug)->first();

        if (empty($post)) {
            abort(404);
        }

        return view('posts.show', compact('post'));
    }

    public function edit(Post $post): Factory|View|Application|RedirectResponse
    {
        $post = Post::find($id_post);

        if (is_null($post)) {
            return back()->withErrors([
                'error' => "L'article n'existe plus.",
            ]);
        }

        if (
            !$this->check_role('admin')
            && !$this->check_office($post->office->code_name)
        ) {
            return back()->withErrors([
                'error' => 'Vous ne disposez pas des permissions nécessaires pour modifier cet article.',
            ]);
        }

        return view('posts.create', [
            'post' => $post,
        ]);
    }

    /**
     * @param $id
     */
    public function update($id): Redirector|RedirectResponse|Application
    {
        $post = Post::find($id_post);

        if (is_null($post)) {
            return redirect()
                ->route('dashboard')
                ->withErrors([
                    'error' => "L'article n'existe plus.",
                ]);
        }

        if (
            !$this->check_role('admin')
            && !$this->check_office($post->office->code_name)
        ) {
            return redirect(
                "dashboard/{$this->user->office->code_name}",
            )->withErrors([
                'error' => 'Vous ne disposez pas des permissions nécessaires pour modifier cet article.',
            ]);
        }

        $validator = $request->validate([
            'title' => 'required|max:255',
            'image_url' => 'required',
            'content' => 'required',
        ]);
        $post->update([
            'title' => $request->input('title'),
            'image_url' => $request->input('image_url'),
            'content' => $request->input('content'),
            'is_published' => false,
            'updated_at' => new DateTime('now'),
        ]);

        return redirect("dashboard/{$post->office->code_name}")->with([
            'success' => ['Article modifié avec succès !'],
        ]);
    }

    /**
     * @param $id
     */
    public function destroy($id): Redirector|Application|RedirectResponse
    {
        $post = Post::find($id_post);

        if (is_null($post)) {
            return redirect(
                "dashboard/{$this->user->office->code_name}",
            )->withErrors([
                'error' => "L'article n'existe plus.",
            ]);
        }

        /*
         * A: Est admin
         * O: Appartient au même office
         * P: Est publié
         *
         * A + ( O . !P ) => A le droit de supprimer.
         * !A . ( !O + P ) => N'a pas le droit de supprimer.
         */
        if (!$this->check_role('admin')) {
            return redirect(
                "dashboard/{$this->user->office->code_name}",
            )->withErrors([
                'error' => 'Vous ne disposez pas des permissions nécessaires pour supprimer cet article.',
            ]);
        }

        $post->delete();

        return redirect("dashboard/{$post->office->code_name}")->with([
            'success' => ['Article placé dans la corbeille !'],
        ]);
    }

    public function validate(
        Request $request,
        array   $rules,
        array   $messages = [],
        array   $customAttributes = []
    ): array|RedirectResponse
    {
        if (!$this->check_role('admin')) {
            return back()->withErrors([
                'error' => 'Vous ne disposez pas des permissions nécessaires pour valider des articles.',
            ]);
        }

        $post = Post::where('id', $id_post)->first();
        $post->is_published = true;
        $post->updated_at = new DateTime('now');
        $post->save();

        return back()->with([
            'success' => ['Article validé avec succès !'],
        ]);
    }
}
