<?php

if($request['action'] == 'create' && empty($_POST)) {
    include APP_VIEWS . '/backend/posts/create.php';
}

if($request['action'] == 'create' && !empty($_POST)) {

    $app['db']->table($request['type'])->insert([
        'title' => $_POST['title'],
        'slug' => $_POST['slug'],
        'body' => $_POST['body'],
    ]);

    redirect(APP_URL . '/admin/index.php?action=read&type=' . $request['type']);

}