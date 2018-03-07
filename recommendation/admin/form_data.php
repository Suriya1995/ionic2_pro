<?php
/*
 * form_data.php
 * Web Service for Personality , Place , Type Data
 * @author Navamin Boonmee
 * @Last Date 2017-10-11
*/

require('connect_DB.php');
header('Access-Control-Allow-Origin: *');

if ($_SERVER[REQUEST_METHOD] == "POST"){
  
  if($_POST['fk_user_id']!=""){ //value from Web application(POST Form)
    $user_id = $_POST["fk_user_id"];
    //echo "web";
  }else{  //value from Mobile application (JSON)
    $postdata = file_get_contents("php://input");
    $request = json_decode($postdata);
    $user_id=$request->user_id;
    //echo "json";
  }

  $sql = "SELECT * FROM form WHERE fk_user_id ='$user_id';";
  $query = mysqli_query($link,$sql);
  $result = mysqli_fetch_array($query);

  //-->count num of color

  //color 
  $red=0;
  $blue=0;
  $yellow=0;
  $green=0;

  //number of quiz
  $num_quiz=1;

  //count num of color
  foreach($result as $row){

    $quiz = "quiz". $num_quiz;//set quiz column name (quiz1,....)
                 
    //check color
    if($result[$quiz]=="red"){
      $red++;
    }else if($result[$quiz]=="blue"){
      $blue++;
    }else if($result[$quiz]=="yellow"){
      $yellow++;
    }else if($result[$quiz]=="green"){
      $green++;
    }

    $num_quiz++;
  }//end foreach result
  //-->end count num of color

  //-->find max num of color
               
  //set num of color in array for check max        
  $arr[0] = $red;
  $arr[1] = $blue;
  $arr[2] = $yellow;
  $arr[3] = $green;

  $max = 0;

  //loop check max num of color
  for($num = 0; $num < count($arr) ; $num++){
    if($max < $arr[$num]){                  
      $max = $arr[$num];
    }
  }
  //-->end find max num of color

  //-->check max color
  $color = null;
  $color1 = null;
  $color2 = null;

  //check max num = 0
  if($max == 0){
    $color = "no data";

  }else{
    //check red -> blue -> yellow -> green

    //max = red
    if($max == $red){
      $color = "red";

      if($max == $blue){  //max = red , blue
        $color1 = "blue";

        if($max == $yellow){  //max = red , blue , yellow
          $color2 = "yellow";

        }else if($max == $green){ //max = red , blue , green
          $color2 = "green";
        }

      }else if($max == $yellow){  //max = red , yellow
        $color1 = "yellow";

        if($max == $green){ //max = red , yellow , green
          $color2 = "green";
        }

      }else if($max == $green){ //max = red , green
        $color1 = "green";
      }

    }//end max = red

    //max = blue
    else if($max == $blue){
      $color = "blue";

      if($max == $yellow){  //max = blue , yellow
        $color1 = "yellow";

        if($max == $green){ //max = blue , yellow , green
          $color2 = "green";
        }

      }else if($max == $green){ //max = blue , green
        $color1 = "green";
      }

    }//end max = blue

    //max = yellow
    else if($max == $yellow){
      $color = "yellow";

      if($max == $green){ //max = yellow , green
        $color1 = "green";
      }

    }//end max = yellow

    //max = green
    else if($max == $green){
      $color = "green";
    }//end max =green

  }//end else
  //-->end check max color

  //-->get personality by color

  //array of personality
  $personality_arr = array();

  //max color = 1 
  $sql_result_color = "SELECT * FROM predict_result WHERE color = '" .$color ."';";
  $query = mysqli_query($link,$sql_result_color);
  $result = mysqli_fetch_array($query);

  $num_result_text = 1;
  $num_of_personality_array = 0;

  foreach ($result as $row) {
    $text = "result_text".$num_result_text;

    if($result[$text]!=NULL){
      $personality_arr[$num_of_personality_array] = $result[$text];
      $num_of_personality_array++;
    }          
    $num_result_text++;
  }
  //end max color = 1 

  //max color = 2
  if($color1 != NULL){

    $sql_result_color1 = "SELECT * FROM predict_result WHERE color = '" .$color1 ."';";
    $query = mysqli_query($link,$sql_result_color1);
    $result = mysqli_fetch_array($query);

    $num_result_text1 = 1;

    foreach ($result as $row) {
      $text = "result_text".$num_result_text1;

      if($result[$text]!=NULL){
        $personality_arr[$num_of_personality_array] = $result[$text];
        $num_of_personality_array++;
        }                          
      $num_result_text1++;
    }
  //end max color = 2

    //max color = 3
    if($color2 != NULL){

    $sql_result_color2 = "SELECT * FROM predict_result WHERE color = '" .$color2 ."';";
    $query = mysqli_query($link,$sql_result_color2);
    $result = mysqli_fetch_array($query);

    $num_result_text2 =1;

      foreach ($result as $row) {
        $text = "result_text".$num_result_text2;
        if($result[$text]!=NULL){

          $personality_arr[$num_of_personality_array] = $result[$text];

          $num_of_personality_array++;
        }                          

        $num_result_text2++;
      }

    }//end else max color = 3


  }//end else max color = 2
  //-->end get personality by color

  //-->get place by personality

  //array of place
  $place_personality_arr = array();

  $num_place_arr = 0;
  $num_personal = 0;

  foreach ($personality_arr as $row) {

    $sql_personal_place = "SELECT * FROM place_personality WHERE person_Name = '" .$personality_arr[$num_personal] ."';";
    $query = mysqli_query($link,$sql_personal_place);
    $resultArray = array();
    while($result = mysqli_fetch_array($query,MYSQLI_ASSOC))
    {
      array_push($resultArray,$result);
    }

    $num_row = 0;

    foreach ($resultArray as $row2) {//insert place in array 

      if($resultArray[$num_row]['place_Name'] != NULL){

        if($num_place_arr==0){

          $place_personality_arr[$num_place_arr] = $resultArray[$num_row]['place_Name'];
          $num_place_arr++;

        }else{//check value place
          $check = "false";

          for($i = 0;$i<count($place_personality_arr);$i++){
            if($place_personality_arr[$i]==$resultArray[$num_row]['place_Name']){
              $check = "true";
            }
          }//end for 

          if($check != "true"){
            $place_personality_arr[$num_place_arr] = $resultArray[$num_row]['place_Name'];
            $num_place_arr++;
          }

        }//end else check value place

      }//end resultArray = NULL

      $num_row++;

    }//end foreach resultArray

    $num_personal++;

  }//end foreach personality_arr
  //-->end get place by personality

  //-->get type by place

  //array of type
  $place_type_arr = array();

  $num_place =0;
  $num_type_arr = 0;

  foreach ($place_personality_arr as $row) {

    $sql_place_type = "SELECT * FROM place_type WHERE fk_place_Name = '" .$place_personality_arr[$num_place] ."';";               
    $query = mysqli_query($link,$sql_place_type);
    $resultArray = array();
    while($result = mysqli_fetch_array($query,MYSQLI_ASSOC))
    {
      array_push($resultArray,$result);
    }

    $num_row = 0;

    foreach ($resultArray as $row2) {

      if($resultArray[$num_row]['placetype_Name'] != NULL){

        if($num_type_arr==0){

          $place_type_arr[$num_type_arr] = $resultArray[$num_row]['placetype_Name'];
          $num_type_arr++;

        }else{//check value type

          $check = "false";

          for($i = 0;$i<count($place_type_arr);$i++){

            if($place_type_arr[$i]==$resultArray[$num_row]['placetype_Name']){
              $check = "true";
            }

          }//end for

          if($check != "true"){
            $place_type_arr[$num_type_arr] = $resultArray[$num_row]['placetype_Name'];
            $num_type_arr++;
          }

        }//end else check value type

      }//end resultArray = NULL

      $num_row++;
    }//end foreach resultArray

    $num_place++;
  }//end foreach place_personality_arr
  //-->end get type by place

  //--> set json

  $json_out->personality = $personality_arr; //array of personality
  $json_out->place = $place_personality_arr; //array of place
  $json_out->type = $place_type_arr; //array of type

  //set data to json
  $myJSON = json_encode($json_out);
  echo $myJSON;


  $link->close();

}else{
  echo("No post value");
}
              
?>