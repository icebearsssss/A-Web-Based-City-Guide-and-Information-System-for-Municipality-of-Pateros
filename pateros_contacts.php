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
    <title>Pateros Emergency Hotlines and Contact Info</title>

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

<br><br><br><br><br><br>
   <h2 class="heading"> <span>Pateros Emergency Hotlines and Contact Information</span> </h2>

<section class="contact" id="contact">

    <div class="content" data-aos="fade-up">

                     <h5>Barangays in Pateros Contact Information</h5><br>
                     <h6>BARANGAY SANTO ROSARIO SILANGAN</h6>
                        <p>Address: Magnolia St., Pateros</p>
                        <p>Barangay Hall Contact Number(s): +632 544-9539</p>
                     <h6>BARANGAY AGUHO</h6>
                        <p>Address: E. Quiogue St., Pateros</p>
                        <p>Barangay Hall Contact Number(s): No Data Available</p>
                     <h6>BARANGAY MAGTANGGOL</h6>
                        <p>Address: F. C. Cruz St., Pateros</P>
                        <p>Barangay Hall Contact Number(s): +632 643 -6808</p>
                     <h6>BARANGAY POBLACION</h6>
                        <p>Address: B. Morcilla corner G. Flores Sts., Pateros</p>
                        <p>Barangay Hall Contact Number(s): +632 541 - 5502</p>
                     <h6>BARANGAY SAN ROQUE</h6>
                        <p>Address: E. Hermosa St., Pateros</p>
                        <p>Barangay Hall Contact Number(s): +632 545-0538</p>
                    </div>

                    <div class="content" data-aos="fade-up">

                     <h6>BARANGAY SANTA ANA</h6>
                        <p>Address: Capt. Hipolito Francisco Compound, Pateros</p>
                        <p>Barangay Hall Contact Number(s): +632 640-0227</p>
                     <h6>BARANGAY SANTO ROSARIO KANLURAN</h6>
                        <p>Address: M. Lozada corner M. R. Flores Sts., Pateros</p>
                        <p>Barangay Hall Contact Number(s): +632 642-3914</p>
                     <h6>BARANGAY TABACALERA</h6>
                        <p>Address: C. Sexon St., Pateros</p>
                        <p>Barangay Hall Contact Number(s): +632 641 -5011</p>
                     <h6>BARANGAY MARTIRES DEL 96</h6>
                        <p>Address: Martirez Del ’96 St., Pateros</p>
                        <p>Barangay Hall Contact Number(s): +632 643-4879</p>
                    <h6>BARANGAY SAN PEDRO</h6>
                        <p>Address: 321 P. Herrera St., Pateros</p>
                        <p>Barangay Hall Contact Number(s): +632 640 -7219</p>
                </div>

                <div class="content" data-aos="fade-up">

                     <h5>Municipal Government of Pateros Contact Numbers</h5>
                     <p>BPLO - (02) 8642 8898</p>
                     <p>Civil Registry - (02) 8643 3485</p>
                     <p>Police Office - (02) 8642 8235</p>
                     <p>Social Welfare - (02) 8641 0629</p>
                     <p>Administrative - (02) 8640 2898</p>
                     <p>Commission on Audit - (02) 8642 8897</p>
                     <p>SB Secretary - (02) 8642 4629</p>
                     <p>DECS District Office - (02) 8628 2070</p>
                     <p>Assessor - (02) 8643 3576</p>
                     <p>Office of the Representative - (02) 8641 0789</p>
                     <p>Municipal Trial Court - (02) 8641 1029</p>
                     <p>Department of the Interior and Local Government - (02) 8643 6379</p>
                </div>

                <div class="content" data-aos="fade-up">

                     <h5>Municipality of Pateros Emergency Hotlines</h5>
                     <p>Pateros Municipal Hall - (02) 8642 3390</p>
                     <p>Municipality of Pateros Health Office - (02) 8641 0614</p>
                     <p>Pateros Municipal Police Station – 0955 593 9616</p>
                     <p>Pateros Rescue Unit - 642-5159</p>
                     <p>Pateros Central Fire Station - 8641-1365 / 09171728577</p>
                     <p>Sta. Ana Fire Substation - 0977785915</p>
                     <p>PNP Pateros - 875-8596</p>
                </div>
                    
</section><br><br>

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

