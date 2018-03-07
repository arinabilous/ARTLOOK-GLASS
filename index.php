<?php
include_once('header.php');
?>
        
        <!-- carosusel-->

        <div class="row ">
                <div class="col-lg-8">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner">
                                        <div class="carousel-item active">
                                                        <img class="d-block w-100" src="img/mirrorcarousel.jpg" alt="Mirror">
                                                <div class="text-block">
                                                        <a class="navbar-brand text-white" href="Mirrors.php"><p class="carouseltext">CUSTOM MIRRORS</p></a>
                                                        <button type="submit" class="btn color-nav text-white carouseltextbt"><a class="navbar-brand text-white" href="http://artlook.ca.mocha2005.mochahost.com/finalv/">SHOP NOW</a></button>
                                                </div>
                                        </div>
                                        <div class="carousel-item">
                                                        <img class="d-block w-100" src="img/backsplashcarousel.jpg" alt="Backsplash">
                                                <div class="text-block">
                                                        <a class="navbar-brand text-white" href="Glass-Backsplash.php"><p class="carouseltext">BACKSPLASH</p></a>
                                                        <button type="submit" class="btn color-nav text-white carouseltextbt"><a class="navbar-brand text-white" href="http://artlook.ca.mocha2005.mochahost.com/finalv/">SHOP NOW</a></button>
                                                </div>
                                        </div>
                                        <div class="carousel-item">
                                                        <img class="d-block w-100" src="img/tabletopcarousel1.jpg" alt="Tabletop">
                                                <div class="text-block">
                                                        <a class="navbar-brand text-white" href="Glass-Table-Tops.php"><p class="carouseltext">GLASS TABLE TOPS</p></a>
                                                        <button type="submit" class="btn color-nav text-white carouseltextbt"><a class="navbar-brand text-white" href="http://artlook.ca.mocha2005.mochahost.com/finalv/">SHOP NOW</a></button>
                                                </div>
                                        </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                </a>
                        </div>
                </div>

                <div class="col-lg-4 formbg">
                        <div class="container">
                                <div class="text-white">
                                        <h1 class="card-title text-center"><b>Contact us about your  project</b></h1>
                                </div>        
                                <form class="contactForm" name="contactform" method="post" action="send.php">
                                        <div class="form-row">
                                                <div class="form-group col-md-6">
                                                        <input name="name" type="name" class="form-control" id="inputName" placeholder="You Name">
                                                </div>
                                                <div class="form-group col-md-6">
                                                        <input name="email" type="email" class="form-control" id="inputEmail4" placeholder="Email">
                                                </div>
                                                
                                        </div>               
                                                <div class="form-group">
                                                        <textarea name="comments" class="form-control" type="textarea" id="message" placeholder="Message" maxlength="140" rows="7"></textarea>      
                                                </div>
                                                
                                        <button type="submit" class="btn color-nav text-white">Submit</button>
                                </form>

                        </div>

                </div>

        </div>
        <div class="card  text-white styletitle">
                <h2 class="card-title text-center">Work with Us!</h2>
                <p class="text-center">
                        <i>We are Hiring! Our Mission To be the most recognized, admired,and respected name in home service.Integrity, honesty, respect,
                        and responsibilityBy serving others, we help them succeed.Relationships matter.Teamwork is vital to our success.We work hard
                        and have fun!</i>
                </p>
        </div>




        <!-- Trigger/Open The Modal -->
        <div class="card  text-white text-center" style="margin-top:2%; border:none;">
        
        
                <div class="card" id="myBtn" style="border:none;">
                        <div class="text-center">
                                <h1 class="text-dark" style="margin:1%;">Custom Glass</h1>
                        </div>
                        <div class="card-body row">
        
                                <div class="col-lg-4">
                                        <img class="card-img-top custom-img" src="img/recta-30x60-flat.png" alt="Rectangle">
                                        <h3 class="text-dark" style="margin:1%;">Rectangle</h3>
                                </div>
        
                                <div class="col-lg-4">
                                        <img class="card-img-top custom-img" src="img/60-inch-square-flat.png" alt="Square">
                                        <h3 class="text-dark" style="margin:1%;">Square</h3>
                                </div>
        
                                <div class="col-lg-4">
                                        <img class="card-img-top custom-img" src="img/FPTEMH.png" alt="Circle Oval">
                                        <h3 class="text-dark" style="margin:1%;">Circle/Oval</h3>
                                </div>
        
                        </div>
                        <div class="card" style="border:none;">
                                <div class="text-center">
                                        <!-- The Modal button -->
                                        <button type="submit" class="btn color-nav text-white" id="myBtn">Please Choose Shape</button>
                                </div>
        
                        </div>
                </div>
        </div>

                

        <!-- The Modal -->
        <div id="myModal" class="modal">

                <!-- Modal content -->
                <div class="modal-content">
                        <span class="close">&times;</span>

                        <iframe id="myFrame" src="http://artlook.ca.mocha2005.mochahost.com/finalv/" style="height:800px;width:100%"></iframe>
                        
                </div>

        </div>




        <!-- FAVORITES WORK-->
        <div class="GlassWork container-fluid">
                <div class="card"> 
                        <h2 class="card-title text-center wow zoomInUp" data-wow-duration="2s" data-wow-delay="1s" data-wow-iteration="2">FAVORITES WORK</h2>
                </div>
                        <div class="card-deck row GlassWorkTitle">
                                <div class="col-md-6 col-xl-3 containerglass">
                                        <img class="card-img-top imageglass" src="img/PORTFOLIO/BACKSPLASH/S1.jpg" alt="Glass backsplash">
                                <div class="card-body overlayglass">
                                        <a class="glassicon text-white" href="favorite-works.php"><b><i class="fa fa-hand-pointer-o fa4-x i wow flash" data-wow-duration="4s" data-wow-delay="1s" data-wow-iteration="20000000000000" aria-hidden="true"></i></b></a>
                                        <h5 class="card-title text-center glass">click here for more information</h5>
                                </div>
                                        <h5 class="card-title text-center">BACKSPLASH</h5>
                                </div>
                                <div class="col-md-6 col-xl-3 containerglass">
                                        <img class="card-img-top imageglass" src="img/PORTFOLIO/GLASS FLOOR/2017-07-26.jpg" alt="Glass floor">
                                <div class="card-body overlayglass">
                                                <a class="glassicon text-white" href="favorite-works.php"><b><i class="fa fa-hand-pointer-o fa4-x i wow flash" data-wow-duration="4s" data-wow-delay="1s" data-wow-iteration="20000000000000" aria-hidden="true"></i></b></a>
                                        <h5 class="card-title text-center glass">click here for more information</h5>
                                </div>
                                        <h5 class="card-title text-center">GLASS FLOOR</h5>
                                </div>
                                <div class="col-md-6 col-xl-3 containerglass">
                                        <img class="card-img-top imageglass" src="img/PORTFOLIO/GLASS PARTITION/R3.jpg" alt="Glass partition">
                                <div class="card-body overlayglass">
                                                <a class="glassicon text-white" href="favorite-works.php"><b><i class="fa fa-hand-pointer-o fa4-x i wow flash" data-wow-duration="4s" data-wow-delay="1s" data-wow-iteration="20000000000000" aria-hidden="true"></i></b></a>
                                        <h5 class="card-title text-center glass">click here for more information</h5>
                                </div>
                                        <h5 class="card-title text-center">GLASS PARTITION</h5>
                                </div>
                                <div class="col-md-6 col-xl-3 containerglass">
                                        <img class="card-img-top imageglass" src="img/PORTFOLIO/MIRROR/unknown.jpg" alt="Mirror">
                                <div class="card-body overlayglass">
                                                <a class="glassicon text-white" href="favorite-works.php"><b><i class="fa fa-hand-pointer-o fa4-x i wow flash" data-wow-duration="4s" data-wow-delay="1s" data-wow-iteration="20000000000000" aria-hidden="true"></i></b></a>
                                        <h5 class="card-title text-center glass">click here for more information</h5>
                                </div>
                                        <h5 class="card-title text-center">MIRROR</h5>
                                </div>
                        </div>

                        

                        <div class="card-deck row GlassWorkTitle">
                                <div class="col-md-6 col-xl-3 containerglass">
                                        <img class="card-img-top imageglass" src="img/PORTFOLIO/POOL FENCE/pool fence 4.png" alt="Glass pool fence">
                                <div class="card-body overlayglass">
                                                <a class="glassicon text-white" href="favorite-works.php"><b><i class="fa fa-hand-pointer-o fa4-x i wow flash" data-wow-duration="4s" data-wow-delay="1s" data-wow-iteration="20000000000000" aria-hidden="true"></i></b></a>
                                        <h5 class="card-title text-center glass">click here for more information</h5>
                                </div>
                                        <h5 class="card-title text-center">POOL FENCE</h5>
                                </div>
                                <div class="col-md-6 col-xl-3 containerglass">
                                        <img class="card-img-top imageglass" src="img/PORTFOLIO/SHOWER DOOR/2017-10-30 (1)2.jpg" alt="Glass shower door">
                                <div class="card-body overlayglass">
                                                <a class="glassicon text-white" href="favorite-works.php"><b><i class="fa fa-hand-pointer-o fa4-x i wow flash" data-wow-duration="4s" data-wow-delay="1s" data-wow-iteration="20000000000000" aria-hidden="true"></i></b></a>
                                        <h5 class="card-title text-center glass">click here for more information</h5>
                                </div>
                                        <h5 class="card-title text-center">SHOWER DOOR</h5>
                                </div>
                                <div class="col-md-6 col-xl-3 containerglass">
                                        <img class="card-img-top imageglass" src="img/PORTFOLIO/TABLE TOP/2 (1).jpg" alt="Glass table top">
                                <div class="card-body overlayglass">
                                                <a class="glassicon text-white" href="favorite-works.php"><b><i class="fa fa-hand-pointer-o fa4-x i wow flash" data-wow-duration="4s" data-wow-delay="1s" data-wow-iteration="20000000000000" aria-hidden="true"></i></b></a>
                                        <h5 class="card-title text-center glass">click here for more information</h5>
                                </div>
                                        <h5 class="card-title text-center">TABLE TOP</h5>
                                </div>
                                <div class="col-md-6 col-xl-3 containerglass">
                                        <img class="card-img-top imageglass" src="img/PORTFOLIO/MIRROR/ANTIQUE MIRROR/2017-06-23 (1).jpg" alt="Mirror">
                                <div class="card-body overlayglass">
                                                <a class="glassicon text-white" href="favorite-works.php"><b><i class="fa fa-hand-pointer-o fa4-x i wow flash" data-wow-duration="4s" data-wow-delay="1s" data-wow-iteration="20000000000000" aria-hidden="true"></i></b></a>
                                        <h5 class="card-title text-center glass">click here for more information</h5>
                                </div>
                                        <h5 class="card-title text-center">Glass shelves</h5>
                                </div>
                                
        
                        </div>
        
                </div>
        </div>

        



        <!-- STOCK PRODUCTS-->

                <div class="card-group row">
                        <div class="col-xl-8 stockproducts">
                                <div class="text-center">
                                        <h2 style="margin:2%;">STOCK PRODUCTS</h2>
                                </div>
                                <div class="card-group row">
                
                                        <div class="card  col-xl-4 stockproducts">
                                                <img class="card-img-top" src="img/StockProducts/10.jpg" style="margin:5% auto;" alt="Glass stock products">
                                                <div class="card-body" >
                                                        
                                                </div>
                                                <h4 class="text-center">ANTARES GLASS DINING TABLE</h4>
                                                <p style="padding: 5%;">
                                                        This Antares Glass Dinning table is truly a masterpiece of our designers team. The linear design comes along with sophisticated
                                                        forms. Extraordinary shaped base add individual style to this table. And the clamps used to fix all glass panels together
                                                        add safety and durability to it. No matter where you place it, it will look stunning and make the place special.
                                                </p>
                                                
                                                <div class="card-footer">
                                                        <p class="text-muted">$2,282.02
                                                                <i class="fa fa-star text-warning"></i>
                                                                <i class="fa fa-star text-warning"></i>
                                                                <i class="fa fa-star text-warning"></i>
                                                                <i class="fa fa-star text-warning"></i>
                                                                <i class="fa fa-star text-warning"></i>
                                                        </p>
                                                </div>
                                        </div>

                                        <div class="card  col-xl-4 stockproducts">
                                                <img src="img/StockProducts/11.jpg" style="margin:5% auto;" alt="Glass stock products">
                                                <div class="card-body">
                                                        
                                                </div>
                                                <h4 class="text-center">LÉA MIRRORED SHELVES</h4>
                                                <p style="padding: 5%;">
                                                        Lea mirrored shelves are of different types and quality because of the type and quality of glass and mirrors used for it.
                                                        This very mirror shelve you are looking at now, (Lea mirrored shelves) is one of the very best made from a very high quality
                                                        mirror. It has 3 layers which you can place your fancy items for your interior, gold or silver items, glass frame pictures,
                                                        and any type of your expensive items that needs to be displaced on your wall. It can be produced in different colors and
                                                        even the sizes can be increased to your choice.
                                                </p>
                                                
                                                <div class="card-footer">
                                                        <p class="text-muted">$3,699.57
                                                                <i class="fa fa-star text-warning"></i>
                                                                <i class="fa fa-star text-warning"></i>
                                                                <i class="fa fa-star text-warning"></i>
                                                                <i class="fa fa-star text-warning"></i>
                                                                <i class="fa fa-star text-warning"></i>
                                                        </p>
                                                </div>
                                        </div>

                                        <div class="card  col-xl-4 stockproducts">
                                                <img src="img/StockProducts/9.jpg" style="margin:5% auto;" alt="Glass stock products">
                                                <div class="card-body">
                                                        
                                                        
                                                </div>
                                                <h4 class="text-center">ALICE WALL MIRROR WITH SHELVES</h4>
                                                <p style="padding: 5%;"> 
                                                        The Alice wall mirror with shelves is the piece of furniture that can make all the difference in your home. It is decorated
                                                        with bevel on the edges and has beautiful floral design on the top and the bottom. Made of aboveground top quality
                                                        glass, the shelves will certainly last in numerous years. We can offer you these in different shades. Just contact
                                                        our managers for more details.
                                                </p>
                                                <div class="card-footer">
                                                        <p class="text-muted">$3,174.80 <i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i></p>
                                                </div>
                                        </div>
                                
                                </div>
                        </div>
                
                        <div class="col-xl-4  stockproducts">
                                
                                <!--Video-->
                                <div class="container-fluid" style="margin-top:10%;">
                                        <embed width="750" height="450" class="d-none d-lg-block d-xl-none" src="https://www.youtube.com/embed/1P6phUcexJ0" style="margin:5% auto;">
                                        <embed width="350" height="250" class="d-sm-block d-md-none " src="https://www.youtube.com/embed/1P6phUcexJ0" style="margin:2% auto;">
                                        <embed width="550" height="480" class="d-none d-xl-block" src="https://www.youtube.com/embed/1P6phUcexJ0" style="margin:5% auto;">
                                        <embed width="550" height="480" class="d-none d-md-block d-lg-none " src="https://www.youtube.com/embed/1P6phUcexJ0" style="margin:5% auto;">
                
                                </div>
                                <div class="text-center" style="margin:5%;">
                                        
                                        

                                        <div class="card-footer">
                                                <a class="text-muted" href="http://fancyglassandmirrors.com/furniture/" target="_blank">
                                                        <h1 class="d-none d-xl-block">
                                                                <i class="fa fa-hand-o-right text-warning wow flash" data-wow-duration="4s" data-wow-delay="1s" data-wow-iteration="5"></i>
                                                        More stock products...
                                                        </h1>
                                                        <h3 class="d-xl-none d-sm-block">
                                                                <i class="fa fa-hand-o-right text-warning wow flash" data-wow-duration="4s" data-wow-delay="1s" data-wow-iteration="5"></i>
                                                                More stock products...
                                                        </h3>
                                                </a>
                                        </div>
                                </div>
                        </div>
                </div>
                
                <!--  tempered glass text-->
        
                <div class="card-group row">
                        <div class="col-xl-7 video-text">
                                <div class="text-center">
                                        <h1 style="margin:2%;">How is tempered glass made?</h1>
                                </div>
                                <div class="card-body row" style="margin:2% auto;">
                                        
                                        <div class="col-lg-4">
                                                <p>
                                                        Tempered glass is about four times stronger than "ordinary," or annealed, glass. And unlike annealed glass, which can shatter
                                                        into jagged shards when broken, tempered glass fractures into small, relatively harmless pieces. As a result, tempered glass
                                                        is used in those environments where human safety is an issue. Applications include side and rear windows in vehicles, entrance
                                                        doors, shower and tub enclosures, racquetball courts, patio furniture, microwave ovens and skylights. To prepare glass for
                                                        the tempering process, it must first be cut to the desired size. (Strength reductions or product failure can occur if any
                                                        fabrication operations, such as etching or edging, take place after heat treatment.) The glass is then examined for imperfections
                                                        that could cause breakage at any step during tempering. An abrasivesuch as sandpapertakes sharp edges off the glass, which
                                                        is subsequently washed
                                                </p>
                                        </div>
                                        <div class="col-lg-4">
                                                <p>
                                                        Next, the glass begins a heat treatment process in which it travels through a tempering oven, either in a batch or continuous
                                                        feed. The oven heats the glass to a temperature of more than 600 degrees Celsius. (The industry standard is 620 degrees Celsius.)
                                                        The glass then undergoes a high-pressure cooling procedure called "quenching." During this process, which lasts just seconds,
                                                        high-pressure air blasts the surface of the glass from an array of nozzles in varying positions. Quenching cools the outer
                                                        surfaces of the glass much more quickly than the center. As the center of the glass cools, it tries to pull back from the
                                                        outer surfaces. As a result, the center remains in tension, and the outer surfaces go into compression, which gives tempered
                                                        glass its strength.
                                                </p>
                                        </div>
                                        <div class="col-lg-4">
                                                <p>
                                                        Glass in tension breaks about five times more easily than it does in compression. Annealed glass will break at 6,000 pounds
                                                        per square inch (psi). Tempered glass, according to federal specifications, must have a surface compression of 10,000 psi
                                                        or more; it generally breaks at approximately 24,000 psi. Another approach to making tempered glass is chemical tempering,
                                                        in which various chemicals exchange ions on the surface of the glass in order to create compression. But because this method
                                                        costs far more than using tempering ovens and quenching, it is not widely used
                                                </p>
                                        </div>
                                </div>
                        </div>
                        
                        <div class="col-xl-5 video-text">
                                <div class="text-center">
                                        <h1 style="margin:2%;">Video</h1>
                                </div>
                                <!--Video-->
                                <div class="container-fluid">
                                        <embed width="750" height="450" class="d-none d-lg-block d-xl-none" src="https://www.youtube.com/embed/IXnKZYTYxEg" style="margin:5% auto;">
                                        <embed width="350" height="250" class="d-sm-block d-md-none " src="https://www.youtube.com/embed/IXnKZYTYxEg" style="margin:2% auto;">
                                        <embed width="550" height="480" class="d-none d-xl-block" src="https://www.youtube.com/embed/IXnKZYTYxEg" style="margin:5% auto;">
                                        <embed width="550" height="480" class="d-none d-md-block d-lg-none " src="https://www.youtube.com/embed/IXnKZYTYxEg" style="margin:5% auto;">
                                
                                </div>
                        </div>
                </div>
                
                

<?php
include_once('Reviews.php');
?>
                

                <!-- Installation-->
                <div class="card styletitle text-white">
                        <h3 class="card-title text-center">Installation </h3>
                        <div class="card-body row">
                                <div class="col-lg-4">

                                        <img class="card-img-top" src="img/10.jpg" alt="Glass stock products">
                                </div>
                                <div class="col-lg-8">
                                        <p>
                                                New York Tempering Glass offer a National installation service, it's a simple process to achieve your home improvement:<br>
                                                Site Details Inform us of your job details via phone or our online booking form and we will meet you at the site at an agreed
                                                time, alternatively a trained professional can quote you over the phone or via email if you have approximate details of your
                                                job or plans. 
                                                <br>Styles and designs There are many styles and designs, each one performing and looking differently. 
                                                <br>New York
                                                Tempering Glass trained professionals can share their experience and give you the best advice for your project. We take pride
                                                in our product design .
                                                <img class="card-img-top img-car" src="img/glass-320x200.jpg" alt="Card image cap" align="right">
                                                <br> Wardrobes, Splashbacks and Mirrors are manufactured on site using the highest quality glass and components.<br><br>
                                                The go ahead On acceptance of the quote a 50% deposit is required to confirm your order. We may need to do a check measure
                                                of the job depending on the product.
                                                <br> New York Tempering Glass will produce the materials and set an appropriate installation
                                                date and time frame.
                                        
                                                <br>Please note different products have varying lead times dependant on their manufacturing complexity.
                                                Installation & Completion of your job On the installation day/s of your job we require the customer to be at the premises
                                                to inspect the installation and provide the remaining 50% payment. Please follow the advice of the installer .
                                                <br> We hope the
                                                New York Tempering Glass product and service exceeds your expectations as we strive to maintain high levels of quality and
                                                affordability for our customers.
                                        </p>
                                </div>
                        </div>
                </div>
        
        




                <!-- glass type-->
                <div class="card" style="margin-top:5%;">
                        <h3 class="card-title text-center">Glass Color </h3>
                </div>
                <div class="GlassColor">
                        <div class="card-deck">
                                <div class="card-deck row GlassColorTitle">
                                        <div class="col-md-4 col-xl-2">
                                                <img class="card-img-top transform" src="img/glassCATALOG/glass regular.jpg" alt="Glass regular ">
                                        <div class="card-body">
                                                <h5 class="card-title text-center">Clear Glass</h5>
                                        </div>
                                        </div>
                                        <div class="col-md-4 col-xl-2">
                                                <img class="card-img-top transform" src="img/glassCATALOG/glass starphire.jpg" alt="Glass starphire">
                                        <div class="card-body">
                                                <h5 class="card-title text-center">Starphire Glass (Low-Iron Glass)</h5>
                                        </div>
                                        </div>
                                        <div class="col-md-4 col-xl-2">
                                                <img class="card-img-top transform" src="img/glassCATALOG/acid etched regular.jpg" alt="Glass acid etched regular">
                                        <div class="card-body">
                                                <h5 class="card-title text-center">Acid-Etch (Frosted) Glass</h5>
                                        </div>
                                        </div>
                                        <div class="col-md-4 col-xl-2">
                                                <img class="card-img-top transform" src="img/glassCATALOG/glass gray.jpg" alt="Glass gray">
                                        <div class="card-body">
                                                <h5 class="card-title text-center">Grey Glass</h5>
                                        </div>
                                        </div>
                                        <div class="col-md-4 col-xl-2">
                                                <img class="card-img-top transform" src="img/glassCATALOG/glass bronz.jpg" alt="Glass bronz">
                                        <div class="card-body">
                                                <h5 class="card-title text-center">Bronze Glass</h5>
                                        </div>
                                        </div>
                                        
                                        <div class="col-md-4 col-xl-2">
                                                <img class="card-img-top transform" src="img/glassCATALOG/customglassnav.jpg" alt="Custom glass">
                                        <div class="card-body"> 
                                                <h5 class="card-title text-center">Colored glass</h5>
                                        </div>
                                </div>
                        </div>
                        <div id="aboutus"></div>
                        </div>

                        </div>
                </div>


                <!--  about us-->

                <div class="card-group row aboutus">
                        <div class="col-md-2 d-none d-md-block">
                                <img class="card-img-top logo-f" src="img/logo NYTG.jpg" alt="logo New York Tempering Glass">
                        </div>
                        <div class="col-md-8  aboutus-p">
                                <div class="text-center">
                                        <h1 style="margin:2%;">About us</h1>
                                </div>
                                <div class="card-body">
                                        <p class="aboutus-p">New York Tempering Glass provides glass and glazing services in new york, whether its for your home, business or personal
                                        requirements.
                                        <br><br> Our Products and services include decorative laminated glass,custom glass backsplashes,color glass, color mirror,
                                        antique mirror, emergency glass replacement, window repairs, glass door repairs, mirror installations, glass for balustrades,
                                        tinted and other specialty glass types and more. We offer a wide range of glass products in brooklyn,queens,manhattan,staten
                                        island,the bronx,nassau county,suffolk county,long island ny,jersey city,new jersey for use in any application.
                                        <br> At custom
                                        cut glass nyc we are proud of ourselves on providing quality products backed by superior service, while maintaining competitive
                                        prices. <br><br><br>
                                        Services Shower Door Installation & Repair, Window Installation, Window Repair, Emergency Glass Replacement,
                                        Mirror Installations</p>
                                
                                </div>
                        </div>
                        <div class="col-md-2">
                                <img class="card-img-top logo-f d-none d-md-block" src="img/logo NYTG.jpg" alt="logo New York Tempering Glass">
                                <img class="card-img-top d-md-none d-block" src="img/logo NYTG.jpg" alt="logo New York Tempering Glass">
                        </div>
                        
                </div>






<?php
include_once('map_contact_form.php')
?>


<?php
include_once('footer.php')
?>