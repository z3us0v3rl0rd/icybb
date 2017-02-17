<?php
/* 
    icybb 0.1
    Copyright 2017 - IcyBB Project
    License: GPL3.0
*/
include_once "./global.php";
include_once "./include/lang/" . $boardlanguage . "/account.lang.php";
include_once "./include/lang/" . $boardlanguage . "/global.lang.php";

// Setup PHP Switching rather than tradatitional If, Else, ElseIf
$request = $_GET['request'];

switch ($request) {
    case "":
        // Build page
        echo $l['global_htmldoctype'];
        echo $l['global_htmlheadbegin'];
        echo $l['account_pagetitle'];
        echo $l['global_htmlheadinclude'];
        echo $l['global_htmlheadend'];
        echo $l['global_bodybegin'];

        echo $l['account_begindiv'];
        echo $l['account_pageheader'];
        echo $l['account_noaction'];
        echo $l['account_enddiv'];

        echo $l['global_bodyend'];
        echo $l['global_htmlend']; 
    break;
    
    case "login":
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
    break;
    
    case "register":
        // Include required assets for registration
         include_once "./include/lang/" . $boardlanguage . "/register.lang.php"; 
    
        // Begin building page
        echo $l['global_htmldoctype'];
        echo $l['global_htmlheadbegin'];
    
        echo $l['register_pagetitle'];
    
        echo $l['global_htmlheadinclude'];
        echo $l['global_htmlheadend'];
        echo $l['global_bodybegin'];
    
        echo $l['register_begindiv'];
        echo $l['register_pageheader'];
        echo $l['register_enddiv'];
    
        echo $l['global_bodyend'];
        echo $l['global_htmlend'];
    break;
    
    default:
        // Build page
        echo $l['global_htmldoctype'];
        echo $l['global_htmlheadbegin'];
        echo $l['account_pagetitle'];
        echo $l['global_htmlheadinclude'];
        echo $l['global_htmlheadend'];
        echo $l['global_bodybegin'];

        echo $l['account_begindiv'];
        echo $l['account_pageheader'];
        echo $l['account_noaction'];
        echo $l['account_enddiv'];

        echo $l['global_bodyend'];
        echo $l['global_htmlend']; 
}