<?php

if($request['action'] == 'read') {
    $posts = $app['db']->table($request['type'])->get(['*'], ['type', '=', $request['type']], ['ORDER BY' => 'created ASC'])->results();

    if($post) {
        $post->created = new DateTime($post->created);

        if($post->updated) {
            $post->updated = new DateTime($post->updated);
        }
    }

    include APP_VIEWS . '/backend/posts/read.php';
}