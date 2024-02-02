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
        <link href="<?php ?>/css/styles.css" rel="stylesheet" />

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

        <header class="background bg-black">
            <div class="container px-4 px-lg-5 h-100 py-5">
                <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-12 align-self-end">

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
                        <h2 class="section-heading text-uppercase fw-bold" id="shadow-1">Sunshine Consulting</h2>
                        <hr class="divider" />
                        
                    </div>
                </div>
            </div>
        </section>
           
        <!-- Services-->
        <section class="page-section pt-3" id="services align-items-center">
            <div class="container px-4 px-lg-5">
               
                <div class="row gx-4 gx-lg-5 ">
                    <div class="col-lg-12 col-md-4 w-50">
                        <!-------------------------//-->
                        <form id="contactForm" data-sb-form-api-token="API_TOKEN">

                            <!-- Email address input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
                                <label for="email">Email address</label>
                                <div class="invalid-feedback text-start" data-sb-feedback="email:required">An email is required.</div>
                                <div class="invalid-feedback text-start" data-sb-feedback="email:email">Email is not valid.</div>
                            </div>
                            
                            <!-- Phone number input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="phone" type="tel" placeholder="(123) 456-7890" data-sb-validations="required" />
                                <label for="phone">Phone number</label>
                                <div class="invalid-feedback text-start" data-sb-feedback="phone:required">A password  is required.</div>
                            </div>

                            <!-- Submit success message-->
                            <div class="d-none" id="submitSuccessMessage">
                                <div class="text-center mb-3">
                                    <div class="fw-bolder">Form submission successful!</div>
                                    We will contact you soon, stay alert !!!
                                    <br />
                                    <a href="#">scgcc@info.com</a>
                                </div>
                            </div>
                            <!-- Submit error message-->

                            <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                            <!-- Submit Button-->
                            <div class="d-grid"><button class="btn btn-primary btn-xl disabled" id="submitButton" type="submit">Submit</button></div>
                        </form>
                        <!-------------------------//-->
                    </div>
                    
                </div>
            </div>
        </section>

        
        <!-- Footer-->
        <footer class="footer py-4 bg-dark">
            <div class="container">
                <div class="row align-items-center text-center">
                    <div class="col-lg-4 text-lg-start text-white" id="shadow-1">Sunshine Enterprise Consulting  &copy;</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn btn-light btn-social mx-2" href="#!" aria-label="Twitter"><i class="bi-linkedin"></i></a>
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
