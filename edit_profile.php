<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['fname'])) {
include "db_conn.php";
include 'php/User.php';

$user = getUserById($_SESSION['id'], $conn);

 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Edit Profile</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">
 
    <link rel="stylesheet" type="text/css" href="css/login_style.css">
</head>
<body>
    <?php if ($user) { ?>
      
    <div class="center">
    <div class="d-flex justify-content-center align-items-center">
    
        <form class="shadow w-450 p-3" 
              action="php/edit_profile.php" 
              method="post"
              enctype="multipart/form-data">

            <h4 class="display-4  fs-1">Edit Profile</h4><br>
            <!-- error -->
            <?php if(isset($_GET['error'])){ ?>
            <div class="alert alert-danger" role="alert">
              <?php echo $_GET['error']; ?>
            </div>
            <?php } ?>
            
            <!-- success -->
            <?php if(isset($_GET['success'])){ ?>
            <div class="alert alert-success" role="alert">
              <?php echo $_GET['success']; ?>
            </div>
            <?php } ?>
          <div class="mb-3">
            <label class="form-label">Full Name</label>
            <input type="text" 
                   class="form-control"
                   name="fname"
                   value="<?php echo $user['fname']?>">
          </div>

          <div class="mb-3">
            <label class="form-label">User name</label>
            <input type="text" 
                   class="form-control"
                   name="uname"
                   value="<?php echo $user['username']?>">
          </div>

          <div class="mb-3">
            <label class="form-label">Profile Picture</label>
            <input type="file" 
                   class="form-control"
                   name="pp">
            <img src="upload/<?=$user['pp']?>"
                 class="rounded-circle"
                 style="width: 70px">
            <input type="text"
                   hidden="hidden" 
                   name="old_pp"
                   value="<?=$user['pp']?>" >
          </div>
          
          <button type="submit" class="btn">Update</button>
          <a href="profile.php" class="signup_link" >Back</a>
          <a href="home.php" class="signup_link" >Home</a>
        </form>
    </div>
    </div>
    <?php }else{ 
        header("Location: profile.php");
        exit;

    } ?>
</body>
</html>

<?php }else {
	header("Location: home.php");
	exit;
} ?>