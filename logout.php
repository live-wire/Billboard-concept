<?php ob_start();

    require_once("includes/functions.php");
    
    session_start();
    
    $_SESSION=array();
    
    if(!isset($_COOKIE[session_name()])){
        setcookie(session_name(),'',time()-40000,'/');
    }
    
    session_destroy();
    
    header("Location: login.php?inv=0");
    exit;
    ob_flush();
?>