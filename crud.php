<?php

 require("connection.php");

 function image_upload($img){
    $tmo_loc  = $img['tmp_name'];
    $new_name = random_int(11111,99999). $img['name'];

    $new_loc = UPLOAD_SRC.$new_name;

    if(!move_uploaded_file($tmp_loc,$new_loc)){
        header("location: index.php?alert=img=upload");
        exit;
    }
    else{
        return $new_name;
    }
 }


if(isset($_POST['addproduct']))
{
    foreach($_POST as $key => $value){
        $_POST[$key] = mysqli_real_ascape_string($con,$value);
    }

    $imgpath = image_upload($_FILES['image']);
    $query="INSERT INTO `products`(`name`, `price`, `description`, `image`) 
            VALUES ('$_POST[name]','$_POST[price]','$_POST[desc]','$imgpath')";

    if(mysqli_query($con,$query)){
        header("location: index.php?success=added");
    }
    else{
        header("location: index.php?alert=add_failed");
    }
    








}

?>