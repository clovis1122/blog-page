<?php

namespace App\interfaces;

/**
  * Provide the methods to retrieve or store some posts
  * data on the database.
  */

Interface PostInterface
{
    public static function getAll();

    public static function latestPosts($numberOfPosts);

    public static function createPost($user_id, $title, $entry);

    public static function findById($post_id);

    public static function addComment($user_id, $post_id, $body);

}
