
<?php
              require('connect_DB.php');
              header('Access-Control-Allow-Origin: *');

              if ($_SERVER[REQUEST_METHOD] == "POST"  ) 
              {
                      
                      $postdata = file_get_contents("php://input");
                      $request = json_decode($postdata);
                      $place =$request->place;
                      $place_array = array();
                      $i = 0;

                      foreach($place as $row)
                      {
                        $place_i = $place[$i];

                        $sql = "SELECT place_Name ,place_img , place_desc , place_url , place_lat , place_long  FROM `place` WHERE place_Name = '$place_i';";
                        
                       
                        $query = mysqli_query($link,$sql);
                        $resultArray = array();
                        while($result = mysqli_fetch_array($query,MYSQLI_ASSOC))
                         {
                           array_push($resultArray,$result);
                         }
                         $place_array[$i]  = $resultArray;

                          $i++;

                      }


                      echo json_encode($place_array);
              }else{
                  echo("usererror");
              }
              
            ?>