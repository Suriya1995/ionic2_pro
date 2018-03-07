<?php
            
            require('connect_DB.php');
            header('Access-Control-Allow-Origin: *');
            if($_SERVER[REQUEST_METHOD]=="POST")
            {
                $postdata = file_get_contents("php://input");
                $request = json_decode($postdata);
                $firstname = $request->firstname;
                $lastname = $request->lastname;
                $username = $request->username;
                $password = $request->password;
                $gender = $request->gender;
                $age = $request->age;

                

                $sql = "INSERT INTO member(firstname,lastname,username,password,gender,age,status)
                VALUES ('$firstname','$lastname','$username','$password','$gender','$age','U');";

                
                
               mysqli_query($link,$sql);
                echo json_encode($postdata);  
              
                
                $link->close();
                
                
            
        }
        else{
            echo("error");
        }
       


            ?>