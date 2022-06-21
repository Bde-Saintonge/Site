<?php

namespace App\Services;

class PostService
{
    public function __construct()
    {
    }

    //TODO : Verif strip tags et verif transfo en html entities
    public function GenerateSlug(string $text)
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

    public function GenerateSummary(string $text)
    {
        $text = html_entity_decode($text);
        $text = strip_tags($text);
        $text = str_replace(["\r", "\n"], ' ', $text);
        return strlen($text) > 100
            ? substr($text, 0, 97) . '...'
            : substr($text, 0, strlen($text)) . '...';
    }
}
