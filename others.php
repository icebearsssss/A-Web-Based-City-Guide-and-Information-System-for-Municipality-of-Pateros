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
    <title>Other Information</title>

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
<br><br><br><br><br>
<!-- services section starts  -->

<section class="paterossights" id="paterossights">

    <h1 class="heading"> <span>other information</span> </h1><br><br>

    <div class="box-container">

        <div class="box" data-aos="fade-up">
            <div class="content"><br>
                <div class="price">Municipality of Pateros Emergency Hotlines and Contact Information</div><br>
                <a href="pateros_contacts.php" class="btn">Click Here</a>
            </div>
        </div>

        <div class="box" data-aos="fade-up">
            <div class="content"><br>
                <div class="price">Pateros Offices and Department Heads </div><br><br><br>
                <a href="office.php" class="btn">Click Here</a>
            </div>
        </div>

        <div class="box" data-aos="fade-up">
            <div class="content"><br>
                <div class="price">Barangays in Pateros </div><br><br><br><br><br>
                <a href="barangays.php" class="btn">Click Here</a>
            </div>
        </div>

        <div class="box" data-aos="fade-up">
            <div class="content"><br>
                <div class="price">Mission and Vision of Pateros</div>
                <a href="mv_pateros.php" class="btn">Click Here</a>
            </div>
        </div>

        <div class="box" data-aos="fade-up">
            <div class="content"><br>
                <div class="price">History of Pateros </div><br><br><br>
                <a href="history.php" class="btn">Click Here</a>
            </div>
        </div>

        <div class="box" data-aos="fade-up">
            <div class="content"><br>
                <div class="price">Notable Personalities in Pateros</div>
                <a href="personalities.php" class="btn">Click Here</a>
            </div>
        </div>
    </div>
</div>
<br><br><br>

</section>

<!-- services section ends -->

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