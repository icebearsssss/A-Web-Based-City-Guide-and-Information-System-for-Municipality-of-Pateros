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
<iframe src="https://www.google.com/maps/embed?pb=!4v1673163602997!6m8!1m7!1sjpbZbLLEk00S4gkyrHgeZQ!2m2!1d14.54699176492238!2d121.0702883485845!3f98.17629346985339!4f4.426758391589814!5f0.7820865974627469" width="1500" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>
<section class="home" id="home">
        <div class="content" data-aos="fade-up">
            <h3>Old Houses in Pateros</h3> 
            <p>The Concio house along Almeda Street is the oldest in town. Along with some other houses along Almeda, is what remains of the old houses that once dotted the main streets leading to the church. An older house, built by the steadfast church patron Don Marcelo de Borja was demolished in the early 2000’s. How it happened and why is a question that we, the present Filipinos, must explain to the forthcoming generations.</p>
            <br><br>
            <h4>other information</h4> 
            <p><b>Address:</b> 201 M. Almeda Street, Pateros, Kalakhang Maynila</a></p><br><br>
            <h4>other related houses</h4>
            <p>Raymundo Ancestral House <a href="https://www.google.com/maps/dir//212+M.+Almeda+Street,+Pateros,+Kalakhang+Maynila/@14.5287722,121.0435321,14z/data=!4m8!4m7!1m0!1m5!1m1!1s0x3397c9e89696f005:0xd9043d5048d4de78!2m2!1d121.0723338!2d14.5486029">Click for Directions</a></p>
            <p>Natividad Ancestral House <a href="https://www.google.com/maps/dir//309+P.+Herrera,+Pateros,+Metro+Manila/@14.5481781,120.996818,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x3397c98a41eca2fd:0xc5b53c39192bac31!2m2!1d121.0668585!2d14.5481885">Click for Directions</a></p>
            <p>Santos Ancestral House <a href="https://www.google.com/maps/dir//180+M.+Almeda+Street,+Pateros,+Kalakhang+Maynila/@14.5475321,121.000933,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x3397c9c839e9dedf:0x1212791f6b78b107!2m2!1d121.0709801!2d14.5475315">Click for Directions</a></p>
            <p>Reyes Ancestral House <a href="https://www.google.com/maps/dir//888+P.+Herrera,+Pateros,+1620+Metro+Manila/@14.5442364,120.9951572,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x3397c9da1f0fd52d:0x7b547ba315383db8!2m2!1d121.0652035!2d14.5442447">Click for Directions</a></p>
            <p>Tuazon Ancestral House <a href="https://www.google.com/maps/dir//323+P.+Herrera,+Pateros,+Metro+Manila/@14.5468283,120.9962866,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x3397c92ef3d40717:0x4fbcf3f2da17985d!2m2!1d121.0663271!2d14.5468387">Click for Directions</a></p>
            <p>Samson-Borja Ancestral House <a href="https://www.google.com/maps/dir//181+Almeda,+Pateros,+1622+Metro+Manila/@14.5463506,120.9997565,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x3397c9824c034ba9:0x1ab7183d744c4047!2m2!1d121.0697735!2d14.5463863">Click for Directions</a></p>
            <p>House of Inang Sisa <a href="https://www.google.com/maps/dir//135+Almeda,+Pateros,+1620+Metro+Manila/@14.5447936,120.9983595,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x3397c96151ba5d41:0x535fe7076bb73a9a!2m2!1d121.0683376!2d14.5448437">Click for Directions</a></p>
            <p>Dr. Anto de Borja Ancestral House <a href="https://www.google.com/maps/dir//330+M.+Almeda+Street,+Pateros,+Kalakhang+Maynila/@14.5480901,121.0020439,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x3397c954be42fbf5:0x5f2bd02ae3801a54!2m2!1d121.0720715!2d14.548125">Click for Directions</a></p>
            </div>
    <br><br><br>
    <div class="content" data-aos="fade-up">
    <br>
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15447.64994657212!2d121.070387!3d14.5469969!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf78ab7e76ae917d8!2sConcio%20Ancestral%20House!5e0!3m2!1sen!2sph!4v1669592105903!5m2!1sen!2sph" width="100%" height="450px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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