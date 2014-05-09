<?php
session_start();

function confirm_admin(){
    if(!isset($_SESSION['user_id'])){
        header("Location: index2.php");
    }elseif(isset($_SESSION['user_id']) && $_SESSION['username']!="admin"){
        header("Location: user_front.php");
    }
}

function confirm_logged_in(){
    if(!isset($_SESSION['user_id'])){ 
        header("Location: index.php");
    }
}

?>