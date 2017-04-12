<?php

namespace App\repository;

/**
  * Provide the methods to retrieve or store some posts
  * data on the database.
  */

use App\Post as post;
use App\interfaces\PostInterface;

class PostRepository implements PostInterface
{
    public static function getAll()
    {
        return post::with('tags');
    }

    public static function latestPosts($numberOfPosts)
    {
        if ($numberOfPosts) {
            return post::with('tags')->latest()->paginate($numberOfPosts);
        }
        return post::with('tags')->latest();
    }

    public static function createPost($user_id, $title, $entry)
    {
        return post::create([
            'user_id' => $user_id,
            'title' => $title,
            'entry' => $entry
        ]);
    }

    public static function findById($post_id)
    {
        return post::find($post_id);
    }

    public static function addComment($user_id, $post_id, $body)
    {
        return post::find($post_id)->comments()->create([
            'body'=>$body,
            'user_id'=>$user_id
            ]);
    }
}
