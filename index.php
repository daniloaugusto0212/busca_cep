<?php

require 'config.php';

$url = explode('/', $_SERVER['REQUEST_URI']);

include('pages/header.php');

if ($url[2] == '') {
    include('pages/home.php');
} else {
    include('pages/' . $url[2] . '.php');
}


include('pages/footer.php');
