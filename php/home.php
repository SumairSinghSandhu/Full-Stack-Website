<?php
include("../includes/header.php");
include("../db/conn.php");
session_start();
if(!isset($_SESSION['loggedin']) && !$_SESSION['loggedin']){
    $_SESSION['text-message'] = true;
    header("Location: login.php");
    exit();
}
?>

<div class="hero-section bg-primary text-white py-5">
    <div class="container text-center">
        <h1 class="display-4">Welcome Back, 
        <?php
            $id = $_SESSION['username'];
            $sql = "SELECT * FROM `user_table` WHERE `id` = '$id'";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                $row = mysqli_fetch_assoc($result);
                echo $row["name"] . "!";
            } else {
                echo "No such user found!";
            }
        ?>
        </h1>
        <p class="lead">Explore new events and join our community.</p>
    </div>
</div>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-4 col-sm-6 col-12 mb-4">
            <div class="card h-100 shadow-sm">
                <img class="card-img-top" src="/assets/event1.png" alt="Children and Youth in care day">
                <div class="card-body">
                    <h5 class="card-title">Children and Youth in Care Day</h5>
                    <p class="card-text">Join us in celebrating and supporting children and youth in care. A day filled with activities, support, and love.</p>
                    <p class="card-text"><small class="text-muted">Date: August 5, 2024</small></p>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 col-12 mb-4">
            <div class="card h-100 shadow-sm">
                <img class="card-img-top" src="/assets/event2.jpg" alt="Meet our students">
                <div class="card-body">
                    <h5 class="card-title">Meet Our Students</h5>
                    <p class="card-text">Come and meet our incredible students, hear their stories, and see their amazing talents on display.</p>
                    <p class="card-text"><small class="text-muted">Date: August 10, 2024</small></p>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 col-12 mb-4">
            <div class="card h-100 shadow-sm">
                <img class="card-img-top" src="/assets/event3.jpeg" alt="Jazz festival">
                <div class="card-body">
                    <h5 class="card-title">Jazz Festival</h5>
                    <p class="card-text">Enjoy a day of jazz music featuring performances by our talented students and guest musicians.</p>
                    <p class="card-text"><small class="text-muted">Date: August 15, 2024</small></p>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 col-12 mb-4">
            <div class="card h-100 shadow-sm">
                <img class="card-img-top" src="/assets/event4.webp" alt="Dance">
                <div class="card-body">
                    <h5 class="card-title">Dance</h5>
                    <p class="card-text">Join us for an evening of dance performances by our students, showcasing their skills and passion.</p>
                    <p class="card-text"><small class="text-muted">Date: August 20, 2024</small></p>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 col-12 mb-4">
            <div class="card h-100 shadow-sm">
                <img class="card-img-top" src="/assets/event5.jpg" alt="Drawing">
                <div class="card-body">
                    <h5 class="card-title">Drawing</h5>
                    <p class="card-text">Witness the artistic talents of our students in this drawing exhibition, featuring a variety of styles and themes.</p>
                    <p class="card-text"><small class="text-muted">Date: August 25, 2024</small></p>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 col-12 mb-4">
            <div class="card h-100 shadow-sm">
                <img class="card-img-top" src="/assets/event6.jpeg" alt="Meet and greet our students">
                <div class="card-body">
                    <h5 class="card-title">Meet and Greet Our Students</h5>
                    <p class="card-text">A wonderful opportunity to meet our students, hear their stories, and learn more about our programs.</p>
                    <p class="card-text"><small class="text-muted">Date: August 30, 2024</small></p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    include("../includes/footer.php");
?>
