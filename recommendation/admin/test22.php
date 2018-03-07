<?php
            
            require('connect_DB.php');
            header('Access-Control-Allow-Origin: *');
           
                $postdata = file_get_contents("php://input");
                $request = json_decode($postdata);

                $data2 = 'fffff';
                $groups = 'quiz2';
                $user_id = 1;
                

                $sql = "INSERT INTO form(fk_user_id, $groups) VALUES ($user_id,'$confident');";

                //$sql = "UPDATE form set $groups = '$data2' WHERE fk_user_id = '$user_id' ;"; 
            
                
               if(mysqli_query($link,$sql)){
                   $last_id = mysqli_last_id($link);
        
                    echo json_encode($last_id);
               }
                
              
                
                $link->close();
                
                
          
    
?>