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
                    <a class="nav-link" href="normal.php"> Manu <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item active">
                    <a class="nav-link"  href="view.php">View Products</a>
                  </li>
                  <li class="nav-item ">
                    <a class="nav-link" href="add.php">Add Products</a>
                  </li>
                </ul>
                <!-- Social Media -->
               <ul class="navbar-nav ml-md-auto">
                    <li class="list-inline-item" >
                     <a class="nav-link" href="logout.php">Logout </a>
                    </li>
                </ul>
              </div>
            </nav>
        </header>
<br><br><br><br>
<!-- body-->
  
    <?php
require("../requires/connection db.php");
$pgid=$_GET["id"];

$query="SELECT * FROM tblproducts WHERE productId=$pgid;";
$result=mysqli_query($db,$query);
$row=mysqli_fetch_assoc($result);


 

 $query2="DELETE FROM tblproducts WHERE productId=$pgid;";
 $result2=mysqli_query($db,$query2);
 echo 'Record is deleted. Click <a href="view.php"><botton> OK </botton></a> to continue';
?>

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
                                    <a href="normal.php">
                                        Manu       
                                    </a>
                                </div>
                                <div class="col-lg-6">
                                    <a href="view.php">
                                        View Products       
                                    </a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <a href="add.php">
                                        Add Product       
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
                                      <a class="nav-link" href="logout.php">Logout </a>
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

