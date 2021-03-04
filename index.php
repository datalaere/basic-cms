<?php

require 'app/bootstrap.php';


if($post_id = request_query('id')) {

    $post = $app['db']->table('posts')->where('ID', '=', $post_id)->first();

    if($post) {
        $post->created = new DateTime($post->created);

        if($post->updated) {
            $post->updated = new DateTime($post->updated);
        }
    }

    include APP_VIEWS . '/frontend/posts/show.php';

} else {

    $posts = $app['db']->table('posts')->get(['*'])->results();

    include APP_VIEWS . '/frontend/home.php';
}