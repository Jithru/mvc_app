<?php

require '../Models/models.php';


if (isset($_POST['Search'])){
  // echo "hi";

    $name= mysqli_real_escape_string($conn,$_POST['ValueSearch']);
    // echo $searh;

    $sql=" SELECT * FROM users_mvc WHERE Name LIKE '%$name%'";
    $result = mysqli_query($conn, $sql);
    

    require '../Views/outputView.php';

}
?>