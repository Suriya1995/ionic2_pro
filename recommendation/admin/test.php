<?php
              require('connect_DB.php');
              header('Access-Control-Allow-Origin: *');

                      
                      
                      $username= 'admin'; 
                      $password= '1234';

                      $sql = "SELECT ID FROM member 
                      WHERE username = $username AND password= $password";

                      $query = mysqli_query($link,$sql);
                      $result=mysqli_fetch_array($query);
                      echo json_encode($link);


                        $link->close();
              
              
?>