<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Creative - Start Bootstrap Theme</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />

    </head>

    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="home">SCGCC</a>

                <div class="dropdown">
                    
                    <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Language
                    </button>

                    <ul class="dropdown-menu">
                      <li><button class="dropdown-item fw-medium" type="button"><a href="home">English</a></button></li>
                      <li><button class="dropdown-item fw-medium" type="button"><a href="home.ar">Arabic</a></button></li>
                    </ul>

                </div>

                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span></button>
                
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto my-2 my-lg-0">
                        <li class="nav-item"><a class="nav-link" href="about">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="team">Team</a></li>
                        <li class="nav-item"><a class="nav-link" href="blog">Blog</a></li>
                        <li class="nav-item"><a class="nav-link" href="jobs">Jobs</a></li>
                    </ul>
                </div>

                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto my-2 my-lg-0">
                        <li class="nav-item bg-warning rounded m-1 p-2 text-center"><a class="nav-link" href="login" class="text-dark">Login</a></li>
                        <li class="nav-item bg-warning rounded m-1 p-2 text-center"><a class="nav-link" href="register" class="text-dark">Register</a></li>
                        <li class="nav-item"></li>
                    </ul>
                </div>

            </div>
        </nav>

        <header class="bg-dark py-4 pt-5">
            <div class="container px-4 px-lg-5 h-100">
                <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-8 align-self-end">
                        <h1 class="text-white font-weight-bold fst-italic" id="shadow"> </h1>                        
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                    </div>
                </div>
            </div>
        </header>

        <section class="page-section bg-light masthead pb-2 pt-5" id="about">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="section-heading text-uppercase fw-bold" id="shadow-1">Industries</h2>
                        <hr class="divider" />
                        
                    </div>
                </div>
            </div>
        </section>

        <!-- BODY-->
        <div class="container w-50 pt-4">
        <section class="page-section bg-gray pt-1" id="team">
            <div class="container">
            <form class="needs-validation" novalidate="">
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="firstName" class="form-label">First Name</label>
              <input type="text" class="form-control" id="firstName" placeholder="" value="" required="">
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>

            <div class="col-sm-6">
              <label for="lastName" class="form-label">Last Name</label>
              <input type="text" class="form-control" id="lastName" placeholder="" value="" required="">
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div>

            <div class="col-6">
                <label for="state" class="form-label">Phone Number</label>
              <div class="input-group has-validation">
                <input type="text" class="form-control" id="username" placeholder="" required="">
              <div class="invalid-feedback">
                  Your username is required.
                </div>
              </div>
            </div>


            <div class="col-6">
                <label for="state" class="form-label">Email</label>
              <div class="input-group has-validation">
                <input type="text" class="form-control" id="username"  required="">
              <div class="invalid-feedback">
                  Your username is required.
                </div>
              </div>
            </div>
            
            <div class="col-6">
                <label for="state" class="form-label">Password</label>
              <div class="input-group has-validation">
                <input type="text" class="form-control" id="username" placeholder="" required="">
              <div class="invalid-feedback">
                  Your username is required.
                </div>
              </div>
            </div>


            <div class="col-6">
                <label for="state" class="form-label">Verify Password</label>
              <div class="input-group has-validation">
                <input type="text" class="form-control" id="username" placeholder="" required="">
              <div class="invalid-feedback">
                  Your username is required.
                </div>
              </div>
            </div>

            <div class="col-md-5">
            <label for="state" class="form-label">Country</label>
              <select class="form-select" id="country" required="">
                <option value="">Choose your Country</option>
                <option>United States</option>
              </select>
              <div class="invalid-feedback">
                Please select a valid country.
              </div>
            </div>

            <div class="col-md-4">
              <label for="state" class="form-label">State</label>
              <select class="form-select" id="state" required="">
                <option value="">Choose...</option>
                <option>California</option>
              </select>
              <div class="invalid-feedback">
                Please provide a valid state.
              </div>
            </div>

            <div class="col-md-3">
              <label for="zip" class="form-label">Zip</label>
              <input type="text" class="form-control" id="zip" placeholder="" required="">
              <div class="invalid-feedback">
                Zip code required.
              </div>
            </div>
          </div>

          <label for="formFileMultiple" class="form-label pt-3"> CV</label>
          <input class="form-control" type="file" id="formFileMultiple" multiple>

          <div class="my-3">

          <label for="state" class="form-label">Industry of interest</label>
            <div class="form-check">
              <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked="" required="">
              <label class="form-check-label" for="credit">Construction</label>
            </div>
            <div class="form-check">
              <input id="debit" name="paymentMethod" type="radio" class="form-check-input" required="">
              <label class="form-check-label" for="debit">Energy</label>
            </div>
            <div class="form-check">
              <input id="paypal" name="paymentMethod" type="radio" class="form-check-input" required="">
              <label class="form-check-label" for="paypal">Hospitality</label>
            </div>
            <div class="form-check">
              <input id="paypal" name="paymentMethod" type="radio" class="form-check-input" required="">
              <label class="form-check-label" for="paypal">Healthcare</label>
            </div>
            <div class="form-check">
              <input id="paypal" name="paymentMethod" type="radio" class="form-check-input" required="">
              <label class="form-check-label" for="paypal">Education</label>
            </div>
            <div class="form-check">
              <input id="paypal" name="paymentMethod" type="radio" class="form-check-input" required="">
              <label class="form-check-label" for="paypal">Information of technology</label>
            </div>
          </div>
          
          <hr class="my-4">

          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="same-address">
            <label class="form-check-label" for="same-address">Accept Terms and Conditions</label>
          </div>

          <hr class="my-4">

          <div class="row gy-3">
          </div>

          <button class="w-100 btn btn-primary btn-lg" type="submit">Register</button>
        </form>          
            </div>
        </section>
        </div>
    
        <!-- BODY-->
        
        <section class="page-section bg-dark masthead py-5 pb-3" id="about">
        <h2 class="section-heading text-uppercase fw-bold text-light text-center pt-4 my-0" id="shadow-1">Find Us</h2>
        <p class="pb-4 pt-2 mb-0 text-center text-light fst-italic">Send us a messages and we will get back to you as soon as possible!</p>
        <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6 text-center">
                       
                    </div>
                </div>

                <div class="container-fluid px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-12 col-md-12 col-12 text-center">
                    <div class="row text-center">
                        <div class="col-lg-6 col-6">
                            <div class="text-center text-light">                              
                                <h4 id="phone">+971 (123) 456-6789</h4>
                                <p class="fw-bold text-white">Dubai</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-6">
                            <div class="text-center text-light">
                                <h4 id="phone">+1 (407) 636-2982</h4>
                                <p class="fw-bold text-white">United States</p>                                
                            </div>
                        </div>
                    </div>
                    <div class="row">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3613.9597848676813!2d55.14060967599416!3d25.06935213686593!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f6cb347c3947b%3A0x2631d925145d23ed!2sTrack24%20-%20Gold%20Tower%20-%20Cluster%20I%20-%20JLT!5e0!3m2!1sen!2sus!4v1706819788010!5m2!1sen!2sus"
                            width="600" height="150" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>

                    </div>
                    <div class="col-lg-6 col-md-6 col-12 text-center">
                    </div>
                </div>                
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer py-4 bg-dark">
            <div class="container">
                <div class="row align-items-center text-center">
                    <div class="col-lg-4 text-lg-start text-white">Copyright &copy; Your Website 2023</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn btn-light btn-social mx-2" href="#!" aria-label="Twitter"><i class="bi-twitter"></i></a>
                        <a class="btn btn-light btn-social mx-2" href="#!" aria-label="Facebook"><i class="bi-facebook"></i></a>
                        <a class="btn btn-light btn-social mx-2" href="#!" aria-label="LinkedIn"><i class="bi-instagram"></i></a>
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <a class="link-dark text-decoration-none me-3 text-white" href="#!">Privacy Policy</a>
                        <a class="link-dark text-decoration-none text-white" href="#!">Terms of Use</a>
                    </div>
                </div>
            </div>
        </footer>
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
