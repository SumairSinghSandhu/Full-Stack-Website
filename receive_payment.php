<?php
    require_once './includes/header.php';
    require_once './db/conn.php';
    session_start();
    if($_SERVER["REQUEST_METHOD"] == 'POST'){
        $id=$_SESSION['username'];
        $amount=$_POST['amount'];
        $sql ="INSERT INTO `payment`(`user_id`, `payment`) VALUES ('$id','$amount')";
        if (mysqli_query($conn, $sql)) {
            $_SESSION['success-message']=true;
            header("Location: ./php/donate.php");
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }
?>