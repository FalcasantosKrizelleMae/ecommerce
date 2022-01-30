<?php 

// $error = "";
session_start();


?>

<!DOCTYPE html>
<html lang="en">
   <head>
      

      <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" >

      <link rel="stylesheet" href="../css/all.css" />
       <link rel="stylesheet" href="../css/categories.css" />
      <title>View Product</title>
      <?php 
         include "../includes/links.php";  
      ?>
   </head>
   <body class="bg-white">
      
 
     <?php include "../includes/navbar.php";?>

     <div class="container my-5">
          
          <!-- Breadcrumb -->
          <div class="mt-5 pt-2">
               <nav class="breadcrumb text-dark fs-5">
                    <ol class="breadcrumb fs-6 ">
                         <li class="breadcrumb-item"><a href="../index.php" class="  text-primary text-decoration-none">Home</a></li>
                         <li class="breadcrumb-item active text-secondary " aria-current="page">Product name</li>
                    </ol>
               </nav>
          </div>
     
          <div class="row">
               <div class="col-lg-6 col-md-7  col-sm-12 p-5 rounded m-3">
                    <img src="../images/bed.png" class="cat img-responsive w-100 img-fluid" alt="..."> 

               </div> 
               <div class="col-sm col-md col-lg col-xl px-5 m-3">
                   <div class="lead fs-2">PRODUCT NAME</div>
                   <div class="text-success fw-bold">IN STOCK</div>
                   <div class="text-secondary fs-3 mt-3">&#8369; 5000</div>
                   <div class="col-sm-2 mt-4">
                        <small>QTY</small>
                         <input type="number" class="form-control" name="qty" min="0" value="1">
                   </div>

                   <div class="mt-5">
                         <button class="btn btn-outline-dark rounded-pill py-2 px-5 mb-3 me-3">ADD TO CART</button>
                         <button class="btn btn-dark rounded-pill py-2 mb-3 px-5">BUY NOW</button>
                   </div>

                   <p class="mt-4 fs-5 fw-light">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit
                   </p>
               </div> 
          </div>

        

     <div class="row">
             <p class="text-center text-secondary py-5 my-5 fs-3 fw-bold ">RELATED PRODUCTS</p>
     
          <div class="col-sm rounded-pill">
               <a href="" class="text-decoration-none type">
                    <img src="../images/bed.png" class="cat img-fluid " alt="..."> 
                    <div class="text-center mt-3 mb-5 ">
                         <div class="type fw-bold fs-5 ">
                                   Beds
                         </div> 
                         <div class="text-secondary">&#8369; 5000</div>
                    </div>
               </a>
                   
          </div> 

           <div class="col-sm ">
               <a href="" class="text-decoration-none type">
                    <img src="../images/cabinet.png" class="cat img-fluid" alt="..."> 
                    <div class="text-center mt-3 mb-5 ">
                         <div class="fw-bold fs-5 ">Cabinets</div> 
                         <div class="text-secondary ">&#8369; 5000</div>
                    </div>
               </a>
          </div> 

           <div class="col-sm">
               <a href="" class="text-decoration-none type">
                    <img src="../images/6.png" class="cat img-fluid" alt="..."> 
                    <div class="text-center mt-3 mb-5 ">
                         <div class="fw-bold  fs-5 ">Chairs</div> 
                         <div class="text-secondary ">&#8369; 5000</div>
                    </div>
               </a>
          </div> 

           <div class="col-sm">
               <a href="" class="text-decoration-none type">
                    <img src="../images/table.png" class="cat img-fluid" alt="...">
                    <div class="text-center mt-3 mb-5 ">
                         <div class="fw-bold  fs-5 ">Tables</div> 
                         <div class="text-secondary ">&#8369; 5000</div>
                    </div>
               </a>
          </div> 
        </div>

     </div>

   </body>
</html>

