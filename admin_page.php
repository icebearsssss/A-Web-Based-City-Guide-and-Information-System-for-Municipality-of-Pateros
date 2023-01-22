<?php
    session_start();
    require 'db_conn.php';
?>
<!DOCTYPE html>  
 <html>  
 <head>  
      <meta charset="utf-8">  
      <title>Admin Dashboard</title>  
      <link rel="stylesheet" type="text/css" href="css/style7.css">  
 </head>  
 <body>  
 <header class="header">

<a href="#" class="logo">Admin <span style="color: #fabd02">Dashboard</span> </a>
<a href="index.php" class="btnone"> Logout</a>
</header>

 <table border="1" cellspacing="0" cellpadding="0"> 

                        <tr class="heading"> 

                                    <th>ID</th>
                                    <th>Full Name</th>
                                    <th>Username</th>
                                    <th>Profile Picture</th>
                                    <th>Action</th>
                                </tr>

                                <?php 
                                    
                                    $query = "SELECT * FROM users";
                                    $query_run = mysqli_query($con, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $user)
                                        {
                                            ?>
                                            <tr class='data'>  
                                                <td><?= $user['id']; ?></td>
                                                <td><?= $user['fname']; ?></td>
                                                <td><?= $user['username']; ?></td>
                                                <td><?= $user['pp']; ?></td>
                                                
                                                <td><form action="code.php" method="POST">
                                                        <button type="submit" name="delete" value="<?=$user['id'];?>" id='btn'>Delete</button>
                                                    </form></td>  
                                              </tr> 
        
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        echo "<h5> No Record Found </h5>";
                                    }
                                ?>
                                
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
                             
</table>
</body>
</html>