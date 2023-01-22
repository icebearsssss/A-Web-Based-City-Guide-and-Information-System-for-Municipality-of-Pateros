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
            <h3>Balut</h3> 
            <p>Balut, A Fertilized Duck Embryo Boiled As A Delicacy, Is One Of The Most Prominent Exotic Food The Philippines Is Known For. Pateros, Being The Last Municipality In The National Capital Region (NCR), Was Once Host To A Multitude Of Duck Farms And Balut Houses That Use The Traditional Method Of Incubating Egg.</p>
            <br><br>
            <h4>Store in Pateros</h4><br>
            <p><b>Manufacturer Duck Eggs Balut Salted Eggs</b></p>  
            <p><b>Address:</b> 11 M. Lozada Pateros, Metro Manila 
                <a href="https://www.google.com/maps/dir//Manufacturer+Duck+Eggs+Balut+Salted+Eggs/@14.5220286,121.0032525,13z/data=!4m8!4m7!1m0!1m5!1m1!1s0x3397c88618051927:0xac104dc2829bcad6!2m2!1d121.0685883!2d14.5525408"><b>See Directions</b></a></p><br>
            <p><b>Sta. Martha's Balut Industry</b></p>  
            <p><b>Address:</b> 951 P. Herrera, Pateros, Metro Manila
                <a href="https://www.google.com/maps/dir//Sta.+Martha's+Balut+Industry/@14.5141055,121.0194671,13z/data=!4m8!4m7!1m0!1m5!1m1!1s0x3397c88fde53c60f:0xd9458c1f16f5f08c!2m2!1d121.0649738!2d14.5444007"><b>See Directions</b></a></p><br>
            <p><b>Edwina Almeda Salted Eggs</b></p>  
            <p><b>Address:</b> 12 C. Sexon. Pateros, Metro Manila
                <a href="https://www.google.com/maps/dir//Edwina+Almeda+Salted+Eggs/@14.5187258,121.0273802,13z/data=!4m8!4m7!1m0!1m5!1m1!1s0x3397c88f86b709dd:0x519599d2764fb6cc!2m2!1d121.0676172!2d14.5488809"><b>See Directions</b></a></p><br>
            <p><b>Arma Egg and Dried Fist Store</b></p>  
            <p><b>Address:</b> 17 A E. Hermosa Pateros, Metro Manila
                <a href="https://www.google.com/maps/dir//Arma+Egg+and+Dried+Fish+Store/@14.5174203,121.0194427,13z/data=!4m8!4m7!1m0!1m5!1m1!1s0x3397c89984c74845:0xdeb962318a288b06!2m2!1d121.0703201!2d14.540102"><b>See Directions</b></a></p><br>
           </div>

            <div class="image" data-aos="fade-up">
            <br>
            <img src="images/balut.jpg" alt="">
            </div>

</section>

<section class="home" id="home">

        <div class="content" data-aos="fade-up">
            <h4>Recipe Suggestion</h4><br>
            <p>World Famous Filipino delicacies, Adobo and Balut, all in one recipe!</p><br><br>
            <p><b>Adobong Balut Ingredients</b></p>
            <p>6 balut</p>
            <p>2 tbsp vegetable oil</p>
            <p>1 small red onion</p>
            <p>3 garlic</p>
            <p>3 bay leaf</p>
            <p>¼ cup soy sauce</p>
            <p>¼ cup vinegar</p>
            <p>½ tsp cornstarch slurry</p>
            <p>2 siling labuyo</p>
            </div>

        <div class="content" data-aos="fade-up">
            <iframe width="610" height="315" src="https://www.youtube.com/embed/Fg9tEhhsJq0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
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