<?php

    $msg = "";
   
if(isset($_POST['upload'])){

    $target = "images/".basename($_FILES['image']['name']);
    $db = mysqli_connect("localhost" ,"root","","carrental");

$image = $_FILES['image'] ['name'] ;
$text = $_POST['text'];
$Passengers = $_POST['Passengers'];
$fuel = $_POST['fuel'];
$price = $_POST['price'];

$sql = "INSERT INTO carlistimages (image,text,sheets,fuel , price) VALUES('$image' , '$text' ,'$Passengers','$fuel' , '$price')";
mysqli_query($db ,$sql);

if (move_uploaded_file($_FILES['image']['name'] , $target)){

    $msg = "IMAGE UPLOADED SUCCESSFULLY";


}else {
    $msg= "ERROR";
}

    }

    ?>