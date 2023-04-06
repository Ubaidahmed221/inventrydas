<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include 'css/css.php'; include 'conn.php'; 
    $id = $_GET['id'];
    $sql2 = "SELECT * FROM product_cate where id =  {$id}";
     $res2 =   mysqli_query($con,$sql2);
     if(mysqli_num_rows($res2)){
        $row1 = mysqli_fetch_assoc($res2);
            $d_nam = $row1['cname'];
            $d_des = $row1['cdesc'];
        }else{
            header('location: listdiscount.php');
        }
     
    
    
    ?>
</head>
<body>
<?php include 'header.php'; ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 p-0">
                <?php include 'sidebar.php'; ?>
            </div>
            <div class="col-md-8">
                <h2 class="text-center mt-5">Edit Category</h2>
                <form method="POST" action="">
  <div class="mb-3">
    <label for="" class="form-label">Categoary Name</label>
    <input type="text" class="form-control" name="d_name" value="<?php echo $d_nam; ?>" >

  </div>
  <div class="mb-3">
    <label for="" class="form-label">Category Descrition</label>
    <textarea name="d_des" class="form-control"   cols="30" rows=""><?php echo $d_des; ?></textarea>
 
 
  </div>

  <button type="submit" name="Update" class="btn btn-primary">Update</button>
</form>        
     </div>
        </div>
    </div>

    <?php
    if(isset($_POST['Update'])){
        $d_name = $_POST['d_name'];
        $d_desc = $_POST['d_des'];
        

        $sql = "UPDATE `product_cate` SET `cname`='$d_name',`cdesc`='$d_desc'  WHERE id = $id";
       $result =  mysqli_query($con,$sql);
       
   
        header('location: listcategory.php');
       
    }



?>
    






    <?php include 'js/js.php'; ?>
</body>
</html>