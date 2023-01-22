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
    <title>Barangays in Pateros</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file cdn link  -->
    <link rel="stylesheet" href="css/style4.css">
	<link rel="stylesheet" href="css/home_style.css">

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

<br><br><br><br><br><br>

<h1 class="heading"> <span>Barangays in Pateros</span> </h1>

<section class="contact" id="contact">
   
    <div class="content" data-aos="fade-up">
                     <h6>BARANGAY SANTO ROSARIO SILANGAN</h6>
                        <p>Santo Rosario‑Silangan is a barangay in the municipality of Pateros. Its population as determined by the 2020 Census was 4,693. This represented 7.19% of the total population of Pateros. 
                        <a href="https://www.google.com/maps/dir//Santo+Rosario+Silangan,+Pateros,+Metro+Manila/@14.5496418,121.0738075,17z/data=!4m8!4m7!1m0!1m5!1m1!1s0x3397c883f654b3ad:0x8616a55b498f9288!2m2!1d121.0743554!2d14.5497917"><b>See Directions</b></a></p>
                     <h6>BARANGAY AGUHO</h6>
                        <p>Aguho is a barangay in the municipality of Pateros. Its population as determined by the 2020 Census was 7,322. This represented 11.23% of the total population of Pateros.
                        <a href="https://www.google.com/maps/dir//Agujo,+Pateros,+Metro+Manila/@14.5427098,121.0619,17z/data=!4m8!4m7!1m0!1m5!1m1!1s0x3397c8913dbf5137:0xc4aa7b814f1df5f9!2m2!1d121.0646827!2d14.5424845"><b>See Directions</b></a></p>
                     <h6>BARANGAY MAGTANGGOL</h6>
                        <p>Magtanggol is a barangay in the municipality of Pateros. Its population as determined by the 2020 Census was 1,388. This represented 2.13% of the total population of Pateros.
                        <a href="https://www.google.com/maps/dir//Magtanggol,+Pateros,+Metro+Manila/@14.5481386,121.0701007,18z/data=!4m8!4m7!1m0!1m5!1m1!1s0x3397c88456e2ed29:0xbab8d7bc9daa2ec5!2m2!1d121.0711313!2d14.5480023"><b>See Directions</b></a></p>
                     <h6>BARANGAY POBLACION</h6>
                        <p>Poblacion is a barangay in the municipality of Pateros. Its population as determined by the 2020 Census was 2,000. This represented 3.07% of the total population of Pateros.
                        <a href="https://www.google.com/maps/dir//Poblacion,+Pateros,+Metro+Manila/@14.5451797,121.0658608,17z/data=!4m8!4m7!1m0!1m5!1m1!1s0x3397c89aa0dae55d:0xf413e31abd92dbfb!2m2!1d121.0671905!2d14.544379"><b>See Directions</b></a></p>
                     <h6>BARANGAY SAN ROQUE</h6>
                        <p>San Roque is a barangay in the municipality of Pateros. Its population as determined by the 2020 Census was 4,749. This represented 7.28% of the total population of Pateros.
                        <a href="https://www.google.com/maps/dir//San+Roque,+Pateros,+Metro+Manila/@14.5420215,121.0652767,16z/data=!4m8!4m7!1m0!1m5!1m1!1s0x3397c89a3f4a0451:0xf22c0ef3f2a1d8a1!2m2!1d121.0696983!2d14.5398115"><b>See Directions</b></a></p>
                    </div>

                    <div class="content" data-aos="fade-up">

                     <h6>BARANGAY SANTA ANA</h6>
                        <p>Santa Ana is a barangay in the municipality of Pateros. Its population as determined by the 2020 Census was 29,680. This represented 45.50% of the total population of Pateros.
                        <a href="https://www.google.com/maps/dir//Santa+Ana,+Pateros,+Metro+Manila/@14.5445392,121.0679165,16z/data=!4m8!4m7!1m0!1m5!1m1!1s0x3397c89b40b50455:0x84c2185cd6c6ebe7!2m2!1d121.072206!2d14.5442907"><b>See Directions</b></a></p>
                     <h6>BARANGAY SANTO ROSARIO KANLURAN</h6>
                        <p>Santo Rosario‑Kanluran is a barangay in the municipality of Pateros. Its population as determined by the 2020 Census was 5,345. This represented 8.19% of the total population of Pateros.
                        <a href="https://www.google.com/maps/dir//Santo+Rosario+Kanluran,+Pateros,+Metro+Manila/@14.5516128,121.0661912,17z/data=!4m8!4m7!1m0!1m5!1m1!1s0x3397c88604151317:0xcf3d55ea1b5785ba!2m2!1d121.0675488!2d14.5517584"><b>See Directions</b></a></p>
                     <h6>BARANGAY TABACALERA</h6>
                        <p>Tabacalera is a barangay in the municipality of Pateros. Its population as determined by the 2020 Census was 2,805. This represented 4.30% of the total population of Pateros.
                        <a href="https://www.google.com/maps/dir//Tabacalera,+Pateros,+Metro+Manila/@14.5494607,121.0669901,18z/data=!4m8!4m7!1m0!1m5!1m1!1s0x3397c8858935eea3:0x6e1bb0e296ef96e3!2m2!1d121.0682653!2d14.5497146"><b>See Directions</b></a></p>
                     <h6>BARANGAY MARTIRES DEL 96</h6>
                        <p>Martires del 96 is a barangay in the municipality of Pateros. Its population as determined by the 2020 Census was 5,027. This represented 7.71% of the total population of Pateros.
                        <a href="https://www.google.com/maps/dir//Martinez+Del+96,+Pateros,+Metro+Manila/@14.540149,121.0642371,17z/data=!4m8!4m7!1m0!1m5!1m1!1s0x3397c8973fc636f1:0x80cea2d675525741!2m2!1d121.0664258!2d14.5401438"><b>See Directions</b></a></p>
                    <h6>BARANGAY SAN PEDRO</h6>
                        <p>San Pedro is a barangay in the municipality of Pateros. Its population as determined by the 2020 Census was 2,218. This represented 3.40% of the total population of Pateros.
                        <a href="https://www.google.com/maps/dir//San+Pedro,+Pateros,+Metro+Manila/@14.5467302,121.0666599,18z/data=!4m8!4m7!1m0!1m5!1m1!1s0x3397c8855562e377:0x783375d6666c4f9!2m2!1d121.0671905!2d14.546964"><b>See Directions</b></a></p>
                </div>
                    
</section><br><br>

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



