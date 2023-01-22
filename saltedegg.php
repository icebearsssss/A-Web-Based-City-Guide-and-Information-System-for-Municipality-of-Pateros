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
            <h3>Salted Egg</h3> 
            <p>Pateros' famous itlog na maalat (Salted Eggs) has a rich and creamy yolk and perfectly salted egg white. Definitely the best of its kind here in the Philippines. It is the perfect combination to your fish dishes whether it be fried, grilled and stir fried.</p>
            <br><br>
            <h4>Store in Pateros</h4><br>
            <p><b>Manufacturer Duck Eggs Balut Salted Eggs</b></p>  
            <p><b>Address:</b> 11 M. Lozada Pateros, Metro Manila 
                <a href="https://www.google.com/maps/dir//Manufacturer+Duck+Eggs+Balut+Salted+Eggs/@14.5220286,121.0032525,13z/data=!4m8!4m7!1m0!1m5!1m1!1s0x3397c88618051927:0xac104dc2829bcad6!2m2!1d121.0685883!2d14.5525408"><b>See Directions</b></a></p><br>
            <p><b>Egg Industry Mfg Retailing Balut Salted</b></p>  
            <p><b>Address:</b> 17 B. Morcilla Pateros, Metro Manila
                <a href="https://www.google.com/maps/dir//Egg+Industry+Mfg+Retailing+Balut+Salted/@14.5166674,121.0204743,13z/data=!4m8!4m7!1m0!1m5!1m1!1s0x3397c89071791bc9:0x546b52c3d865a26a!2m2!1d121.0673828!2d14.5446472"><b>See Directions</b></a></p><br>
            <p><b>Edwina Almeda Salted Eggs</b></p>  
            <p><b>Address:</b> 12 C. Sexon. Pateros, Metro Manila
                <a href="https://www.google.com/maps/dir//Edwina+Almeda+Salted+Eggs/@14.5187258,121.0273802,13z/data=!4m8!4m7!1m0!1m5!1m1!1s0x3397c88f86b709dd:0x519599d2764fb6cc!2m2!1d121.0676172!2d14.5488809"><b>See Directions</b></a></p><br>

           </div>

            <div class="image" data-aos="fade-up">
            <br>
            <img src="images/Salted-Duck-Egg.jpg" alt="">
            </div>

</section>

<section class="home" id="home">

        <div class="content" data-aos="fade-up">
            <h4>Recipe Suggestion</h4><br>
            <p>Everybody is loving the salted egg craze and many have brought this flavor to delicious recipes like salted egg chips, chicharon, bagnet, fried chicken, ice cream and yema cake.</p>
            </div>

        <div class="content" data-aos="fade-up">
            <iframe width="610" height="315" src="https://www.youtube.com/embed/5Suqrj1cl50" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
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