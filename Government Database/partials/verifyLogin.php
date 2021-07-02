<?php

    // include the database connection partial
    include '_db_connect.php';

    // this conditional code is checking if this page(verifyLogin.php) has been access via POST method
    // POST method means that this page was access by submitting a valid form
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        // the email that user entered in the form 
        $email = $_POST['loginEmail'];
        
        // the email that user entered in the form 
        $pass = $_POST['loginPassword'];

        

        // select all the rows from table `users` where column email is equal to the user entered email
        $sql = "SELECT * FROM `users` WHERE email= '$email'";

        // execute the sql query
        $result = mysqli_query($conn, $sql);

        // if execution was successful(if such a row was found)
        if($result)
        {

            //the below line returns an array of all columns of the selected row
            $row = mysqli_fetch_assoc($result);
            
            // the password that was hashed earlier while registration was done, is de-hashed and checked if it matches with user enetered password
            if(password_verify($pass, $row['password']))
            {

                

                // user session starts(logged in)
                session_start();

                // session variables
                $_SESSION['loggedin'] = true;
                $_SESSION['useremail'] = $email;
                

                  header("Location: /dbmsProject/index.php?loginsuccess=true");    
                    exit();
            }
            else 
            {

                echo 'unable to login';
                header("Location: /dbmsProject/index.php?loginsuccess=false&here");
                exit();
            }


        }
        header("Location: /dbmsProject/index.php?loginsuccess=false");
        exit();
        

    }

    



?>