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
    <title>Mission and Vision</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file cdn link  -->
    <link rel="stylesheet" href="css/style6.css">
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

<br>
<section class="contact" id="contact">

    <div class="content" data-aos="fade-up">

		<h1 class="heading"> <span>Mission</span> </h1>
		
    <p>Diversify the economic structure and provide new economic development opportunities for the municipality</p>
    <p>Increase economic linkages with neighboring urban areas</p>
    <p>Improve the overall health condition of the populace</p>
    <p>Improve the provision of social services to the underprivileged and vulnerable members of the community</p>
    <p>Improve the competitiveness of the municipality as a human resource base in the national and global arena</p>
    <p>Improve mobility by providing intra and inter-municipal access</p>
    <p>Provide for a green and open space system to improve overall environmental quality</p>
    <p>Minimize effects of flooding and natural hazards</p>
    <p>Improve capacity for income and resource generation and mobilization thereby decreasing the LGU's dependence on the Internal Revenue Allotment</p>
		
    <h1 class="heading"> <span>Vision</span> </h1>
    <p>Pateros as an urban village sustained by the information economy and a healthy, educated, skilled and empowered citizenry living in a peaceful, orderly and environmentally sustainable community achieved through a highly responsible local government leadership.</p>

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