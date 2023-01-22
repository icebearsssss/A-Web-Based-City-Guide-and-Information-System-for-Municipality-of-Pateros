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
<br><br><br>
<section class="home" id="home">
<iframe src="https://www.google.com/maps/embed?pb=!4v1673166542320!6m8!1m7!1sCOYZVylBJc4o8A74ua66mw!2m2!1d14.54022345080794!2d121.0674472036954!3f214.43335304326962!4f0.5662501265977795!5f0.7820865974627469" width="1500" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>
<section class="home" id="home">
        <div class="content" data-aos="fade-up">
            <h3>Dulong Bayan Monument</h3> 
            <p>The Historical Landmark Was Created In Memory Of Many People In Pateros Resisted Against The Spanish Authorities. Among Them Were Guillermo Manalo And Eusebio Hermosa. The Monument Is The Place Where They Died Defending Their Town And A Site Depicting The Events Of Philippine Revolution In 1896. Every August 29, A Celebration In Their Honor Is Always Held, The Monument Being The Center Of The Celebration.</p>
            <br><br>
            <h4>other information</h4> 
            <p><b>Address:</b> Bagong Calzada St. Brgy. Martinez, Pateros, Metro Manila Historical site depicting the events of Philippine Revolution in 1896.</a></p>

            </div>
    <br><br><br>
    <div class="content" data-aos="fade-up">
    <br>
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15448.131442843556!2d121.067404!3d14.5401131!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x56df7417194c7f07!2sDulong%20Bayan%20Monument%2C%20Manila%2C%20Metro%20Manila!5e0!3m2!1sen!2sph!4v1669592525628!5m2!1sen!2sph" width="100%" height="450px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

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