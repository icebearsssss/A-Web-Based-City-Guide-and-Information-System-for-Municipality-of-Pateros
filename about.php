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
    <title>About Us</title>

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

    <a href="home.php" class="logo">City Guide of <span style="color: #fabd02">Pateros</span> </a>

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

		<h1 class="heading"> <span>About Us</span> </h1>
		<br><br>

		<h3>About City Guide of Pateros</h3><br>
			<p>The City Guide of Pateros is a web-based city guide and information system that allows users to view and search places and others in the municipality and accesses its features to generate information that users can use when they visit the town. It serves as a guide to help people to reach the place they wanted to go to and make the most of experience. 
			So, if you’re looking for a website to know more about the municipality of Pateros. Just visit us here and explore the city with us!</p><br><br>
			
        <h3>Contact Us</h3><br>
        <h4>For inquiries and questions, you can message or contact us through <span style="color: #fabd02">cityguideofpateros@gmail.com</span></h4><br><br><br><br><br><br><br>
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