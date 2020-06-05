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
                  <li class="nav-item">
                    <a class="nav-link"  href="view.php">View Products</a>
                  </li>
                  <li class="nav-item active">
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
			<div class="container-fluid">
    			<form action="" method="POST" enctype="multipart/form-data">
					<div class="row">
                        <div class="col-lg-6">
                            <center>
                                <label class="label"><b>Product ID</b></label>
                            </center>
                        </div>
                        <div class="col-lg-4">
                            <input type="number" id="form1" name="pid" class="form-control"> </div>   
                    </div><br>

                    <div class="row">
                        <div class="col-lg-6">
                            <center>
                                <label class="label"><b>Product Name</b></label>
                            </center>
                        </div>
                        <div class="col-lg-4">
                            <input type="text" id="form2" name="pn" class="form-control"> </div>   
                    </div><br>

                    <div class="row">
                        <div class="col-lg-6">
                            <center>
                                <label class="label"><b>Product Price</b></label>
                            </center>
                        </div>
                        <div class="col-lg-4">
                            <input type="float" id="form22" name="pp" class="form-control"> </div>   
                    </div><br>

                    <div class="row">
                        <div class="col-lg-6">
                            <center>
                                <label class="label"><b>ProductCode</b></label>
                            </center>
                        </div>
                        <div class="col-lg-4">
                            <input type="text" id="form23" name="pc" class="form-control"> </div>   
                    </div><br>

                    <div class="row">
                        <div class="col-lg-6">
                            <center>
                                <label class="label"><b>Status</b></label>
                            </center>
                        </div>
                        <div class="col-lg-4">
                            <input type="text" id="form3" name="stats" class="form-control"> </div>   
                    </div><br>

                    <div class="row">
                        <div class="col-lg-6">
                            <center>
                                <label class="label"><b>Product Size</b></label>
                            </center>
                        </div>
                        <div class="col-lg-4">
                            <input type="text" id="form4" name="ps" class="form-control"> </div>   
                    </div><br>

                    <div class="row">
                        <div class="col-lg-6">
                            <center>
                                <label class="label"><b>Product Detail</b></label>
                            </center>
                        </div>
                        <div class="col-lg-4">
                            <textarea  id="form5" name="pd" class="form-control"></textarea> </div>   
                    </div><br>

                    <div class="row">
                        <div class="col-lg-6">
                            <center>
                                <label class="label"><b>Product Discount</b></label>
                            </center>
                        </div>
                        <div class="col-lg-4">
                            <input type="float" id="form56" name="pdis" class="form-control"> </div>   
                    </div><br>

                     <div class="row">
                        <div class="col-lg-6">
                            <center>
                                <label class="label"><b>Product Picture</b></label>
                            </center>
                        </div>
                        <div class="col-lg-4">
                            <input type="file" id="form6" name="profile" class="form-control"> </div>   
                    </div><br>

                    <div class="row">
                        <div class="col-lg-6">
                            <center>
                                
                            </center>
                        </div>
                        <div class="col-lg-6">
                        	<input type="submit" class="btn btn-success" name="save" value="ADD" id="form15">
                            <input type="submit" id="form16" class="btn btn-warning" name="cancel" value="cancel"> </div>   
                    </div><br>






    			</form>

			</div>
            <?php
    require("../requires/connection db.php");
    if(isset($_POST["save"]))
    {
        $pid=$_POST["pid"];
        $pn=$_POST["pn"];
            $pp=$_POST["pp"];
            $pc=$_POST["pc"];
        $s=$_POST["stats"];
        $ps=$_POST["ps"];
        $pd=$_POST["pd"];
            $pdis=$_POST["pdis"];
        $profile= $_FILES['profile']['name'];
        
        $targetimg = "../admin/img/".basename($profile);
        $query="INSERT INTO tblproducts (Productprofile, productId, productName, productPrice, productCode, productInstock, productDiscount, productSizes, productDetails)
                VALUES('$profile',$pid, '$pn',$pp ,'$pc' ,'$s' ,$pdis ,'$ps' ,'$pd');";
        $result=mysqli_query($db,$query);
        if ( move_uploaded_file($_FILES['profile']['tmp_name'], $targetimg) ) {
            echo  "Pictures uploaded successfully";
            echo "New record added. Click "?><a href="view.php">ok</a><?php "to continue";
        }
        else{
            echo  "Failed to upload image";
        }
    }
    if(isset($_POST["cancel"]))
    {
        header("location: view.php");
    }
?>

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
