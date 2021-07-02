<!-- Button trigger modal -->


<!-- Modal. The user will enter registration details then we will send these input datils to verifyRegsitration.php page -->
<div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="registerModalLabel">Register</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
            <form action="partials/verifyregister.php" method="post">
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
                    <label for="exampleInputEmail1" class="form-label">mobile number</label>
                    <input type="number" class="form-control" id="registerMobile" name="registerMobile" aria-describedby="emailHelp" placeholder="e.g. 8102******">
                    
                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" name="registerPassword" id="registerPassword">
                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" name="registercPassword" id="registercPassword">
                </div>



              


                <button type="submit" class="btn btn-success">register</button>

            </form>
      </div>
   
    </div>
  </div>
</div>
