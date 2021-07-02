<!-- Button trigger modal -->


<!-- Modal. The user will enter login details (email and password) then we will send these input datils to verifyLogin.php page -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="loginModalLabel">Login</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
            <form action="partials/verifyLogin.php" method="post">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="loginEmail" name="loginEmail" aria-describedby="emailHelp" placeholder="e.g. siddhant@gmail.com">
                    
                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" name="loginPassword" id="loginPassword">
                </div>


              


                <button type="submit" class="btn btn-success">login</button>

            </form>
      </div>
   
    </div>
  </div>
</div>
