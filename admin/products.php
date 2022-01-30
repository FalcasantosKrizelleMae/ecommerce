<?php
 $page ='Products'; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Admin | Products</title>
    
     <link href="../css/all.css" rel="stylesheet">

     <!-- Bootstrap core CSS -->
     <link href="../bootstrap3/css/bootstrap.min.css" rel="stylesheet">
     <link href="./css/main.css" rel="stylesheet">
</head>
<body>
     <?php include "./header.php"; ?>

     <div class="main container">

          
          <div class="panel panel-default">
               <div class="panel-heading">
                    
                    <h1 class="panel-title lead">Products page</h1>
               </div>

               <div class="panel-body">

               <div class="mb-5">
                    <div class="pull-left lead">List of items</div>

                    <a href="add-product.php" class="btn btn-primary pull-right">
                         Add new item
                    </a>
               </div>
               
               <table class="table mt-3 table-bordered" >
                    <thead class="bg-light text-warning">
                         <th>Item ID</th>
                         <th>Image</th>
                         <th class="text-center">Item name</th>
                         <th>Price</th>
                         <th>Wood type</th>
                         <th>Dimension</th>
                         <th>Category</th>
                         <th class="text-center">Action</th>    
                    </thead>
               <tbody>
               <tr class="">
                    <td class="pt-4"></td>   
                    <td class="pt-4"></td>
                    <td class="pt-4"></td>
                    <td class="pt-4"></td>
                    <td class="pt-4"></td>
                    <td class="pt-4"></td>
                    <td class="text-center">
                         <!-- <a href="includes/delete-product.php" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete the product? ');"> Delete</a> -->
                    </td>
                    <td></td>
               </tr>
               </tbody>
          </table>
               </div>
          </div>
     </div>
</body>
</html>