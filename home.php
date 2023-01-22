<?php 

include "db_conn.php";
include 'php/User.php';

session_start();

if (isset($_SESSION['id']) && isset($_SESSION['fname'])) {

$user = getUserById($_SESSION['id'], $conn);

}else {
	header("Location: login.php");
	exit;
}
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
    <link rel="stylesheet" href="css/style4.css">
    <link rel="stylesheet" href="css/home_style.css">

</head>
<body>
    
<!-- header section starts  -->

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

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="content" data-aos="fade-up">
        <h3>Welcome <span style="color: #fabd02">Visitors!</span></h3>
        <p>Explore the city with us!</p>
        
    </div>

</section>

<!-- home section ends -->

<!-- services section starts  -->

<section class="paterossights" id="paterossights">

    <h1 class="heading"> <span>pateros sights</span> </h1>

    <div class="box-container">

        <div class="box" data-aos="fade-up">
            <div class="image">
                <img src="images/pateros-church.jpg" alt="">
                <h3> <i class="fas fa-map-marker-alt"></i> San Roque </h3>
            </div>
            <div class="content">
                <div class="price"> Diocesan Shrine of Sta. Marta - San Roque Parish </div>
                <a href="church.php" class="btn"> Visit now</a>
            </div>
        </div>

        <div class="box" data-aos="fade-up">
            <div class="image">
                <img src="images/pateros-city-hall.jpg" alt="">
                <h3> <i class="fas fa-map-marker-alt"></i> Aguho </h3>
            </div>
            <div class="content">
                <div class="price"> Pateros Municipal Hall </div><br><br>
                <a href="cityhall.php" class="btn"> Visit now</a>
            </div>
        </div>

        <div class="box" data-aos="fade-up">
            <div class="image">
                <img src="images/house.jpg" alt="">
                <h3> <i class="fas fa-map-marker-alt"></i> sta ana </h3>
            </div>
            <div class="content">
                <div class="price"> Old Houses </div><br><br>
                <a href="oldhouse.php" class="btn"> Visit now</a>
            </div>
        </div>
    </div>
</div>

</section>

<!-- review section starts  -->

<section class="products" id="products">

    <h1 class="heading"> <span>products</span> </h1>

    <div class="box-container">

        <div class="box" data-aos="fade-up">
            <div class="image">
                <img src="images/balut.jpg" alt="">
            </div>
            <div class="content">
                <h3>Balut</h3>
                <a href="balut.php" class="btn"> Find Out</a>
            </div>
        </div>

        <div class="box" data-aos="fade-up">
            <div class="image">
                <img src="images/Salted-Duck-Egg.jpg" alt="">
            </div>
            <div class="content">
            <h3>Salted Egg</h3>
                <a href="saltedegg.php" class="btn"> Find Out</a>
            </div>
        </div>

        <div class="box" data-aos="fade-up">
            <div class="image">
                <img src="images/alfombra.jpg" alt="">
            </div>
            <div class="content">
            <h3>Alfombra Slippers</h3>
                <a href="alfombra.php" class="btn"> Find Out</a>
            </div>
        </div>

    </div>

</section>

<!-- others to visit section starts  -->

<section class="otherstovisit" id="otherstovisit">

    <h1 class="heading"> <span>others to visit</span> </h1>

    <div class="box-container">

        <div class="box" data-aos="fade-up">
            <div class="image">
                <img src="images/dulong-bayan.jpg" alt="">
                <h3> <i class="fas fa-map-marker-alt"></i> Martirez </h3>
            </div>
            <div class="content">
                <div class="price"> Dulong Bayan Monument </div><br><br>
                <a href="dulongbayan.php" class="btn"> visit now</a>
            </div>
        </div>

        <div class="box" data-aos="fade-up">
            <div class="image">
                <img src="images/manggahan-shrine.jpg" alt="">
                <h3> <i class="fas fa-map-marker-alt"></i> Sto. Rosario-Silangan </h3>
            </div>
            <div class="content">
                <div class="price"> Manggahan shrine </div><br><br>
                <a href="shrine.php" class="btn"> visit now</a>
            </div>
        </div>

        <div class="box" data-aos="fade-up">
            <div class="image">
                <img src="images/gmm.jpg" alt="">
                <h3> <i class="fas fa-map-marker-alt"></i> bagong calzada </h3>
            </div>
            <div class="content">
                <div class="price"> Garden of Memories Memorial Park </div>
                <a href="garden.php" class="btn"> visit now</a>
            </div>
        </div>
</section>

    <!-- footer section starts  -->

<section class="footer">

    <div class="credit"> city guide of <span>pateros</span> | all rights reserved </div>

</section>

<!-- footer section ends -->
<!-- others to visit  section ends -->

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
