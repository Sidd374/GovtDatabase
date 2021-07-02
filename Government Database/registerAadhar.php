<!-- Button trigger modal -->


<!-- Modal. The user will enter registration details then we will send these input datils to verifyRegsitration.php page -->
<div class="modal fade" id="registerAadhar" tabindex="-1" aria-labelledby="registerAadhar" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="registerAadhar">Register Aadhar Card</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
            <form action="partials/verifyAadhar.php" method="post">
                

            <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Aadhar Card No</label>
                    <input type="number" class="form-control" id="aadharNo" name="aadharNo" aria-describedby="emailHelp" placeholder="11 digit number please">
                    
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
                    <label for="exampleInputEmail1" class="form-label">Gender</label>
                    <input type="text" class="form-control" name="sex" id="sex" aria-describedby="emailHelp" placeholder="e.g. Male, Female, Other">
                </div>

       

              


                <button type="submit" class="btn btn-success">Submit</button>

            </form>
      </div>
   
    </div>
  </div>
</div>
