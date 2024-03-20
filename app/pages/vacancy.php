<?php
    include '../app/pages/includes/header.php';
?>


        <!-- Title-->
        <section class="page-section bg-white masthead pb-0 pt-3" id="contact">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="section-heading fw-bold" id="shadow-1">Open Job</h2>
                        <hr class="divider" />       
                    </div>
                </div>
            </div>
        </section>


        <!--Job-->
        <section class="pb-5">
            <div class="container">
                <div class="row" id="vacancy-container">

                    <!---------------------------------------------->
                    
                    <div class="col-md-12 rounded py-5" id="category-vacancy">

                        <div class="row" >
                            <div class="col-md-6 col-12" id="job-row">
                                <span class="text-muted" id="texto"><i class="fa fa-briefcase" aria-hidden="true"></i> Construction </span> <br>
                            </div>
                            
                            <div class="col-md-6 col-12" id="job-row">
                                <span class="text-muted" id="date-vacancy"><i class="fa fa-calendar" aria-hidden="true"></i> 03/13/2024</span> <br>
                            </div>    
                        </div>

                        <div class="row" id="job-row">
                                <h2 class="display-5 fw-bold py-2">Project Management Recluiter</h2>
                        </div>

                        <div class="row">
                            <div class="col-md-6 col-12" id="job-row">
                                <span class="text-muted" id="texto"><i class="fa fa-map-marker" aria-hidden="true"></i> Dubai/Abudabi</span> <br>
                            </div>

                            <div class="col-md-6 col-12" id="job-row">

                               

                                <button type="button" class="job-button btn text-center shadow" data-bs-toggle="modal" 
                                        data-bs-target="#exampleModal" data-bs-whatever="@mdo" id="text-vacancy">
                                        Apply Now
                                </button>

                            </div>
                        </div>
                        
                        <div class="row pb-4">
                            <div class="col">
                                <p class="h3" id="texto"><i class="fa fa-usd" aria-hidden="true"></i> 21/hr</p>
                            </div>
                        </div>

                        
                        <p class="lead" id="texto">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                        <p class="lead" id="texto">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
                        <p class="lead" id="texto">Ullamco laboris nisi ut a Lorem ipsum dolor sit amet,consectetur adipiscing eli ncididunt ullamco laboris nisi ut a Lorem ipsum dolor sit amet,consectetur adipiscing el Lorem ipsum dolor sit amet,consectetur adipiscing eli ncididunt ullamco laboris nisi ut a Lorem ipsum dolor sit amet,consectetur adipiscing el.</p>
                        <p class="lead" id="texto">Ullamco laboris nisi ut a Lorem ipsum dolor sit amet,consectetur adipiscing eli ncididunt ullamco laboris nisi ut a Lorem ipsum dolor sit amet,consectetur adipiscing el Lorem ipsum dolor sit amet,consectetur adipiscing eli ncididunt ullamco laboris nisi ut a Lorem ipsum dolor sit amet,consectetur adipiscing el.</p>
                        <p class="lead" id="texto">Ullamco laboris nisi ut a Lorem ipsum dolor sit amet,consectetur adipiscing eli ncididunt ullamco laboris nisi ut a Lorem ipsum dolor sit amet,consectetur adipiscing el Lorem ipsum dolor sit amet,consectetur adipiscing eli ncididunt ullamco laboris nisi ut a Lorem ipsum dolor sit amet,consectetur adipiscing el.</p>
                    </div>

                    <!---------------------------------------------->                   
                    
                </div>
            </div>
        </section>
  

        <?php
            include '../app/pages/includes/footer.php';
        ?>
    </body>



<!------------------------------------------------------------>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5 text-center" id="exampleModalLabel">Project Management Recluiter</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
        <!------>
            <div class="mb-3">
                <label for="recipient-name" class="col-form-label">Name:</label>
                <input type="text" class="form-control" id="recipient-name">
            </div>
            
            <div class="mb-3">
                <label for="recipient-name" class="col-form-label">Last Name:</label>
                <input type="text" class="form-control" id="recipient-name">
            </div>
            
            <div class="mb-3">
                <label for="recipient-name" class="col-form-label">Email:</label>
                <input type="text" class="form-control" id="recipient-name">
            </div>
            
            <div class="mb-3">
                <label for="recipient-name" class="col-form-label">Phone Number:</label>
                <input type="text" class="form-control" id="recipient-name">
            </div>
            
            <div class="mb-3">
                <!------------------------>
                <div class="form-group files">
                    <label class="form-label h5" id="texto" ></label>
                    <input type="file" class="form-control" multiple="">
                </div>
                <!------------------------>
            </div>
        <!------>
        </form>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Send message</button>
      </div>
    </div>
  </div>
</div>



</html>
