<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- for Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">


  <!-- font awesome -->
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>





    <title>Govt. registration</title>
  </head>
  <body>
 



<!-- Include below files to display navbar dynamically in a page, and to establish connection to db -->
 <?php 
 include 'partials/_navbar.php';
 include 'partials/_db_connect.php';
 include 'registerVISA.php';
 include 'registerCitizen.php';
 include 'registerGovWork.php';
 include 'registerPAN.php';
 include 'registerPassport.php';
 include 'registerProperty.php';
 include 'registerDMV.php';
 include 'registerAadhar.php';
 include 'registerArmy.php';
?>



<!-- this is bootstrap carousel just for design purpose. you can remove if you want -->

<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <ol class="carousel-indicators">
    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://source.unsplash.com/1600x500/?government,security" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://source.unsplash.com/1600x500/?police,security" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://source.unsplash.com/1600x500/?information,travel" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </a>
</div>




<h1 class="text-center mt-5">Welcome</h1>

<p class="mx-5 px-5 mt-5 mb-5 pb-5"></p>





<!-- if user is logged in then show them following options -->

<?php





    //these are session variables that we had set when this user logged in successufully()
    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true)
    {

      // we will show them options to register for liscense or to diplay his trial result

      // we can write html tags inside echo

      echo '
     
    <div class="row mt-5 mb-5 pb-5">
      <div class="card mx-5" style="width: 18rem;">
          <img src="https://source.unsplash.com/1600x500/?businesscard, businesscard" class="card-img-top" alt="...">
          <div class="card-body">
      <button type="button" class="btn btn-outline-success mx-2" data-bs-toggle="modal" data-bs-target="#registerPAN">
      <p class="card-text">Register for PAN</p></button>
          </div>
       </div>

      <div class="card mx-5" style="width: 18rem;">
          <img src="https://source.unsplash.com/1600x500/?citizenship, citizenship" class="card-img-top" alt="...">
          <div class="card-body">
      <button type="button" class="btn btn-outline-success mx-2" data-bs-toggle="modal" data-bs-target="#registerCitizen">
      <p class="card-text">Register for Citizenship</p></button>
          </div>
      </div>

      <div class="card mx-5" style="width: 18rem;">
          <img src="https://source.unsplash.com/1600x500/?money, money" class="card-img-top" alt="...">
          <div class="card-body">
      <button type="button" class="btn btn-outline-success mx-2" data-bs-toggle="modal" data-bs-target="#registerModal">
      <p class="card-text">Register for Welfare</p></button>
          </div>
        </div>

     
      <div class="card mx-5" style="width: 18rem;">
          <img src="https://source.unsplash.com/1600x500/?automobile, automobile" class="card-img-top" alt="...">
          <div class="card-body">
      <button type="button" class="btn btn-outline-success mx-2" data-bs-toggle="modal" data-bs-target="#registerDMV">
      <p class="card-text">Register at Department of Motorized Vehicles</p></button>
          </div>
      </div>
      
      
   </div>


    <div class="row mt-5 mb-5 pb-5">
      <div class="card mx-5" style="width: 18rem;">
        <img src="https://source.unsplash.com/1600x500/?passport, passport" class="card-img-top" alt="...">
        <div class="card-body">
      <button type="button" class="btn btn-outline-success mx-2" data-bs-toggle="modal" data-bs-target="#registerPassport">
      <p class="card-text">Register for Passport</p></button>
        </div>
      </div>

      <div class="card mx-5" style="width: 18rem;">
          <img src="https://source.unsplash.com/1600x500/?house, house" class="card-img-top" alt="...">
          <div class="card-body">
      <button type="button" class="btn btn-outline-success mx-2" data-bs-toggle="modal" data-bs-target="#registerProperty">
      <p class="card-text">Register Property</p></button>
          </div>
      </div>


    <div class="card mx-5" style="width: 18rem;">
      <img src="https://source.unsplash.com/1600x500/?aadhar-card, aadhar" class="card-img-top" alt="...">
      <div class="card-body">
      <button type="button" class="btn btn-outline-success mx-2" data-bs-toggle="modal" data-bs-target="#registerAadhar">
      <p class="card-text">Register for Aadhar card</p></button>
      </div>
    </div>

    <div class="card mx-5" style="width: 18rem;">
          <img src="https://source.unsplash.com/1600x500/?army, army" class="card-img-top" alt="...">
          <div class="card-body">
      <button type="button" class="btn btn-outline-success mx-2" data-bs-toggle="modal" data-bs-target="#registerArmy">
      <p class="card-text">Register for the Army</p></button>
          </div>
    </div>
  </div>

    <div class="row mt-5 mb-5 pb-5">
      <div class="card mx-5" style="width: 18rem;">
        <img src="https://source.unsplash.com/1600x500/?VISA, VISA" class="card-img-top" alt="...">
      <div class="card-body">
      <button type="button" class="btn btn-outline-success mx-2" data-bs-toggle="modal" data-bs-target="#registerVISA">
      <p class="card-text">Register for VISA</p></button>
       </div>
     </div>

      <div class="card mx-5" style="width: 18rem;">
      <img src="https://source.unsplash.com/1600x500/?airplane, airplane" class="card-img-top" alt="...">
      <div class="card-body">
      <button type="button" class="btn btn-outline-success mx-2" data-bs-toggle="modal" data-bs-target="#registerModal">
      <p class="card-text">Register for Foreign Employment Status</p></button>
      </div>
    </div>
      
    <div class="card mx-5" style="width: 18rem;">
    <img src="https://source.unsplash.com/1600x500/?labor, labor" class="card-img-top" alt="...">
    <div class="card-body">
    <button type="button" class="btn btn-outline-success mx-2" data-bs-toggle="modal" data-bs-target="#registerGovWork">
    <p class="card-text">Register for Government Worker</p></button>
    </div>
  </div>
      
      <div class="card mx-5" style="width: 18rem;">
      <img src="https://source.unsplash.com/1600x500/?information, information" class="card-img-top" alt="...">
      <div class="card-body">
       <a href="displayInfo.php" style="text-decoration: none;"><p class="card-text">Display your registered information</p></a>
      </div>
      </div>
  </div>';

      



    }



?>
 




<!-- scripts -->


    <!-- js for bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

  

  
  </body>
</html>



























