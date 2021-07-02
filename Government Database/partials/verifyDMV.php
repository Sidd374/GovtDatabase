<?php

// this conditional code is checking if this page(verifyLogin.php) has been access via POST method
// POST method means that this page was access by submitting a valid form
if($_SERVER['REQUEST_METHOD'] =="POST")
{
    // include database connection
    include '_db_connect.php';

    // get the fields that user entered in the form. the name must be same as the 'name' field in input html tag form
    
    $licenseNo= $_POST['licenseNo'];
    $email= $_POST['registerEmail'];
    $bloodgrp= $_POST['blood'];
    $type=  $_POST['type'];
    $firstame= $_POST['firstName'];
    $lastName= $_POST['lastName'];
  



    // select all such rows from table users where email is that entered by user
    $sql = "SELECT * FROM dmv WHERE licenseNo = '$licenseNo'";
    
    // execute sql query
    $result = mysqli_query($conn, $sql);
    

    //get how many number of such rows are present.
    // technically there should not be any such row. if there is a row already means that user already exists and is trying to register again

 


    if(mysqli_num_rows($result) > 0)
    {
        // user does exist should throw an error/warning
        $showError = "licenseNoAlreadyExists";
    }
    else
    {
        
            // insert user details into database
        $sql = "INSERT INTO `dmv` (`licenseNo`, `email`, `firstName`, `lastName`, `bloodgrp`,`type`) VALUES ('$licenseNo','$email','$firstName','$lastName','$bloodgrp','$type')";
        $esult =  mysqli_query($conn, $sql);
       
                // registration was successful
            header("Location: /dbmsProject/index.php?registersuccess=true");
            exit();
               
        
       
    }

    header("Location: /dbmsProject/index.php?registersuccess=false&error=". $showError ."");

    exit();
    


}
?>