<?php

require '../app/bootstrap.php';

$request = request_query();

if($request) {

    require 'create.php';
    require 'read.php';
    require 'update.php';

} else {

    include APP_VIEWS . '/backend/admin.php';
}