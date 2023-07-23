<?php

$reserved = ["session-register", "sessions"];

$locked = ["robots", "sitemap", "googlee0e3fe15aa1570a4", "BingSiteAuth", "assetlinks"];
 
// $page = str_replace("/", "", $_SERVER['REQUEST_URI']);
$page = explode("/",$_SERVER['REQUEST_URI'])[count(explode("/",$_SERVER['REQUEST_URI']))-1]; 

if (isset($page)) {
    $page = explode(".", str_replace("page/", "", $page))[0];
    require "core/worker.php";

    if (in_array($page, $locked)) {
        if (end(explode(".",  $page)) == "xml") {
            header('Content-Type: text/xml');
        } else if (end(explode(".",  $page)) == "html") {
            header('Content-Type: text/html');
        } else if (end(explode(".",  $page)) == "json") {
            header('Content-Type: application/json; charset=utf-8');
        } else {
            header('Content-Type: text/text');
        }
        echo file_get_contents($page);
        die();
    }

    // check is reserved or not 
    if (in_array($page, $reserved)) {
        require $page . ".php";
        die();
    } else {
        if (strlen($page) > 0) {
            PageWorker($page);
        } else {
            PageWorker("home");
        }
    }
} else {
    require "core/home.php";
}
