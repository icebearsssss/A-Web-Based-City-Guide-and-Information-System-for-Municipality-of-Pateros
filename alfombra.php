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
    <title>Products</title>

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
        <div class="content" data-aos="fade-up">
            <h3>Alfombra Slippers</h3> 
            <p>Alfombra Slippers Are Original Creations Of The Shoemakers Of Pateros Characterized By “Carpeted” Or “Hairy” Soles Made Of A Material. It Is One Of The Best Indoor Slippers Because Of Its Comfort And Durability. Colorful And Very Appealing, Every Pair Is An Absolute Beauty.</p>
            <br><br>
            <h4>Store in Pateros</h4><br>
            <p><b>Alfombra - Hannakuchichi Pateros Footwear</b></p>  
            <p><b>Address:</b> 117 M. Almeda Street, Pateros, 1620 Kalakhang Maynila
                <a href="https://www.google.com/maps/dir//Alfombra+-+Hannakuchichi+Pateros+Footwear/@14.5166674,121.0171163,13z/data=!4m8!4m7!1m0!1m5!1m1!1s0x3397c89abab2f455:0x4915948804e0fa0d!2m2!1d121.0680355!2d14.5442268"><b>See Directions</b></a></p><br>
            <p><b>Alpha Footprint Alfombra Footwear Shop</b></p>  
            <p><b>Address:</b> 34 E. Ragas Street, Pateros, 1621.
                <a href="https://www.google.com/maps/dir//Alpha+Footprint+Alfombra+Footwear+Shop/@14.5166674,121.0194427,13z/data=!4m8!4m7!1m0!1m5!1m1!1s0x3397c89ab3f669db:0xe3fdd43e103b72f0!2m2!1d121.0708354!2d14.5445481"><b>See Directions</b></a></p><br>
           </div>

            <div class="image" data-aos="fade-up">
            <br>
            <img src="images/alfombra.jpg" alt="">
            </div>

</section>

<section class="home" id="home">

        <div class="content" data-aos="fade-up">
            <h4>Making an Alfombra Slippres</h4><br>
            <p>To make an alfombra, one has to have the skill and expertise of a shoemaker. Every pair undergoes a long and tedious process, and many hands have to help in making it. </p>
            </div>

        <div class="content" data-aos="fade-up">
            <iframe width="610" height="315" src="https://www.youtube.com/embed/g1YcRl3V-pY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
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