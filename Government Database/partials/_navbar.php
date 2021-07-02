<nav class="navbar navbar-expand-lg navbar-dark bg-dark py-3">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">put logo</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item  px-3">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item  px-3">
          <a class="nav-link" href="#">Health</a>
        </li>
        <li class="nav-item  px-3">
          <a class="nav-link" href="#">Finance</a>
        </li>
        <li class="nav-item  px-3">
          <a class="nav-link" href="#">covid-19 resources</a>
        </li>
        <li class="nav-item dropdown  px-3">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Travel
          </a>
          <ul class="dropdown-menu  px-3" aria-labelledby="navbarDropdown">
           
            <li><a class="dropdown-item" href="#">Domestic</a></li>
            
            <li><a class="dropdown-item" href="#">International</a></li>
          </ul>
        </li>
       
      </ul>

    <?php 

    session_start();


    // if user is logged in , then display his email and logout button
    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true)
    {

      echo '<div class="text-light">Welcome '. $_SESSION['useremail'] .'</div>';
      echo '
      <a  href="/dbmsProject/partials/logout.php" role="button" class="btn btn-outline-success mx-3" >Logout</a>';

    }
    else
    {

      // if user is not logged in then diplay register and login buttons
      echo '
      <button type="button" class="btn btn-outline-success mx-2" data-bs-toggle="modal" data-bs-target="#registerModal">
           Register
       </button>
    
    
       <button type="button" class="btn btn-success mx-2 " data-bs-toggle="modal" data-bs-target="#loginModal">
          Login
       </button>';

    }
      
    ?>



    <!-- include Modals for login and signup. Modals are popups -->
    <?php

    include 'loginModal.php';
    include 'registerModal.php';
    


    ?>







      
   
    </div>
  </div>
</nav>


<!-- the code below uses GET to get any query from url and display alerts accordingly -->
<?php
if((isset($_GET['registersuccess']) && $_GET['registersuccess'] == "false") || (isset($_GET['loginsuccess']) && $_GET['loginsuccess'] == "false"))
      {
        echo '<div class="alert alert-warning alert-dismissible fade show my-0" role="alert">
        <strong>An error Occured</strong> Please try again
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
      }
      else if(isset($_GET['loginsuccess']) && $_GET['loginsuccess'] == "true")
      {
        echo '<div class="alert alert-success alert-dismissible fade show my-0" role="alert">
        <strong>Logged in</strong> <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
      }
      else if(isset($_GET['registersuccess']) && $_GET['registersuccess'] == "true")
      {
        echo '<div class="alert alert-success alert-dismissible fade show my-0" role="alert">
        <strong>Registered Successfully </strong><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
      }
?>