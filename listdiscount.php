<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php  include 'css/css.php'; include 'conn.php';  ?>
</head>
<body>
<?php  include 'header.php' ?>

    <div class="container-fluid ">
        <div class="row">
            <div class="col-md-3 p-0">
                <?php include 'sidebar.php'; ?>
            </div>
            <div class="col-md-8 mt-4">
                <h2 class="text-center">LIST DISCOUNT</h2>
                <table class="table mt-5 ">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Discount Name</th>
                            <th scope="col">Descount Desc</th>
                            <th scope="col">Discount Percentage</th>
                            <th scope="col">Discount Status</th>
                            <th scope="col">Action</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $sql = "SELECT * FROM discount";
                     $result =    mysqli_query($con,$sql) or die('quary unsusseccfully');
                     if(mysqli_num_rows($result)){
                        while($row = mysqli_fetch_assoc($result)){
                        ?>
                        <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['d_desc']; ?></td>
                        <td><?php echo $row['desc_parcent']; ?></td>
                        <td><?php echo $row['status']; ?></td>
                        <td>
                           
                         <a href='d_edit.php?id=<?php echo $row['id']; ?>' class='btn btn-primary'>Edit</a>
                      <a href='d_delect.php?id=<?php echo $row['id']; ?>'  class='btn btn-dark'>Delect</a>"
  
                        </td>
                        </tr>



                   <?php  }}?>
                    </tbody>

                </table>
            </div>
        </div>

    </div>
    
  
    


    <?php  include 'js/js.php'; ?>
</body>
</html>