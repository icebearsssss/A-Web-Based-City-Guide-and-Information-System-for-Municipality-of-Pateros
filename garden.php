<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['fname'])) {

include "db_conn.php";
include 'php/User.php';
$user = getUserById($_SESSION['id'], $conn);


 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Others to Visit</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file cdn link  -->
    <link rel="stylesheet" href="css/style3.css">

</head>
<body>
    
<!-- header section starts  -->

<header class="header">

    <a href="#" class="logo">City Guide of <span style="color: #fabd02">Pateros</span> </a>

    <div class="icons">
    <div class="fas fa-search" id="search-btn"></div>
        <div class="fas fa-moon" id="theme-btn"></div>
        <div class="fas fa-bars" id="menu-btn"></div>
    </div>

    <nav class="navbar">
        <a href="home.php">home</a>
        <a href="about.php">about</a>
        <a href="others.php">others</a>
        <a href="profile.php">My Profile</a>
        <a href="logout.php">logout</a>
    </nav>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

        <br>
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15448.299198588193!2d121.0712551!3d14.537714!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x432e564d3e1acc71!2sGarden%20of%20Memories!5e0!3m2!1sen!2sph!4v1669593173777!5m2!1sen!2sph" width="100%" height="450px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        
        <div class="content" data-aos="fade-up">
            <h3>Garden Of Memories Memorial Park</h3> 
            <p>Garden Of Memories Memorial Park is next to Martires Del ’96 and is located in Philippines. Garden Of Memories Memorial Park has a length of 1.63 kilometres.</p>
            <br><br>
            <h4>other information</h4> 
            <p><b>Address:</b> 3 Bagong Calzada, Pateros, 1620 Metro Manila</p>
            <p><b>Hours: </b></p>
            <p><b>Sunday</b>    6AM–6PM</p>
            <p><b>Monday</b>    6AM–6PM</p>
            <p><b>Tuesday</b>   6AM–6PM</p>
            <p><b>Wednesday</b> 6AM–6PM</p>
            <p><b>Thursday</b>  6AM–6PM</p>
            <p><b>Friday</b>    6AM–6PM</p>
            <p><b>Saturday</b>  6AM–6PM</p>
    </div>

        <div class="image" data-aos="fade-up">
            <br>
            <img src="images/gmm.jpg" alt="">
        </div>

</section>

<!-- home section ends -->

<!-- footer section starts  -->

<section class="footer">

<div class="credit"> city guide of <span>pateros</span> | all rights reserved </div>

</section>

<!-- footer section ends -->



<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

<script>

AOS.init({
    duration:800,
    delay:400
});

</script>

</body>
</html>

<?php }else {
	header("Location: login.php");
	exit;
} ?>