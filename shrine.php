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
<iframe src="https://www.google.com/maps/embed?pb=!4v1673167008794!6m8!1m7!1s23lj7qtgWj1gGGjm0kMcsQ!2m2!1d14.55121206935991!2d121.0741370464168!3f332.1815626975454!4f6.743802409102983!5f0.4000000000000002" width="1500" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>
<section class="home" id="home">
        <div class="content" data-aos="fade-up">
            <h3>Manggahan Shrine</h3> 
            <p>The Manggahan Separates Pateros From Pasig. On This Boundary Line, Two Of The Local Heroes, Macario Almeda And Marcos Lozada Were Shot To Death In Their Struggle To Defend The Town. For This Reason, Every 29th Of August, Like In Dulong Bayan, A Program Commemorating The Dead Heroes Is Held In Manggahan.</p>
            <br><br>
            <h4>other information</h4> 
            <p><b>Address:</b> Manggahan Shrine M. Almeda St. Sto. Rosario-Silangan, Pateros, Metro Manila. The Manggahan separates the Municipality of Pateros from the City of Pasig.</a></p>
            </div>
    <br><br><br>
    <div class="content" data-aos="fade-up">
    <br>
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15447.359946633103!2d121.0741343!3d14.5511414!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xce77577786c01025!2sManggahan%20Shrine%2C%20R.%20Jabson%20Street%2C%20Pateros%2C%20Metro%20Manila!5e0!3m2!1sen!2sph!4v1669592824285!5m2!1sen!2sph" width="100%" height="450px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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