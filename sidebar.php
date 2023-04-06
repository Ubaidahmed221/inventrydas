
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include('css/css.php');?>
    <title>Hello, world!</title>
  </head>
  <style>
    .sidebar{
      list-style: none;
      margin-right: 25px;
      padding: 5px;
      padding-top: 20px;
    }
    .sidebar ul {
        list-style: none;
    }
    .sidebar ul li{
      background-color: white;
      margin-top: 30px;
      padding: 10px;
      border-radius: 9px ;
    }
    .sidebar ul li:hover{
      background-color: #2e7df16e;
      cursor: pointer;
    }
    .sidebar ul li a{
      color: black;
      text-decoration: none;
    }
    .sidebar h3 a{
      text-decoration: none;
      color: #fff;
    }
    #main{
        background-color: #b5a4a4;
        width: 260px;
        /* margin-top: 0px; */
        /* height: 100vh; */
        padding: 0;
        /* position: fixed; */

    }
  </style>
  <body>
  <!-- <nav class="navbar navbar-light bg-primary d-flex leth">
  <div class="container-fluid">
    <a class="navbar-brand  text-white fs-2 text-uppercase" href="#" >Inventry</a>
  </div> -->
  </nav>
  <div class="" id="main" >
  <nav class="sidebar">
    <h3 class="text-white ms-4"><a href="dashboard.php" style="margin-left: 9px;">Dashboard</a> </h3>
    <ul>
     
      <li><a href="listcategory.php">List Category </a></li>
      <li><a href="addcate.php">Add Category</a></li>
      <li><a href="listproduct.php">List Product</a></li>
      <li><a href="addproduct.php">Add Product</a></li>
      <li><a href="adddiscount.php">Add Discount</a></li>
      <li><a href="listdiscount.php">List Discount</a></li>
      <li><a href="logout.php">Log Out</a></li>
    </ul>
  </nav>

  </div>








































<?php include('js/js.php') ?>

  </body>
</html>