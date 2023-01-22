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
    <title>History of Pateros</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file cdn link  -->
    <link rel="stylesheet" href="css/style5.css">
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

<br><br>
<section class="contact" id="contact">

    <div class="content" data-aos="fade-up">

		<h1 class="heading"> <span>HISTORICAL BACKGROUND</span> </h1>
		<br>
    <p>Southeast of Manila is Pateros, the smallest of the seventeen cities and municipalities comprising the Metropolitan Manila. Pateros before 1700 was only a barrio of Pasig called "Aguho" or "embarcadero". Aguho was derived from the name of numerous shady trees planted along the Pateros River, while "embarcadero" means a small port. As a port, Pateros was the focal point of trade and commerce not only for the entire Municipality of Pasig but also for the neighboring towns. It also served as harbor for the Malay, Chinese, Swedish and Indian vessels that periodically called to disembark merchandise and to engage in commerce. These were the reasons why Pateros as the most progressive barrio of Pasig was given the name Aguho or embarcadero.</p><br>
    <p>The Chinese traders who eventually settled in the town introduced the most famous balut industry and alfombra-slipper making. The name PATEROS came from the Tagalog words “pato” – the duck that lays the eggs for balut making, and “sapatero” – the word for shoemakers.</p><br>
    <p>The sound and stable income of Pateros led to issuance by the Spanish Governor General of a decree in 1700 creating it as a Municipality. In 1896, when the Philippine Revolution broke out, many Pateros inhabitants joined the Katipunan in the struggle for freedom from Spanish rule. These patriots attacked the Spanish soldiers fortified at the Pasig Church. The following year, the Spaniards retaliated, and after burning Pasig, swooped down on Pateros, Malapad na Bato and Taguig. On August 06, 1898, Pateros joined the revolutionary government of Emilio Aguinaldo.</p><br>
    <p>On March 29, 1900, Pateros was made a Municipality by virtue of General Order No. 40. Act. No. 137 of the Philippine Commission promulgated on June 11, 1901 incorporated Pateros with newly created province of Rizal. Two years later (October 12, 1903), Act. No. 942 consolidated Pateros, Tagig and Muntinlupa for purposes of economy and centralization, with Pateros as the seat of Municipal Government. On March 22, 1905, the "Municipality of Pateros" was changed to "Municipality of Tagig". Later, Executive Order No. 20 dated February 29, 1908 separated Pateros from Tagig. Pateros regained its independent status as a Municipality on January 1, 1909 by virtue of Executive Order No. 36. On November 7, 1975, Pateros became part of the Metropolitan Manila through Presidential Decree No. 924.</p><br>

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