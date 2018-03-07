<?php
include_once('header.php');
?>


    <!-- contact form-->
    <div class="row ">
        <div class="col-lg-7 bg-f-contact">
            <div class="container">
                <div class="text-white">
                    <h1 class="card-title text-center form-contact">
                        <b>Contact us about your project</b>
                    </h1>
                </div>
                <form class="contactForm" name="contactform" method="post" action="send_contact_page.php">
                    <div class="form-row form-contact">
                        <div class="form-group col-md-6">
                            <input type="Name" class="form-control" name="name" id="inputName" placeholder="You Name">
                        </div>
                        <div class="form-group col-md-6">
                            <input type="email" class="form-control" name="email" id="inputEmail4" placeholder="Email">
                        </div>
                    
                    </div>
                        <div class="form-group form-contact">
                            <input type="phone" class="form-control" name="telephone" id="inputphone" placeholder="Phone">
                        </div>
        
                    <div class="form-group form-contact">
                        <textarea class="form-control" type="textarea" name="comments" id="message" placeholder="Message" maxlength="140" rows="7"></textarea>
                    </div>
            
                    <button type="submit" class="btn color-nav text-white form-contact">Submit</button>
                </form>
            
            </div>
        </div>
    
        <div class="col-lg-5 bg-f-contact">
            <div class="container ">
                <p class="card-text text-white">
                    <div class="card-body contact-page">
                        <h4 class="text-white">Looking for a little more information?</h4>
                        <p class="text-white">
                            We can help. Please fill out the form and we will get back to you as soon as possible.</p>
                        <p class="card-text text-white">
                         Address: 199 Avenue T, Brooklyn NY 11223
                        </p>
                    
                        <p class="card-text text-white">
                            <span>Phone:  +1 646-893-8335 </span>
                            <br>
                        </p>
                        <p class="card-text text-white">
                            <span>Email: newyorktemperingglass@gmail.com</span>
                        </p>
                        <br>
                    </div>
                    
            </div>
        </div>
    
    </div>
    </div>
    </div>

        <!-- map-->
        <div class="container-fluid map">
            <iframe class="map-contact d-block" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3029.400478664759!2d-73.97993588459849!3d40.59898697934434!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c244fed3f6db95%3A0x3bf9f6c54268af3f!2s199+Avenue+T%2C+Brooklyn%2C+NY+11223%2C+USA!5e0!3m2!1sen!2sua!4v1518188559045"
                frameborder="0" allowfullscreen></iframe>
        
        </div>

                <button onclick="topFunction()" id="TOP" title="Go to top"><i class="fa fa-chevron-up" aria-hidden="true"></i><br>UP</button>
                
                

<?php
include_once('footer.php')
?>