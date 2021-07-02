<!-- Button trigger modal -->


<!-- Modal. The user will enter registration details then we will send these input datils to verifyRegsitration.php page -->
<div class="modal fade" id="registerVISA" tabindex="-1" aria-labelledby="registerVISALabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="registerVISALabel">Register for VISA</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
            <form action="partials/verifyVISA.php" method="post">
                

            <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">VISA UNIQUE NUMBER</label>
                    <input type="number" class="form-control" id="registerVisa" name="registerVisa" aria-describedby="emailHelp" placeholder="6 digit number please">
                    
                </div>
                
                
                
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="registerEmail" name="registerEmail" aria-describedby="emailHelp" placeholder="e.g. siddhant@gmail.com">
                    
                </div>


                <div class="row">
                

                    <div class="col-sm-6">
                    
                    <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">First Name</label>
                    <input type="text" class="form-control" id="firstName" name="firstName" aria-describedby="emailHelp" placeholder="e.g. Siddhant">
                    
                    </div>

                    </div>


                    <div class="col-sm-6">
                    
                    <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Last Name</label>
                    <input type="text" class="form-control" id="lastName" name="lastName" aria-describedby="emailHelp" placeholder="e.g. Siddhant">
                    
                    </div>

                    
                    </div>
                
                
                </div>


                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Mobile Number</label>
                    <input type="number" class="form-control" id="registerMobile" name="registerMobile" aria-describedby="emailHelp" placeholder="e.g. 8102******">
                    
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Country Visiting</label>
                    <input type="text" class="form-control" name="countryVisiting" id="countryVisiting" aria-describedby="emailHelp" placeholder="e.g. Nepal">
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Reason For Visitng</label>
                    <input type="text" class="form-control" id="reasonVisiting" name="reasonVisiting" aria-describedby="emailHelp" placeholder="e.g. Studies, Family">
                </div>



              


                <button type="submit" class="btn btn-success">Submit</button>

            </form>
      </div>
   
    </div>
  </div>
</div>
