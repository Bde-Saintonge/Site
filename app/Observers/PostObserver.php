<?php

namespace App\Observers;

use App\Models\Post;
use App\Services\PostService;

class PostObserver
{
    /**
     * Handle the Post "creating" event.
     *
     * @param Post $post
     * @return void
     */
    public function creating(Post $post): void
    {
        $post->slug = PostService::GenerateSlug($post->title);
        $post->summary = PostService::GenerateSummary($post->text);
    }

    /**
     * Handle the Post "updating" event.
     *
     * @param Post $post
     * @return void
     */
    public function updating(Post $post): void
    {
        $post->summary = PostService::GenerateSummary($post->text);
    }
}
