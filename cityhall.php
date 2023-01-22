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
    <title>Pateros Sights</title>

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
<br><br><br>
<section class="home" id="home">
<iframe src="https://www.google.com/maps/embed?pb=!4v1673160580880!6m8!1m7!1sRnE4E5rSlzRcGNQlL6LZKw!2m2!1d14.5422877038631!2d121.0645494885951!3f178.7369679795392!4f7.898457495553586!5f0.4000000000000002" width="1500" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>

<section class="home" id="home">
        <div class="content" data-aos="fade-up">
            <h3>Pateros Municipal Hall</h3> 
            <p>Pateros Municipal Hall is a town hall in Pateros, Metro Manila located on G. de Borja Street. Pateros Municipal Hall is situated nearby to Diocesan Shrine of Saint Marta, San Roque Parish and Forbes Park.</p>
            <br><br>
            <h4>other information</h4> 
            <p><b>Address:</b> 841 G. de Borja, Pateros, Metro Manila</p>
            <p><b>Hours: </b></p>
            <p><b>Sunday</b>	Closed</p>
            <p><b>Monday</b>	8AM–5PM</p>
            <p><b>Tuesday</b>	8AM–5PM</p>
            <p><b>Wednesday</b>	8AM–5PM</p>
            <p><b>Thursday</b>	8AM–5PM</p>
            <p><b>Friday</b>	8AM–5PM</p>
            <p><b>Saturday</b>	Closed</p>
            <p><b>Phone:</b> (02) 8642 3390</p>
            </div>
        <br><br><br>
    <div class="content" data-aos="fade-up">
    <br>
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15447.99338467679!2d121.064643!3d14.5420872!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x9031c4f87df90d7a!2sPateros%20Municipal%20Hall!5e0!3m2!1sen!2sph!4v1673160653466!5m2!1sen!2sph" width="100%" height="450px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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