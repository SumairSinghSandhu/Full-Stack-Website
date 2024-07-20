<?php
    include("./includes/header.php")
?>

<div class="container-fluid">
    <img class="w-100 image-container" src="/assets/window_image.webp" alt="Main window image">
    <button class="donate-button window-button" onclick="window.location.href='receive_donate.php'">Donate Now</button>
    <button class="event-button window-button" onclick="window.location.href='receive_event.php'">Upcoming Events</button>
</div>

<?php
    include("./includes/footer.php")
?>