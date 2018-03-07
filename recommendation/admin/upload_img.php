<?php
            require("connect_DB.php");
            header('Access-Control-Allow-Origin: *');
            if($_SERVER[REQUEST_METHOD]=="POST")
            {
                $postdata = file_get_contents("php://input");
                $request = json_decode($postdata);
                $postData = $request->image_base64;
                //$postData = ['image_base64'] = $request->image_base64;
                //$postData = ['ImageName'] = 'imagename';
                if(!empty($postData['image_base64'])){
                    $img =str_replace('data:image/jpg;base64,','',$postData['image_base64']);
                    $img = str_replace('','+',$img);
                    $data = base64_decode(preg_replace('#^data:image/\w+;base64,#i','',$img));
                    $target_file = $_SERVER['DOCUMENT_ROOT'].'/var/www/html/service/recommendation/web/xmaterial/page/images'.$postData['ImageName'].'.jpg';
                
                    if(file_get_contents($target_file,$data)){
                        echo json_encode(array('msg'=>'success'));
                    }else{
                        echo json_encode(array('msg'=>'faill'));
                    }
                
                }

        
    }else{
        echo("null");
    }
    
    

?>