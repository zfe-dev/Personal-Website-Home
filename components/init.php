<?php
/* Setting up the default environment variables */
define('__ROOT__',$_SERVER['DOCUMENT_ROOT']);

/* Setting up the server functions */
require_once(__ROOT__.'/server/functions.php');


/* Language handler */
//default value
$lang = "en";

//Handle language
if (isset($_COOKIE['lang'])) {
    $lang = $_COOKIE['lang'];
} else {
    $lang = explode('-',explode(',',$_SERVER['HTTP_ACCEPT_LANGUAGE'])[0])[0];
    if (($lang != 'en') && ($lang != 'fr')) {
        $lang = 'en';
    }
}

//Modified value by user
if (isset($_GET['lang'])) {
    $lang = $_GET['lang'];
}

setcookie('lang',$lang,time()+ 365*24*3600,null,null,false,true);

//Import right translation files
foreach (glob(__ROOT__."/language/{$lang}/*.php") as $phpfile) {
    require_once($phpfile);
}