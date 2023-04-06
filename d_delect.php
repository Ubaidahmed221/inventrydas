<?php
    include 'conn.php';
    $id1 = $_GET['id'];

   
        $sql1 = "DELETE FROM discount WHERE id = {$id1}";
     $res1 = mysqli_query($con,$sql1) or die('quary unsuccessfully');
  
        header('location: listdiscount.php');

     
    

    ?>