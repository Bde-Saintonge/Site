<?php

namespace App\Observers;

use App\Models\Post;
use App\Services\PostService;

class PostObserver
{
    /**
     * Handle the Post "creating" event.
     *
     * @param \App\Models\Post $post
     * @return void
     */
    public function creating(Post $post, PostService $postService)
    {
        $post->slug = $postService->GenerateSlug($post->title);
        $post->summary = $postService->GenerateSummary($post->content);
    }

    /**
     * Handle the Post "updating" event.
     *
     * @param \App\Models\Post $post
     * @return void
     */
    public function updating(Post $post)
    {
        //
    }
}
