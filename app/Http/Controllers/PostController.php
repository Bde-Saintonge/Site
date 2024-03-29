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
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class PostController extends Controller
{
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

    public function store(
        RegisterPostRequest $request
    ): Redirector|RedirectResponse|Application {
        $validated = $request->safe()->all();
        // TODO: Mutator on post model.

        $post = Post::create([
            'title' => $validated['title'],
            'image_url' => $validated['image_url'],
            'text' => $validated['text'],
            'office_id' => Office::where('code_name', $validated['office'])->first()->id,
        ]);

        return redirect()->route('admin.dashboard', ['office' => $post->office->code_name])->with([
            'success' => ['Article créer avec succès !'],
        ]);
    }

    public function show(Office $office, Post $post): RedirectResponse|Application|Factory|View
    {
        if (!$post->is_published && !Auth::check()) {
            return redirect()->route('auth.login')->withErrors([
                'error' => 'Vous ne disposez pas des permissions nécessaires pour voir cet article.',
            ]);
        }

        return view('posts.show', compact('post'));
    }

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

    // TODO

    public function update(RegisterPostRequest $request, Post $post): Redirector|RedirectResponse|Application
    {
        $validated = $request->safe()->all();

        $post->update([
            'title' => $validated['title'],
            'image_url' => $validated['image_url'],
            'text' => $validated['text'],
        ]);

        return redirect()->route('admin.dashboard', ['office' => $post->office->code_name])->with([
            'success' => ['Article modifié avec succès !'],
        ]);
    }

    public function destroy(Post $post): Redirector|Application|RedirectResponse
    {
        if (!Gate::allows('verified-role', ['admin'])) {
            return redirect()->route('admin.dashboard')->withErrors(['error' => 'Vous ne disposez pas des permissions nécessaires pour supprimer des articles.']);
        }

        $post->delete();

        return back()->with([
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
