<?php

namespace App\Observers;

use App\Models\Post;

class PostObserver
{
    /**
     * Handle the Post "creating" event.
     *
     * @param \App\Models\Post $post
     * @return void
     */
    public function creating(Post $post)
    {
        function slugify($text)
        {
            $text = html_entity_decode($text);
            // Strip html tags
            $text = strip_tags($text);
            // Replace non letter or digits by -
            $text = preg_replace('~[^\pL\d]+~u', '-', $text);
            // Transliterate
            setlocale(LC_ALL, 'en_US.utf8');
            $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
            // Remove unwanted characters
            $text = preg_replace('~[^-\w]+~', '', $text);
            // Trim
            $text = trim($text, '-');
            // Remove duplicate -
            $text = preg_replace('~-+~', '-', $text);
            // Lowercase
            $text = strtolower($text);
            // Check if it is empty
            if (empty($text)) {
                return 'n-a';
            }
            // Return result
            return $text;
        }

        function summary($text)
        {
            $text = html_entity_decode($text);
            $text = strip_tags($text);
            $text = str_replace(array("\r", "\n"), ' ', $text);
            return strlen($text) > 100
                ? substr($text, 0, 97) . "..."
                : substr($text, 0, strlen($text)) . "...";
        }

        $post->slug = slugify($post->title);
        $post->summary = summary($post->content);
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
