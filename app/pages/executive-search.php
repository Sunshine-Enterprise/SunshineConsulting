<?php
    include '../app/pages/includes/header.php';
?>


        <!-- Title-->
        <section class="page-section bg-white masthead pb-0 pt-3" id="contact">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 text-center">
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

                       

                        <div class="row" id="job-row">
                                <h2 class="display-5 fw-bold py-2">Executive Search </h2>
                        </div>

                        
                        
                        <div class="row pb-4">
                            
                        </div>

                        
                        <p class="lead" id="texto">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                        <p class="lead" id="texto">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
                        <p class="lead" id="texto">Ullamco laboris nisi ut a Lorem ipsum dolor sit amet,consectetur adipiscing eli ncididunt ullamco laboris nisi ut a Lorem ipsum dolor sit amet,consectetur adipiscing el Lorem ipsum dolor sit amet,consectetur adipiscing eli ncididunt ullamco laboris nisi ut a Lorem ipsum dolor sit amet,consectetur adipiscing el.</p>
                        <p class="lead" id="texto">Ullamco laboris nisi ut a Lorem ipsum dolor sit amet,consectetur adipiscing eli ncididunt ullamco laboris nisi ut a Lorem ipsum dolor sit amet,consectetur adipiscing el Lorem ipsum dolor sit amet,consectetur adipiscing eli ncididunt ullamco laboris nisi ut a Lorem ipsum dolor sit amet,consectetur adipiscing el.</p>
                        <p class="lead" id="texto">Ullamco laboris nisi ut a Lorem ipsum dolor sit amet,consectetur adipiscing eli ncididunt ullamco laboris nisi ut a Lorem ipsum dolor sit amet,consectetur adipiscing el Lorem ipsum dolor sit amet,consectetur adipiscing eli ncididunt ullamco laboris nisi ut a Lorem ipsum dolor sit amet,consectetur adipiscing el.</p>
                    </div>


                    <div class="col-md-6 order-2 order-md-1">
                        <div class="mt-0 me-md-3 me-lg-5">
                            <p class="lead" id="texto">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                        </div>
                    </div>


                    <div class="col-md-6 order-1 order-md-2">
                        <div class="row gx-2 gx-lg-3">
                            <div class="col-6"><img class="img-fluid rounded-3" src="assets/services-1.jpg"></div>
                            <div class="col-6"><img class="img-fluid rounded-3" src="assets/services.jpg"></div>
                        </div>
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
