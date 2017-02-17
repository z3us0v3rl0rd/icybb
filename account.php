<?php
/* 
    icebb 0.1
    Copyright 2017 - Nathaniel Suchy
    License: GPL3.0
*/
include_once "./global.php";
include_once "./include/lang/" . $boardlanguage . "/global.lang.php";

if(empty($_GET)) {
    
}

elseif($_GET['request']="login") {
    
    // Include required assets for login
    include_once "./include/lang/" . $boardlanguage . "/login.lang.php";
    
    // Begin building page
    echo $l['global_htmldoctype'];
    echo $l['global_htmlheadbegin'];
    
    echo $l['login_pagetitle'];
    
    echo $l['global_htmlheadinclude'];
    echo $l['global_htmlheadend'];
    echo $l['global_bodybegin'];
    echo $l['login_begindiv'];
    echo $l['login_pageheader'];
    echo $l['login_enddiv'];
    
    echo $l['global_bodyend'];
    echo $l['global_htmlend'];
}

elseif($_GET['request']="register") {
      
    // Include required assets for registration
    include_once "./include/lang/" . $boardlanguage . "/register.lang.php";  
}

else{
    die();
}