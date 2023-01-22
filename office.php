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
    <title>Office and Department Heads</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file cdn link  -->
    <link rel="stylesheet" href="css/style4.css">
	<link rel="stylesheet" href="css/dp_style.css">

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

<br><br><br><br>
<!-- services section starts  -->

<section class="services" id="services">

    <h1 class="heading"> <span>Office and Department Heads</span> </h1>

    <div class="box-container">

        <div class="box" data-aos="zoom-in">
        <img src="images/mayor.jpg" alt="">
            <h4>Atty. MIGUEL F. PONCE III</h4>
            <p>Mayor</p>
        </div>

        <div class="box" data-aos="zoom-in">
        <img src="images/vmayor.jpg" alt="">
            <h4>Hon. CARLO SANTOS</h4>
            <p>Vice Mayor</p>
        </div>

        <div class="box" data-aos="zoom-in">
        <img src="images/cong.jpg" alt="">
            <h4>Hon. ADING CRUZ</h4>
            <p>Congressman</p>
        </div>

        <div class="box" data-aos="zoom-in">
        <img src="images/Seal_of_Pateros.png" alt="">
            <h4>Ms. MA. REGINA S. LEGASPI</h4>
            <p>Menro (OIC)</p>
        </div>

        <div class="box" data-aos="zoom-in">
        <img src="images/ptc.jpg" alt="">
            <h4>Ms. ANALIZA F. ARCEGA, DEM</h4>
            <p>PTC</p>
        </div>

    </div>
    <div class="contact" id="contact">
        <div class="content" data-aos="fade-up">
                     <p><b>Mr. GERALD GERMAN</b> - Municipal Administrator</p>
                     <p><b>Ms. JESSICA S. QUINIO</b> - Accounting</p>
                     <p><b>Mr. EMMANUEL Y. ESPAÑA</b> - Assessor</p>
                     <p><b>Ms. CHERRY R. CAPCO</b> - Budget</p>
                     <p><b>Mr. GETULIO P. MUÑOZ JR.</b> - BPLO</p>
                     <p><b>Mr. JOSEPH C. REYES</b> - Civil Registry</p>
                     <p><b>Eng’r. ELDA G. JIMENEZ</b> - Engineering</p>
                     <p><b>Dr. CARMENCITA ISON</b> - Health</p>
                     <p><b>Mr. DENNIS G. DATO</b> - HRMO(OIC)</p>
                     <p><b>Ms. ANGELUS DP. PONCE, MAURP</b> - Mun.Planning & Devt Office</p>
                     <p><b>Mr. ROSAURO R. ELLSON</b> - SB Secretary</p>
                     <p><b>Ms. ANGELUS DP. PONCE, MAURP</b> - Social Welfare (MSWDO)</p>
                     <p><b>Mr. RAMIL Q. LEGASPI</b> - Treasury</p>
                     <p><b>Ms. EVELINE SJ. SALCEDO</b> - COA</p>
                     <p><b>Ms. MA. LENY MANAOAT</b> - DepEd Dist. Office (OIC)</p>
                     <p><b>Mr. JONAS JAMES A. AGOT</b> - DILG</p>
                     <p><b>Mr. ANTONIO R. SAMANIEGO</b> - GSO</p>
                     <p><b>Mr. RHOGEN R. PILAPIL</b> - IT</p>
                     <p><b>Mr. ERVIN SAN JOSE</b> - BAC</p>
                     <p><b>Ms. CARMINA ESTRADA</b> - IAS</p>
                       
                    </div>

                    <div class="content" data-aos="fade-up">
                     
                    <p><b>MR. RENATO R. BADE</b> - EA/Tourism Office</p>
                    <p><b>Mr. CONRADO C. AGLAHIAN</b> - PLTO</p>
                    <p><b>Ms. RUBY P. INDON</b> - PAC</p>
                    <p><b>Ms. DIVINA M. FRANCISCO</b> - UPAO</p>
                    <p><b>PAO Office</b> - District Public Attorney</p>
                    <p><b>Atty. ROWENA P. ISON</b> - Prosecutors Office</p>
                    <p><b>Vice Mayor GERALD S. GERMAN</b> - PESO</p>
                    <p><b>ONNIE C. VILLAR</b> - COMELEC</p>
                    <p><b>Chief Insp. GARYNEL Z. JULIAN</b> - Fire Protection</p>
                    <p><b>Senior Insp. ZOELO P. SABENIANO</b> - Jail</p>
                    <p><b>Judge DIONIS PACTOROS JACOBE</b> - Mun. Trial Court</p>
                    <p><b>Police Col. ALDRINE S. GRAN</b> - Police</p>
                    <p><b>Judge JOY N. CASIHAN-DUMLAO</b> - Regional Trial Court</p>
                    <p><b>Mr. MARKO PIELAGO</b> - Rescue</p>
                    <p><b>Mr. DELBERT SANTOS</b> - Fil-Chinese Volunteer</p>
                    <p><b>Ms. SHIRLEY MANALO</b> - SSS Pateros Branch</p>
                </div>
     
    </section><br>

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
