<?php 
    $title = 'view records';
    require_once './includes/header.php';
    require_once './db/conn.php';
    
    session_start();
    if(isset($_SESSION['username'])){
        
        header("Location: ./php/home.php");
        exit();
    }else{
        $_SESSION['text-message']=true;
        header("Location: ./php/login.php");
        exit();
    }
 ?>
