<?php

 require("connection.php");

 function image_upload($img){
    $tmo_loc  = $img['tmp_name'];
    $new_name = random_int(11111,99999). $img['name'];

    $new_loc = UPLOAD_SRC.$new_name;

    move_uploaded_file($tmp_loc,$new_loc);
 }


if(isset($_POST['addproduct']))
{
    foreach($_POST as $key => $value){
        $_POST[$key] = mysqli_real_ascape_string($con,$value);
    }

    image_upload($_FILES['image']);
}

?>