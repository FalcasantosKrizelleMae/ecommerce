<?php 
// $error = "";
session_start();
include "../includes/connection.php";  
?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />

      <link rel="stylesheet" href="../css/all.css" />
      <link rel="stylesheet" href="../css/categories.css" />
      <title>Furniture</title>
      <?php 
         include "../includes/links.php";  
      ?>
   </head>
   <body class="bg-light">
      <?php include "../includes/navbar.php";?>

      <div class="container my-5">
         <!-- Breadcrumb -->
         <div class="mt-5 pt-2">
            <nav class="breadcrumb text-dark fs-5">
               <ol class="breadcrumb">
                  <li class="breadcrumb-item">
                     <a href="#" class="text-primary text-decoration-none"
                        >Home</a
                     >
                  </li>
                  <li
                     class="breadcrumb-item active text-secondary"
                     aria-current="page"
                  >
                     All products
                  </li>
               </ol>
            </nav>
         </div>

         <div class="row">
            <?php
               $query=mysqli_query($con,"select * from `items` limit 8;");
               while($row=mysqli_fetch_array($query)){
          ?>
            <div class="col-md-3 shadow-sm p-4 rounded m-3">
               <a href="./view_product.php?id=<?php echo $row['id'] ?>" class="text-decoration-none">
                  <img
                     src="../<?php echo $row['img']?>"
                     class="img-responsive w-100 rounded"
                     alt="..."
                  />
                  <div class="text-center mt-3">
                     <div class="type fs-5 text-dark text-bolder">
                        <?php echo $row['item_name']?>
                     </div>
                     <small class="text-secondary text-uppercase"
                        ><?php echo $row['category']?></small
                     >
                     <div class="text-dark fw-bolder fs-5 mt-3">
                        &#8369;
                        <?php echo $row['price']?>.00
                     </div>
                  </div>

                  <div class="mx-2 my-4">
                     <button
                        class="btn btn-outline-secondary rounded-pill px-3"
                     >
                        Add to cart <span class="ms-1 bx bx-cart"></span>
                     </button>
                     <button class="btn rounded-pill btn-dark px-3 float-end">
                        Buy now<span class="bx bx-chevron-right"></span>
                     </button>
                  </div>
               </a>
            </div>

            <?php
               }
               ?>
         </div>

         <? include '../includes/footer.php'; ?>
      </div>
   </body>
</html>
