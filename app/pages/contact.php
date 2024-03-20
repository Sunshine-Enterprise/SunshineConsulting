<?php
    include '../app/pages/includes/header.php';
?>

    <!-- Title-->
    <section class="page-section bg-white masthead pb-0 pt-5" id="contact">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="section-heading text-uppercase fw-bold pt-5" id="shadow-1">Contact Us</h2>
                    <p class="fst-italic fst-italic text-secondary">We strive to be the premier national business solution for our clients, associates and business partners.</p>
                    <hr class="divider" />       
                </div>
            </div>
        </div>
    </section>

    <!-- Title-->

    <section id="contact">
       <div class="container">
          
           <div class="row">
             <div class="col-sm-12 col-md-6 col-lg-4 mb-3 mt-0">
               <div class="card border-0">
                  <div class="card-body text-center">
                    <i class="fa fa-phone fa-5x mb-3" aria-hidden="true"></i>
                    <h5 class="text-uppercase mb-3" id="texto">call us</h5>
                    <p id="texto">+971 4 (242) 9822</p>
                  </div>
                </div>
             </div>
             
             <div class="col-sm-12 col-md-6 col-lg-4 mb-3 mt-0">
               <div class="card border-0">
                  <div class="card-body text-center">
                    <i class="fa fa-map-marker fa-5x mb-3" aria-hidden="true"></i>
                    <h5 class="text-uppercase mb-3" id="texto">Office Location</h5>
                   <address id="texto">
                     Gold Tower, Office 35-H 
               </br> Cluster I, JLT 
               </br> Dubai, U.A.E. </address>
                  </div>
                </div>
             </div>


             <div class="col-sm-12 col-md-6 col-lg-4 mb-3 mt-0">
               <div class="card border-0">
                  <div class="card-body text-center">
                    <i class="fa fa-globe fa-5x mb-3" aria-hidden="true"></i>
                    <h5 class="text-uppercase mb-3" id="texto">email</h5>
                    <p id="texto">info@secgcc.com</p>
                  </div>
                </div>
             </div>
           </div>

       </div>
    </section>

        <!-- Contact-->
        <section class="pb-5">
            <div class="container">
                <div class="row justify-content-center text-center mb-3">
                    
                </div>
                <div class="row">

                    <div class="col-lg-6">
                        <h5 class="fw-semibold mb-3">Send us a message: </h5>
                        <form>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <input class="form-control bg-light" placeholder="First name" type="text">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <input class="form-control bg-light" placeholder="Last name" type="email">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3">
                                        <input class="form-control bg-light" placeholder="Email address" type="text">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3">
                                        <input class="form-control bg-light" placeholder="Phone Number" type="number">
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <textarea class="form-control bg-light" placeholder="Your message" rows="4"></textarea>
                            </div>
                            <div class="col-12">
                                <div class="row">
                                    <!---------->
                                    <div class="col-6">
                                        <a href="projects">
                                        <button type="button" type="submit" class="bg-light text-dark read_more mb-3 text-center shadow rounded-0 float-start">
                                            Back
                                        </button>
                                        </a>
                                    </div>

                                    <div class="col-6">
                                            <!-------------------------->
                                            <button type="button" type="submit" class=" read_more mb-3 text-center shadow rounded-0 float-end">
                                                Submit
                                            </button>
                                            <!-------------------------->
                                    </div>
                                    <!---------->
                                </div>
                            </div>
                        </form>
                    </div>


                    <div class="col-lg-6 mt-5 mt-lg-0">
                        <div class="mb-4">
                             <h5 class="fw-semibold mb-3">Our Location:</h5>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3613.9597848676813!2d55.14060967599416!3d25.06935213686593!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f6cb347c3947b%3A0x2631d925145d23ed!2sTrack24%20-%20Gold%20Tower%20-%20Cluster%20I%20-%20JLT!5e0!3m2!1sen!2sus!4v1706819788010!5m2!1sen!2sus"
                             style="height:300px;" class="img-fluid w-100"  allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                        </div>
                    </div>
                </div>
            </div>
        </section>
<!------------------------------------------------->

        <?php
              include '../app/pages/includes/footer.php';
        ?>

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- SimpleLightbox plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>


</html>
