
<html>
    <title></title>
    <link rel="stylesheet" href="css/imageUpload.css">
    <head>
        <body>
<div id="content">

</div>

<?php

$db = mysqli_connect("localhost" ,"root" ,"" ,"carrental");
$sql = "SELECT * FROM carlistimages";
$result = mysqli_query($db , $sql);
 while ($row = mysqli_fetch_array($result)){
     echo"<div id='img_div'>";
     echo"<img src='images/" .$row['image'] . "'>";
     echo "<p>" .$row['text']."</p>";
     echo"</div>";
 }

 ?>

        </body>
    </head>
</html>