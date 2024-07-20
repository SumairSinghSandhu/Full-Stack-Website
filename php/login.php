<?php
    include("../includes/header.php");
    session_start();
    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']){
        echo "<div class='alert alert-info' role='alert' style='margin: 50px'>";
        echo "<h4 class='alert-heading'>Welcome back!</h4>";
        echo "<p>You are already logged in.</p>";
        echo "<hr>";
        echo "<p class='mb-0'><a href='/receive_logout.php' class='btn btn-warning'>Click here to logout</a></p>";
        echo "</div>";
        exit();
    }
?>
<div class="container d-flex align-items-center justify-content-center vh-100">
    <div class="login-container p-4 bg-light rounded shadow-sm" style="width: 100%; max-width: 500px;">
        <form class="login-form" action="/receive_login.php" method="post">
        <?php
            if(isset($_SESSION['text-message']) && $_SESSION['text-message']){
                echo "<div class='alert alert-info text-center' role='alert'> 
                        <h4>Please login first</h4>
                    </div>";
                $_SESSION['text-message'] = false;
            }
        ?>
            <?php
                if(isset($_SESSION['error-message'])){
                    echo "<div class='alert alert-danger text-center' role='alert'>". $_SESSION['error-message']."</div>";
                    unset($_SESSION['error-message']);
                }
            ?>
            <h3 class="text-center mb-4">Sign In</h3>
            <div class="form-group mb-3">
                <label for="username">Enter Member Id</label>
                <input type="text" name="id" id="username" class="form-control" required>
            </div>
            <div class="form-group mb-3">
                <label for="password">Enter Password</label>
                <input type="password" name="password" id="password" class="form-control" required>
            </div>
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary">Sign In</button>
            </div>
            <div class="mt-3 text-center">
                <p>Don't have an account? <a href="signup.php" class="text-primary">Sign Up</a></p>
            </div>
        </form>
    </div>
</div>

<?php
    include("../includes/footer.php");
?>
