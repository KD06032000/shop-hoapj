<?php

require_once './php-graph-sdk-5.x/src/Facebook/autoload.php';

if (!session_id())
{
    session_start();
}

// Call Facebook API

$facebook = new \Facebook\Facebook([
  'app_id'      => '731263568519004',
  'app_secret'     => '6a8ba10b9718752e4bd3c7b331cb3d13',
  'default_graph_version'  => 'v15.0'
]);

?>