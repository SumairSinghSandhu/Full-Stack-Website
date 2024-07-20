<?php
    include("../includes/header.php");
    session_start();
?>

<div class="container-fluid login-container">
    <form class="login-form" action="/receive_signup.php" method="post">
        <?php
            if(isset($_SESSION['error-message'])){
                echo "<div class='text-center text-danger'>
                        <p>Password does not match.</p>
                    </div>";
                unset($_SESSION['error-message']);
            }
        ?>
        <h3 class="text-center mb-4">Sign Up</h3>
        <div class="form-group">
            <label for="username">Enter Your Name</label>
            <input type="text" id="name" name="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="member-id">Enter your Date Of Birth</label>
            <input type="date" id="dob" name="dob" class="form-control">
        </div>
        <div class="form-group">
            <label for="member-id">Phone Number</label>
            <input type="text" id="phone" name="phone" class="form-control">
        </div>
        <div class="form-group">
            <label for="member-id">Enter Password</label>
            <input type="password" id="password" name="password" class="form-control">
        </div>
        <div class="form-group">
            <label for="member-id">Confirm Password</label>
            <input type="password" id="cnfrm-password" name="cnfrm-password" class="form-control">
        </div>
        <div class="form-group">
            <label for="member-id">Reason for Joining us</label>
            <input type="text" id="reason" name="reason" class="form-control">
        </div>
        <div class="text-center mt-2">
            <button type="submit" class="btn btn-primary">Sign Up</button>
        </div>
        </form>
</div>


<?php
    include("../includes/footer.php")
?>