<?php
    include 'conn.php';
    $id1 = $_GET['id'];

   
        $sql1 = "DELETE FROM `product_cate` WHERE id = {$id1}";
     $res1 = mysqli_query($con,$sql1) or die('quary unsuccessfully');
  
        header('location: listcategory.php');

     
    

    ?>