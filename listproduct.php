<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php  include 'css/css.php'; include 'conn.php'  ?>
</head>
<body>
<?php  include 'header.php' ?>
    <div class="container-fluid">
        <div class="row ">
            <div class="col-md-3">
                <?php include 'dashboard.php'; ?>
            </div>
            <div class="col-md-8">
                <h2 class="text-center mt-3">PRODUCT LIST</h2>
                <table class="table mt-5">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Product Name</th>
                            <th scope="col">Prod Desc</th>
                            <th scope="col">Product Image</th>
                            <th scope="col">Product Price</th>
                            <th scope="col">Prod Category</th>
                            <th scope="col">Product Inventry</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT * FROM products inner join ";
                        $resul =  mysqli_query($con,$sql);
                        if(mysqli_num_rows($resul)){
                            while($row = mysqli_fetch_assoc($resul)){
                                ?>
                                <tr>
                                    <td scope="col"> <?php echo $row['id']; ?></td>
                                    <td> <?php echo $row['name']; ?></td>
                                    <td> <?php echo $row['p_desc']; ?></td>
                                    <td> <?php echo $row['']; ?></td>
                                </tr>








                                <?php }}?>
                    </tbody>

                </table>
            </div>
        </div>

    </div>
  
    


    <?php  include 'js/js.php'; ?>
</body>
</html>