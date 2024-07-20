<?php
    require_once './db/conn.php';
    $name=$_POST['name'];
    $dob=$_POST['dob'];
    $phone =$_POST['phone'];
    $password= $_POST['password'];
    $cnfrm_password= $_POST['cnfrm-password'];
    $reason = $_POST['reason'];

    echo "<p>$name</p>";
    echo "<p>$dob</p>";
    echo "<p>$phone</p>";
    echo "<p>$password</p>";
    echo "<p>$cnfrm_password</p>";
    echo "<p>$reason</p>";

    session_start();
    if($password===$cnfrm_password){
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $sql="INSERT INTO `user_table`(`name`, `dob`, `phone`, `password`, `reason`) 
        VALUES ('$name','$dob','$phone','$hashedPassword','$reason')";
        if (mysqli_query($conn, $sql)) {
            echo "Record added successfully!";
            $_SESSION['loggedin']=true;
            $id = mysqli_insert_id($conn);
            $_SESSION['username']=$id;
            header("Location: ./php/home.php");
        } else {
            echo "Error: " . mysqli_error($conn);
        }        

    }else{
        $_SESSION['error-message']="Password does not match";
        header("Location: ./php/signup.php");
    }
    
?>