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
                <h2 class="text-center mt-5">Add Discount</h2>
                <form method="POST" action="">
  <div class="mb-3">
    <label for="" class="form-label">Discount Name</label>
    <input type="text" class="form-control" name="d_name" >

  </div>
  <div class="mb-3">
    <label for="" class="form-label">Discount Descrition</label>
    <textarea name="d_des" class="form-control"   cols="30" rows=""></textarea>
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Discount Parcentage</label>
    <input type="number" name="d_parce" class="form-control"  >
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Discount Status</label>
    <input type="number" name="d_status" class="form-control"  >
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
        $d_percen = $_POST['d_parce'];
        $d_status = $_POST['d_status'];

        $sql = "INSERT INTO discount(name,d_desc, desc_parcent, status) VALUES ('$d_name','$d_desc',$d_percen,$d_status)";
       $result =  mysqli_query($con,$sql);
       
   
        header('location: listdiscount.php');
       
    }



?>
    






    <?php include 'js/js.php'; ?>
</body>
</html>