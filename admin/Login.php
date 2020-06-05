                <?php
require("../connection.php");
if(isset($_POST['submit']))
{
    $username=$_POST["username"];
    $password=$_POST["password"];
    $query="SELECT * FROM user WHERE name='$username' AND password='$password'";
    $result=mysqli_query($conn, $query);
    $row1=mysqli_num_rows($result);
    if($row1 == 1)
    {
        header("Location: normal.php");
    }
    
    
}
?>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Game World</title>
    <!-- Glyphs -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<div class="container-fluid">
        <header>
            <div class="row">
                
                    <div class="col-lg-4">
                        <center>
                            <a class="navbar-brand" href="../index.php">
                                <img class="img-fluid" src="../GSC_Game_World.png" height="80" width="180">
                            </a>
                        </center>
                    </div>
                    
              
              
            </div>

            <!--navbar-light-->
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              

              <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                  <li class="nav-item ">
                    <a class="nav-link" href="../index.php"> Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../aboutus.php">About Us</a>
                  </li>
                  <li class="nav-item ">
                    <a class="nav-link" href="../products.php">Products</a>
                  </li><li class="nav-item ">
                    <a class="nav-link" href="../contactus.php">Contact Us</a>
                  </li>
                </ul>
                <!-- Social Media -->
                <ul class="navbar-nav ml-md-auto">
                    <li class="list-inline-item active" >
                     <a class="nav-link" href="Login.php">Login </a>
                    </li>
                    <li class="list-inline-item" >
                       <br>
                    </li>
                    <li class="list-inline-item">
                     <a href="https://www.facebook.com/zipps.zu" class="fa fa-facebook"></a>
                    </li>
                    <li class="list-inline-item">
                     <a href="https://twitter.com/Zippszu" class="fa fa-twitter"></a>
                    </li>
                    <li class="list-inline-item">
                      <a href="https://www.youtube.com/channel/UC_-HX7XqDwVNOlDUkFW-lrg" class="fa fa-youtube"></a>
                    </li>
                    <li class="list-inline-item">
                     <a href="https://www.instagram.com/zippszu/" class="fa fa-instagram"></a>
                    </li>
                </ul>
              </div>
            </nav>
        </header>


<br><br><br><br>
<!-- body-->

<div class="row" " >
  <div class="col-lg-4"></div>
    <div class="col-lg-4" style="text-align: center; "><h3 >Admin Login</h3></div>
    <div class="col-lg-4"></div>

</div>
   
    
  
        <div class="row">
            <div class="col-lg-4">
            </div>
            <div class="col-lg-4">
                <br>
                <form class="form" method="POST" style="border: 3px solid #f1f1f1;">
                    <br>
                    <div class="row">
                        <div class="col-lg-6">
                            <center>
                                <label class="label"><b>User Name</b></label>
                            </center>
                        </div>
                        <div class="col-lg-5">
                            <input type="text" name="username" class="form-control"> </div>   
                            <div class="col-lg-1"></div>
                    </div><br>
                    <div class="row">
                        <div class="col-lg-6">
                            <center>
                                <label class="label"><b>Password</b></label>
                            </center>
                        </div>
                        <div class="col-lg-5">
                            <input type="password" name="password" class="form-control"> </div>   
                            <div class="col-lg-1"></div>
                    </div><br>

                    <div class="row">
                            <div class="col-lg-6">
                            </div>
                            <div class="col-lg-6" >
                                <?php
                                require("../connection.php");
                                if(isset($_POST['submit']))
                                {
                                    $username=$_POST["username"];
                                    $password=$_POST["password"];
                                    $query="SELECT * FROM user WHERE name='$username' AND password='$password'";
                                    $result=mysqli_query($conn, $query);
                                    $row1=mysqli_num_rows($result);
                                    if($row1 == 1)
                                    {
                                        
                                    }
                                    else{
                                        echo "Wrong Username OR Password";
                                    }
                                    
                                }
                                ?>  
                            </div>  
                    </div>
                    
                    <div class="row">
                            <div class="col-lg-5">
                            </div>
                            <div class="col-lg-2" align="center" >
                                <button class="btn btn-light btn-lg" name="submit" " >login</button>
                            </div>  
                            <div class="col-lg-5"></div>
                    </div>
                </form>

                 
                              
            </div>
            <div class="col-lg-4">
            </div>
        </div>
        

<br><br><br>
        <!-- Footer Code -->
        <footer class="bg-light w-100">
            <div class="row">

                    <div class="col-lg-4">
                        <center>
                            <a class="navbar-brand" href="index.php">
                                <img class="img-fluid" src="../GSC_Game_World.png" height="150" width="180">
                            </a>
                        </center>
                    </div>
                    <div class="col-lg-5">
                        <div style="margin-top: 6%;">
                            <div class="row">
                                <div class="col-lg-6">
                                    <a href="../index.php">
                                        Home        
                                    </a>
                                </div>
                                <div class="col-lg-6">
                                    <a href="../aboutus.php">
                                        About us        
                                    </a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <a href="../products.php">
                                        Products        
                                    </a>
                                </div>
                                <div class="col-lg-6">
                                    <a href="../contactus.php">
                                        Contact us        
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div style="margin-top: 10%;">
                            <center>
                                <ul class="list-inline-right">
                                    <li class="list-inline-item">
                                      <a href="https://www.facebook.com/zipps.zu" class="fa fa-facebook"></a>
                                    </li>
                                    <li class="list-inline-item">
                                      <a href="https://twitter.com/Zippszu" class="fa fa-twitter"></a>
                                    </li>
                                    <li class="list-inline-item">
                                      <a href="https://www.youtube.com/channel/UC_-HX7XqDwVNOlDUkFW-lrg" class="fa fa-youtube"></a>
                                    </li>
                                    <li class="list-inline-item">
                                      <a href="https://www.instagram.com/zippszu/" class="fa fa-instagram"></a>
                                    </li>
                                </ul>
                            </center>
                        </div>
                    </div>
            </div>
        </footer>  
    </div>


<!-- Optional JavaScript -->
<!--     <script src="bootstrap-4.4.1-dist/js/bootstrap.js"></script>
    <script src="bootstrap-4.4.1-dist/js/bootstrap.min.js"></script>
    <script src="bootstrap-4.4.1-dist/js/bootstrap.bundle.js"></script>
    <script src="bootstrap-4.4.1-dist/js/bootstrap.bundle.min.js"></script>
 -->    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
