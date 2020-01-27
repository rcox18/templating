<?php
session_start();
/**
 *  An index controller page for rcox.greenriverdev.com/IT328/templating.
 *
 * @author     Robert Cox
 * @version    1.0.0
 * @link       http://rcox.greenriverdev.com/IT328/templating
 * @since      1/27/2020
 */

// error reporting turned on
ini_set('display_errors', 1);
error_reporting(E_ALL);

//require autoload.php
require("vendor/autoload.php");
//instantiate fat-free
$f3 = Base::instance();

//define routes and set the session values
$f3->route("GET /", function () {
    $view = new Template();
    echo $view->render("views/home.html");
});

//run fat free
$f3->run();