
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Game World</title>

    <!-- Glyphs -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
       /* Set the size of the div element that contains the map */
      #map {
        height: 400px;  /* The height is 400 pixels */
        width: 100%;  /* The width is the width of the web page */
       }
    </style>

  </head>
  <body style="background-image: url('imges/Background.jpg');background-size: 100% 100%;background-attachment: fixed;">
    <div class="container-fluid">
        <header>
            <div class="row">
                
                    <div class="col-lg-4">
                        <center>
                            <a class="navbar-brand" href="index.php">
                                <img class="img-fluid" src="GSC_Game_World.png" height="80" width="180">
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
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="aboutus.php">About Us</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="products.php">Products</a>
                  </li><li class="nav-item active">
                    <a class="nav-link" href="contactus.php">Contact Us</a>
                  </li>
                </ul>
                <!-- Social Media -->
                <ul class="navbar-nav ml-md-auto">
                    <li class="list-inline-item" >
                     <a class="nav-link" href="admin/Login.php">Login </a>
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

        <h3>Contact Us</h3>
        <div class="row">
            <div class="col-lg-8">
                <br>
                <form class="form">
                    <div class="row">
                        <div class="col-lg-4">
                            <center>
                                <label class="label"><b>Name</b></label>
                            </center>
                        </div>
                        <div class="col-lg-8">
                            <input type="text" name="name" class="form-control"> </div>   
                    </div><br>
                    <div class="row">
                        <div class="col-lg-4">
                            <center>
                                <label class="label"><b>Email</b></label>
                            </center>
                        </div>
                        <div class="col-lg-8">
                            <input type="Email" name="Email" class="form-control"> </div>   
                    </div><br>
                    <div class="row">
                        <div class="col-lg-4">
                            <center>
                                <label class="label"><b>Password</b></label>
                            </center>
                        </div>
                        <div class="col-lg-8">
                            <input type="Password" name="Password" class="form-control"> </div>   
                    </div><br>
                    <div class="row">
                        <div class="col-lg-4">
                            <center>
                                <label class="label"><b>Phone</b></label>
                            </center>
                        </div>
                        <div class="col-lg-8">
                            <input type="phone" name="phone" class="form-control"> 
                        </div>   
                    </div><br>
                    <div class="row">
                        <div class="col-lg-4">
                            <center>
                                <label class="label"><b>Payment Method</b></label>
                            </center>
                        </div>
                        <div class="col-lg-8">
                            <div class="row">
                                <div class="col-lg-6">
                                    <center>
                                    <input type="radio" name="cradit card">
                                    <label>Visa Card</label>    </center>
                                </div>
                                <div class="col-lg-6">
                                    <center>
                                    <input type="radio" name="cradit card"> 
                                    <label>Master Card: </label></center>
                                </div>
                            </div>
                            
                        </div>   
                    </div><br>
                    <div class="row">
                            <div class="col-lg-4">
                                <center>
                                    <label class="form"><b>City</b></label>
                                </center>
                            </div>
                            <div class="col-lg-8">
                                <select class="form-control">
                                    <option selected>City</option>
                                    <option value="1">Lahore</option>
                                    <option value="2">Karachi</option>
                                    <option value="3">Islamabad</option>
                                    <option value="3">Muzaffarabad</option>
                                </select> 
                            </div>   
                    </div><br>
                    <div class="row">
                            <div class="col-lg-4">
                                <center>
                                    <label class="label"><b>Message</b></label>
                                </center>
                            </div>
                            <div class="col-lg-8">
                                <textarea class="form-control" maxlength="1000" minlength="0"></textarea> 
                                </div>   
                    </div><br>
                    <div class="row">
                            <div class="col-lg-4">
                            </div>
                            <div class="col-lg-8" >
                                <input  class="btn btn-light btn-lg" type="button" value="submit" name="submit">
                            </div>  
                    </div>
                </form>
            </div>
            <div class="col-lg-4">
                <div class="row">
                    <ul>
                        <li><b>Game World</b></li>
                        <li>Golshan coloney, EidGah Road.</li>
                        <li>Muzaffarabad(Azad Kashmir).</li>
                        <li>ZippsZu@gmail.com</li>
                        <li>+923025844170</li>
                    </ul>
                </div>
                <div class="row">
                    <div id="map"></div>
                    <script>
                // Initialize and add the map
                function initMap() {
                  // The location of Uluru

                  var uluru = {lat: 34.362949, lng: 73.466426};
                  // The map, centered at Uluru
                  var map = new google.maps.Map(
                      document.getElementById('map'), {zoom: 4, center: uluru});
                  // The marker, positioned at Uluru
                  var marker = new google.maps.Marker({position: uluru, map: map});
                }
                    </script>
                    <!--Load the API from the specified URL
                    * The async attribute allows the browser to render the page while the API loads
                    * The key parameter will contain your own API key (which is not needed for this tutorial)
                    * The callback parameter executes the initMap() function
                    -->
                    <script async defer
                    src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap">
                    </script>
                </div>
            </div>

        </div>


        <!-- Footer Code -->
        <footer class="bg-light w-100">
            <div class="row">

                    <div class="col-lg-4">
                        <center>
                            <a class="navbar-brand" href="index.php">
                                <img class="img-fluid" src="GSC_Game_World.png" height="150" width="180">
                            </a>
                        </center>
                    </div>
                    <div class="col-lg-5">
                        <div style="margin-top: 6%;">
                            <div class="row">
                                <div class="col-lg-6">
                                    <a href="index.php">
                                        Home        
                                    </a>
                                </div>
                                <div class="col-lg-6">
                                    <a href="aboutus.php">
                                        About us        
                                    </a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <a href="products.php">
                                        Products        
                                    </a>
                                </div>
                                <div class="col-lg-6">
                                    <a href="contactus.php">
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
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>