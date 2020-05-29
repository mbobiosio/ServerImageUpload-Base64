<?php 
include "config.php";


if($_SERVER['REQUEST_METHOD'] == 'POST')
{
 
 $title = $_POST['title'];
 $image = $_POST['image'];
 
 $upload_path = "http://1.1.1.1/images/$title.png";
 $sql = "insert into images (image_path,title) values ('$upload_path','$title')";

 if(mysqli_query($conn,$sql)){
       file_put_contents("../images/$title.png",base64_decode($image));
       echo json_encode(array('response'=>"image uploaded"));
 }
 else{
         echo json_encode(array('response'=>"image uploaded"));

 }
  mysqli_close($conn);
 
}

?> 