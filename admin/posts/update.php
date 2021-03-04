<?php

if($request['action'] == 'update' && empty($_POST)) {

    $post = $app['db']->table('posts')->where('ID', '=', $request['id'])->first();

    include APP_VIEWS . '/backend/posts/update.php';
}

if($request['action'] == 'update' && !empty($_POST)) {

    $app['db']->table($request['type'])->update('ID', $_POST['id'], [
        'title' => $_POST['title'],
        'slug' => $_POST['slug'],
        'body' => $_POST['body'],
    ]);

    redirect(APP_URL . '/admin/index.php?action=read&type=' . $request['type']);

}