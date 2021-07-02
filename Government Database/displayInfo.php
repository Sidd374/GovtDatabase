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
?>


<div class="mx-5 my-5" style="width: 600px;">
<form action="" method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp">
 
  </div>
 
  <button type="submit" class="btn btn-primary">Go!</button>
</form>

</div>

<?php


    include 'partials/_db_connect.php';
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {

        $email = $_POST['email'];


        $sql = "SELECT *   
        FROM users  
        INNER JOIN citizen ON users.email = citizen.email
        INNER JOIN passport ON users.email = passport.email
        INNER JOIN aadhar ON users.email = aadhar.email
        INNER JOIN army ON users.email = army.email
        INNER JOIN visa ON users.email = visa.email
        INNER JOIN pan ON users.email = pan.email
        INNER JOIN govwork ON users.email = govwork.email
        INNER JOIN dmv ON users.email = dmv.email
        INNER JOIN property ON users.email = property.email
        AND users.email = '$email'";

        $result = mysqli_query($conn, $sql);

        if($result)
        {

            $row = mysqli_fetch_assoc($result);
            echo '
            
            <div class="px-5">
            <h3>These are your details</h3>
            <h4> Name : '. $row['firstName'] .' '. $row['lastName'] .'</h4>
            <h4> Citizenship Number : '. $row['citizenshipNo'] .' </h4>
            <h4> Address : '. $row['address'] .' </h4>
            <h4> Mobile Number : '. $row['mobNo'] .' </h4>
            <h4> VISA Number : '. $row['visanumber'] .' </h4>
            <h4> PAN Number : '. $row['panNo'] .' </h4>
            <h4> Passport Number : '. $row['passportNo'] .' </h4>
            <h4> Government Employee Number : '. $row['employeeID'] .' </h4>
            <h4> Army Number : '. $row['armyID'] .' </h4>
            <h4> Army Branch : '. $row['branch'] .' </h4>
            <h4> Property No : '. $row['propertyID'] .' </h4>
            <h4> Property Area : '. $row['area'] .' </h4>
            <h4> Aadhar Card Number : '. $row['aadharNo'] .' </h4>


            </div>

            
            ';



        }
        else
        {
            echo '<h3 class="mx-5">No such user exists</h3>';
        }


    }


?>




<!-- scripts -->


    <!-- js for bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

  

  
  </body>
</html>



























