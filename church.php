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

<!-- header section ends -->

<!-- home section starts  -->
<br><br><br>
<section class="home" id="home">
<iframe src="https://www.google.com/maps/embed?pb=!4v1673158047429!6m8!1m7!1s8aAAwj1sJUg9qnOwD-dkUA!2m2!1d14.54495520679728!2d121.0668838471683!3f0.4293528575026612!4f1.463675315169084!5f0.7820865974627469" width="1500" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>
<section class="home" id="home">
        <div class="content" data-aos="fade-up">
            <h3>Diocesan Shrine Of Sta. Marta - San Roque Parish</h3> 
            <p>Pateros Church, also known as the San Roque Parish Church, is a Roman Catholic church under the order of the Augustinians located in the municipality of Pateros, Metro Manila, Philippines.</p>
            <br><br>
            <h4>other information</h4> 
            <p><b>Address:</b> G3W8+3RW, B. Morcilla St, Pateros, Metro Manila</a></p>
            <p><b>Phone:</b> (02) 8642 8219</p>
            <p><b>Priest(s):</b> Rev. Fr. Jorge Jesus Bellosillo</p>
            <p><b>Architectural style:</b> Baroque architecture</p>
            <p><b>Diocese:</b> Diocese of Pasig</p>
            <p><b>Opened:</b> August 16, 1816</p>
            <p><b>Founder(s): </b>Fray Andres Vehil</p>
            <p><b>Bishop(s):</b> Bishop Mylo Hubert Claudio Vergara</p>
            </div>
    <br><br><br>
    <div class="content" data-aos="fade-up">
    <br>
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15447.772352731718!2d121.0670899!3d14.5452472!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc846b64031147ba4!2sDiocesan%20Shrine%20of%20Sta.%20Marta%20-%20San%20Roque%20Parish!5e0!3m2!1sen!2sph!4v1669563388003!5m2!1sen!2sph" width="100%" height="450px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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