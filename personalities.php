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
    <title>Notable Personalities</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file cdn link  -->
    <link rel="stylesheet" href="css/style4.css">
	<link rel="stylesheet" href="css/np_style.css">

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

<br><br><br><br>
<!-- services section starts  -->

<section class="services" id="services">

    <h1 class="heading"> <span>Notable personalities</span> </h1>

    <div class="box-container">

        <div class="box" data-aos="zoom-in">
        <img src="images/mendoza.jpg" alt="">
            <h4>Pelagia Mendoza y Gotianquin</h4>
            <p>first female sculptor in the Philippines and was the first female student at the Escuela de Dibujo y Pintura (Drawing and Painting School).</p>
        </div>

        <div class="box" data-aos="zoom-in">
        <img src="images/villegas.JPG" alt="">
            <h4>Socrates Villegas</h4>
            <p>Archbishop of Lingayen-Dagupan, Former CBCP President</p>
        </div>

        <div class="box" data-aos="zoom-in">
        <img src="images/Pete_Lacaba.jpg" alt="">
            <h4>Pete Lacaba </h4>
            <p>poet, writer and journalist</p>
        </div>

        <div class="box" data-aos="zoom-in">
        <img src="images/lacaba.jpg" alt="">
            <h4>Emmanuel Lacaba</h4>
            <p> poet, writer and activist</p>
        </div>

        <div class="box" data-aos="zoom-in">
        <img src="images/jimmy.jpg" alt="">
            <h4>Jimmy Santos </h4>
            <p>Filipino Actor, PBA Basketball Player, and TV Host, Eat Bulaga!</p>
        </div>

        <div class="box" data-aos="zoom-in">
        <img src="images/labra.jpg" alt="">
            <h4>Berting Labra </h4>
            <p>Actor, Side kick of FPJ</p>
        </div>

        <div class="box" data-aos="zoom-in">
        <img src="images/daisy.jpg" alt="">
            <h4>Daisy Reyes</h4>
            <p>Beauty Queen, Actress</p>
        </div>
    
    </section><br>
        
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