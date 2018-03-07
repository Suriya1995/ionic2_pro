<?php

require('connect_DB.php');

  //set data
  $table = 'member';
  //$redir = 'editnews';
  //$folder = 'news_upload';

  $id = $_POST["user_id"];
  $img = $_POST["files"];

  //set directory
  //$dirSave =  '../web/xmaterial/page/images/'.$id;
  

  //check dircetory
//   if (!file_exists($dirSave)) {
//     mkdir($dirSave,0777,true);
//   }

  //set filename
  $file_name = "M-".time().".jpg";

  //set file upload target
  $target_dir = '../web/xmaterial/page/images/'.$id;

  //insert file data
  $sql = "INSERT INTO `".$table."`(`profile_pic`) VALUES('$file_name',CURRENT_TIMESTAMP,'$id')";

  //put file to server
  if(file_put_contents($target_dir, base64_decode($img))){
   echo json_encode($img);
  

    if(mysqli_query($link,$sql)){
      echo json_encode($sql);
      
    }
    
  }else{
    echo('5555');
  }


?>
