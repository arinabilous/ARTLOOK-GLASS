                <!-- footer-->
                <footer class="jumbotron jumbotron-fluid text-white" style="background-image: url(img/footer1.jpg")>
                                <div class="container-fluid">
                                        <div class="row">
                                                <div class="col-1 col-lg-2"></div>
                                                <div class="col-lg-8">
                                
                                                        <div class="row card-group fotershadow">
                                        
                                                                <div class="col-xl-6  footer-bg">

                                                                        
                                                                <img class="card-img-top logo-f" src="img/logo NYTG.jpg" alt="logo New York Tempering Glass">

                                                                <a class="navbar-brand text-white d-md-none d-block" href="index.php">
                                                                        <b>
                                                                                <h4>
                                                                                        <span class="textnav logoText">New York Tempering Glass</span>
                                                                                </h4>
                                                                        </b>
                                                                </a>
                                                                
                                                                <a class="navbar-brand text-white d-none d-md-block" href="index.php"><b><h1><span class="textnav logoText">New York Tempering Glass</span></h1></b></a>
                                                                <div class="card-body">
                                                                        <p class="card-text">New York Tempering Glass provides glass and  services in new york, whether its for your home,
                                                                                business or personal requirements.  At custom cut glass nyc we are proud of ourselves on providing quality 
                                                                                products backed by superior service, while maintaining competitive prices..</p>
                                                                </div>
                                                                </div>
                                        
                                                                <div class="col-md-6 col-xl-3  footer-bg">
                                        
                                                                        <div class="card-body">
                                                                                <p>
                                                                                <a href="./" class="card-title card-text text-center">
                                                                                        <h4>Menu</h4>
                                                                                        <hr>
                                                                                </a>
                                                                                </p>
                                                                                <p></p><a href="./" class="card-text">Home</a></p>
                                                                                <p></p><a href="blog.php" class="card-text">Blog</a></p>
                                                                                <p></p><a href="faqs.php" class="card-text">FAQ</a></p>
                                                                                <p></p><a href="favorite-works.php" class="card-text"> Our work</a></p>
                                                                        </div>
                                                                </div>
                                                                
                                                                
                                                                <div class="col-md-6 col-xl-3 footer-bg">
                                                                        <div class="card-body">
                                                                                <p class="card-text">
                                                                                <h4 id="contact">Contact Us
                                                                                </h4>
                                                                                <hr>
                                                                                </p>
                                                                                <p class="card-text"></p><i class="fa fa-globe fa-2x" aria-hidden="true"></i><span>199 Avenue T,  </span><br>
                                                                                <p class="span-f ">Brooklyn NY 11223</p>
                                                                                </p>
                                                
                                                                                <p class="card-text"><i class="fa fa-mobile fa-2x" aria-hidden="true"></i><span> +1 646-893-8335 </span><br>
                                                                                </p>
                                                                                <p class="card-text"><i class="fa fa-envelope-o fa-2x" aria-hidden="true"></i><span>Email: newyorktemperingglass@gmail.com</span></p> <br>
                                                                        </div>
                                                                </div>
                                        
                                                        </div>
                                
                                                </div>
                                
                                        </div>
                        
                                        <div class="col-lg-2"></div>
                                </div>
                        
                                <hr class="footer2-hr">

                                <div class="container-fluid">
                                        <div class="row">
                                                <div class="col-lg-7 d-flex justify-content-center">
                                                                <p class="p-2">New York Tempering Glass 2018 © All Rights Reserved</p>
                                                        
                                                </div>
                                
                                                <div class="col-lg-5 margin justify-content-center">
                                                        <a class="a-nav2" href="https://www.facebook.com/customcutglass.nyc/" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
                                                        <a class="a-nav2" href="#" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
			                                <a class="a-nav2" href="#" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
			                                <a class="a-nav2" href="#" target="_blank"> <i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                                        <h2 class="h-2 "><i class="fa fa-phone fa-x i" aria-hidden="true"></i> +1 646-893-8335</h2>
                                                        
                                                </div>
                                        </div>
                                </div>
                </footer>



        <!-- scripty-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
        <script src="bootstrap-4.0.0-beta.2-dist/js/bootstrap.min.js"></script>
        <script src="js/jquery.maskedinput.js" type="text/javascript"></script>
        <script src="js/wow.min.js"></script>

        <script>
                // Get the modal
                        var modal = document.getElementById('myModal');

                        // Get the button that opens the modal
                        var btn = document.getElementById("myBtn");

                        // Get the <span> element that closes the modal
                        var span = document.getElementsByClassName("close")[0];

                        // When the user clicks on the button, open the modal 
                        btn.onclick = function () {
                                modal.style.display = "block";
                        }

                        // When the user clicks on <span> (x), close the modal
                        span.onclick = function () {
                                modal.style.display = "none";
                        }

                        // When the user clicks anywhere outside of the modal, close it
                        window.onclick = function (event) {
                                if (event.target == modal) {
                                        modal.style.display = "none";
                                }
                        }
        </script>
        <script>
                function initMap() {
                        var myLatLng = {
                        lat: 40.599081,
                        lng: -73.977726
                        };
                     
                        var map = new google.maps.Map(document.getElementById('map2'), {
                        zoom: 14,
                        center: myLatLng,
                        disableDefaultUI: true
                        });
                        
                        var image = {
                        url: "img/marker1.png", // url
                        scaledSize: new google.maps.Size(45, 50), // size
                        };
                
                        var marker = new google.maps.Marker({
                        map: map,
                        icon: image,
                        title: 'Contact Us',
                        position: {
                                lat: 40.599081,
                                lng: -73.977726
                        }
                        });
                }
        </script>
        <script>
                <script src="js/wow.min.js"></script>
              <script>
              new WOW().init();
              </script>
        </script>


        <script>
                        window.onscroll = function() {
                scrollFunction()
                };

                function scrollFunction() {
                if (document.body.scrollTop > 1000 || document.documentElement.scrollTop > 1000) {
                        document.getElementById("TOP").style.display = "block";
                } else {
                        document.getElementById("TOP").style.display = "none";
                }
                }

                function topFunction() {
                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;
                }
        </script>
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDO6gJkm9-qPClrgI2O5zirijUV3KuVZow&callback=initMap"></script>


</body>
</html>