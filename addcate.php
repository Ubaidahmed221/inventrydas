<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include 'css/css.php'; include 'conn.php';  ?>
</head>
<body>
<?php include 'header.php'; ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 p-0">
                <?php include 'sidebar.php'; ?>
            </div>
            <div class="col-md-8">
                <h2 class="text-center mt-5">Add Categoary</h2>
                <form method="POST" action="">
  <div class="mb-3">
    <label for="" class="form-label">Category Name</label>
    <input type="text" class="form-control" name="d_name" >

  </div>
  <div class="mb-3">
    <label for="" class="form-label">Category Descrition</label>
    <textarea name="d_des" class="form-control"   cols="30" rows=""></textarea>
  </div>
 

  <button type="submit" name="insart" class="btn btn-primary">Submit</button>
</form>        
     </div>
        </div>
    </div>

    <?php
    if(isset($_POST['insart'])){
        $d_name = $_POST['d_name'];
        $d_desc = $_POST['d_des'];
      

        $sql = "INSERT INTO `product_cate`(`cname`, `cdesc`) VALUES ('$d_name','$d_desc')";
       $result =  mysqli_query($con,$sql);
       
   
        header('location: listdiscount.php');
       
    }



?>
    






    <?php include 'js/js.php'; ?>
</body>
</html>