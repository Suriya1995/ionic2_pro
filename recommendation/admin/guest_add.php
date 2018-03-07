<?php
              require('connect_DB.php');
              header('Access-Control-Allow-Origin: *');

              if($_SERVER[REQUEST_METHOD]=="POST") 
              {
                      
                      $postdata = file_get_contents("php://input");
                      $request = json_decode($postdata);
                      $firstname=$request->firstname; 
                      $lastname=$request->lastname;
                      $gender=$request->gender;
                      $age=$request->age;
                      



                      $sql = "INSERT INTO member(firstname,lastname,gender,age,status)
                         VALUES ('$firstname','$lastname','$gender','$age','G');";

                      mysqli_query($link,$sql);

                        $sql2 = "SELECT * FROM member 
                        ORDER BY ID DESC LIMIT 1";
                      

                        $query = mysqli_query($link,$sql2);
                        $result=mysqli_fetch_array($query);
                        echo json_encode($result);

                      //echo json_encode($postdata);  



                      $link->close();

              }else{
                  echo("user_error");
              }
              
            ?>