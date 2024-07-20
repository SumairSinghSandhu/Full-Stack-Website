<?php 
    $title = 'view records';
    require_once './includes/header.php';
    require_once './db/conn.php';
    session_start();
    $id = $_POST['id'];
    $inputPassword = $_POST['password'];
    $hasedPassword = password_hash($inputPassword, PASSWORD_DEFAULT);
    $sql = "SELECT * FROM `user_table` WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $storedPassword = $row['password'];
        if (password_verify($inputPassword, $storedPassword)) {
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $id;
            header("Location: ./php/home.php");
        } else {
            $_SESSION['error-message'] = "Invalid Id or Password!";
            header("Location: ./php/login.php");
        }
    } else {
        $_SESSION['error-message'] = "User does not exist!";
        header("Location: ./php/login.php");
    }
    $stmt->close();
    $conn->close();
?>
