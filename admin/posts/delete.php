<?php

if($request['action'] == 'delete' && !empty($request['id'])) {

    $app['db']->table($request['type'])->delete(['ID', '=', $request['id']]);

    redirect(APP_URL . '/admin/index.php?action=read&type=' . $request['type']);
}
