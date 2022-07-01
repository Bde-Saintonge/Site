<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterPostRequest;
use App\Models\Office;
use App\Models\Post;
use DateTime;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class PostController extends Controller
{
    /**
     * @param Office $office
     * @return Factory|View|Application
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
            ->paginate(7)
        ;

        return view('posts.index', compact('posts', 'office'));
    }

    public function create(): Factory|View|Redirector|RedirectResponse|Application
    {
        $office = Gate::allows('verified-role', ['admin'])
            ? Office::all()
            : auth()->user()->office;

        return view('posts.create', ['offices' => $office]);
    }

    /**
     * @param RegisterPostRequest $request
     * @return Redirector|RedirectResponse|Application
     */
    public function store(
        RegisterPostRequest $request
    ): Redirector|RedirectResponse|Application {
        $validated = $request->safe()->all();
        // TODO: Mutator on post model.

        $post = Post::create([
            'title' => $validated['title'],
            'image_url' => $validated['image_url'],
            'content' => $validated['content'],
            'office_id' => Office::where('code_name', $validated['office'])->first()->id,
        ]);

        return redirect()->route('admin.dashboard')->with([
            'success' => ['Article créer avec succès !'],
        ]);
    }

    /**
     * @param Office $office
     * @param Post $post
     * @return RedirectResponse|Application|Factory|View
     */
    public function show(Office $office, Post $post): RedirectResponse|Application|Factory|View
    {
        if (!$post->is_published && !Auth::check()) {
            return redirect()->route('auth.login')->withErrors([
                'error' => 'Vous ne disposez pas des permissions nécessaires pour voir cet article.',
            ]);
        }

        return view('posts.show', compact('post'));
    }

    /**
     * @param Post $post
     * @return Factory|View|Application|RedirectResponse
     */
    public function edit(Post $post): Factory|View|Application|RedirectResponse
    {
        if (!Gate::allows('verified-role', ['admin']) && !Gate::allows('verified-office', [$post->office->code_name])
        ) {
            return back()->withErrors([
                'error' => 'Vous ne disposez pas des permissions nécessaires pour modifier cet article.',
            ]);
        }

        return view('posts.update', [
            'post' => $post,
        ]);
    }

    /**
     * @param RegisterPostRequest $request
     * @return Redirector|RedirectResponse|Application
     */
    public function update(RegisterPostRequest $request): Redirector|RedirectResponse|Application
    {
        if (!Gate::allows('verified-role', ['admin']) && !Gate::allows('verified-office', [$post->office->code_name])
        ) {
            return back()->withErrors([
                'error' => 'Vous ne disposez pas des permissions nécessaires pour modifier cet article.',
            ]);
        }

        $validated = $request->safe()->all();
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

        return redirect()->route('admin.dashboard')->with([
            'success' => ['Article modifié avec succès !'],
        ]);
    }

    /**
     * @param Post $post
     * @return Redirector|Application|RedirectResponse
     */
    public function destroy(Post $post): Redirector|Application|RedirectResponse
    {
        if (!Gate::allows('verified-role', ['admin'])) {
            return redirect()->route('admin.dashboard')->withErrors(['error' => 'Vous ne disposez pas des permissions nécessaires pour supprimer des articles.']);
        }

        $post->delete();

        return redirect()->route('admin.dashboard')->with([
            'success' => ['Article placé dans la corbeille !'],
        ]);
    }

    public function accept(Post $post): array|RedirectResponse
    {
        if (
            !Gate::allows('verified-role', ['admin'])
        ) {
            return redirect()->route('admin.dashboard')->withErrors(['error' => 'Vous ne disposez pas des permissions nécessaires pour valider des articles.']);
        }

        $post->is_published = true;
        $post->updated_at = new DateTime('now');
        $post->save();

        return back()->with([
            'success' => ['Article validé avec succès !'],
        ]);
    }
}
