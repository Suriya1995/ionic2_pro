<?php
              require('connect_DB.php');
              header('Access-Control-Allow-Origin: *');

              if ($_SERVER[REQUEST_METHOD] === "POST") 
              {
                      
                      $postdata = file_get_contents("php://input");
                      $request = json_decode($postdata);
                      $username=$request->username; 
                      $password=$request->password;

                      $sql = "SELECT * FROM member 
                     WHERE username = '$username' AND password = '$password'; ";

                      $query = mysqli_query($link,$sql);
                      $result=mysqli_fetch_array($query);
                      echo json_encode($result);


                        $link->close();
              }else{
                  echo("usererror");
              }
              
            ?>