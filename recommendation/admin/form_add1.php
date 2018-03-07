<?php
            
            require('connect_DB.php');
            header('Access-Control-Allow-Origin: *');
           if($_SERVER[REQUEST_METHOD]=="POST")
            {
                $postdata = file_get_contents("php://input");
                $request = json_decode($postdata);

                $confident = $request->confident;
                $groups = $request->groups;
                $user_id = $request->fk;
                

                $sql = "INSERT INTO form(fk_user_id, $groups) VALUES ($user_id,'$confident');";

                
               mysqli_query($link,$sql);
                echo json_encode($postdata);  
              
                
                $link->close();
                
                
          
       }
        else{
            echo("error");
        }
       


            ?>