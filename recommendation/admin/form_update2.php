<?php
            
            require('connect_DB.php');
            header('Access-Control-Allow-Origin: *');
           if($_SERVER[REQUEST_METHOD]=="POST")
            {
                $postdata = file_get_contents("php://input");
                $request = json_decode($postdata);

                $data2 = $request->data2;
                $groups = $request->groups;
                $user_id = $request->fk;
                

                //$sql = "INSERT INTO form(fk_user_id, $groups) VALUES ($user_id,'$confident');";

                $sql = "UPDATE form set $groups = '$data2' WHERE fk_user_id = '$user_id' ;"; 
            
                mysqli_query($link,$sql);
                echo json_encode($postdata);  
              
                
                $link->close();
                
                
          
       }
        else{
            echo("error");
        }
       


            ?>