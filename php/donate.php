<?php
    include("../includes/header.php");
    session_start();
    if(!isset($_SESSION['loggedin']) && !$_SESSION['loggedin']){
        $_SESSION['text-message']=true;
        header("Location: login.php");
        exit();
    }
?>

<div class="container-fluid ">
    <div class="donation-container text-center">
    <h1 style="font-weight: bold; font-size: 4em;">How Your Donation Makes a Difference</h1>
    <p style="font-size: 1.3em;">Your generosity plays a crucial role in transforming lives and uplifting communities.</p> 
   </div>

    <form action="/receive_payment.php" method="post">
        <div class="d-flex flex-wrap w-100 whole-box">
            <div class="row style-box col-md-6 col-sm-12 col-12 mb-4">
                <h1> Here’s how your donation is utilized:</p>
                <h4>Healthcare Support</h4>
                <p >Your donation is used to purchase essential medicines and medical supplies, ensuring that those in need
                    receive proper healthcare and treatment.</p>
                
                <h4>Supporting Education</h4>
                <p >Your contribution helps pay for faculty members' salaries, enabling us to attract and retain 
                    highly qualified educators dedicated to nurturing and inspiring students.</p>
                
                <h4>Student Necessities</h4>
                <p >Your donation helps us purchase necessary supplies and resources for students, such as textbooks, 
                    uniforms, and learning materials, creating a conducive learning environment.</p>
                
                <h4>Community Events</h4>
                <p >Your support allows us to host events that foster community spirit, provide educational opportunities, 
                    and bring people together for a common cause.</p>
                
                <hr>    
                <p >We are proud to be recognized as one of the most respected trusts, having won numerous awards for our 
                    commitment to transparency, impact, and community service. Thank you for partnering with us to make a positive 
                    change.</p>
            </div>
            <div class="row style-box col-md-6 col-sm-12 col-12 mb-4">
                 <?php
                     if (isset($_SESSION['success-message']) && $_SESSION['success-message']) {
                        echo "<div class='alert alert-success text-center m-0 p-0' role='alert'>";
                        echo "Your payment was successful!";
                        $_SESSION['success-message'] = false;
                        echo "</div>";
                     }
                    ?>
                <div class="col-md-12 text-center">
                    <h1>Payment Details</h1>
                </div>
                <div class="col-md-12 mb-3">
                    <label for="card-number">Amount</label>
                    <input type="text" id="amount" name="amount" class="form-control" required>
                </div>
                <div class="col-md-12 mb-3">
                    <label for="card-number">Card Number</label>
                    <input type="text" id="card-number" class="form-control" required>
                </div>
                <div class="col-md-6 col-sm-12 mb-3">
                    <label for="card-holder-name">Card Holder Name</label>
                    <input type="text" id="card-holder-name" class="form-control" reuired>
                </div>
                <div class="col-md-4 col-sm-6 mb-3">
                    <label for="expiry-date">Expiry Date</label>
                    <input type="text" id="expiry-date" class="form-control" required>
                </div>
                <div class="col-md-2 col-sm-6 mb-3">
                    <label for="cvv">CVV</label>
                    <input type="text" id="cvv" class="form-control" required>
                </div>
                <div class="row w-100 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>        
    </form>  
</div>

<?php
    include("../includes/footer.php")
?>
