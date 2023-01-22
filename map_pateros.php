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
    <title>City Guide of Pateros</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file cdn link  -->
    <link rel="stylesheet" href="css/home_style.css">

</head>
<body>

<header class="header">

    <a href="#" class="logo">City Guide of <span style="color: #fabd02">Pateros</span> </a>

    <form action="map_pateros.php" method="POST" class="search-form">
        <input type="search" name="address" placeholder="search here..." id="searchBox">
        <label for="searchBox"><button type="submit" name="submit_address" class="fas fa-search"></button></label>
    </form>

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

<?php
	if (isset($_POST["submit_address"]))
	{
		$address = $_POST["address"];
		$address = str_replace(" ", "+", $address);
	}
?>

	<section class="home" id="home">
		<iframe width="100%" height="500" src="https://maps.google.com/maps?q=<?php echo $address; ?>&output=embed"></iframe>
	</div>
	</section>

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


