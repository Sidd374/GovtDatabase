<?php

// this conditional code is checking if this page(verifyLogin.php) has been access via POST method
// POST method means that this page was access by submitting a valid form
if($_SERVER['REQUEST_METHOD'] =="POST")
{
    // include database connection
    include '_db_connect.php';

    // get the fields that user entered in the form. the name must be same as the 'name' field in input html tag form
    
    $panNo= $_POST['panNo'];
    $email= $_POST['registerEmail'];
    $fatherName= $_POST['fatherName'];

    $firstName= $_POST['firstName'];
    $lastName= $_POST['lastName'];
  



    // select all such rows from table users where email is that entered by user
    $sql = "SELECT * FROM pan WHERE panNo = '$panNo'";
    
    // execute sql query
    $result = mysqli_query($conn, $sql);
    

    //get how many number of such rows are present.
    // technically there should not be any such row. if there is a row already means that user already exists and is trying to register again

 


    if(mysqli_num_rows($result) > 0)
    {
        // user does exist should throw an error/warning
        $showError = "PANNoAlreadyExists";
    }
    else
    {
        
            // insert user details into database
        $sql = "INSERT INTO `pan` (`panNo`, `email`, `firstName`, `lastName`, `fatherName`) VALUES ('$panNo','$email','$firstName','$lastName','$fatherName')";
        $result =  mysqli_query($conn, $sql);
       
                // registration was successful
            header("Location: /dbmsProject/index.php?registersuccess=true");
            exit();
               
        
       
    }

    header("Location: /dbmsProject/index.php?registersuccess=false&error=". $showError ."");

    exit();
    


}
?>