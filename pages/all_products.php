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
      <title>Furniture</title>
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
                    <ol class="breadcrumb">
                         <li class="breadcrumb-item"><a href="#" class="  text-primary text-decoration-none">Home</a></li>
                         <li class="breadcrumb-item active text-secondary " aria-current="page">All products</li>
                    </ol>
               </nav>
          </div>
     
          <div class="row">
               <div class="col-sm col-md col-lg col-xl p-5 bg-light rounded m-3">
                    <a href="" class="text-decoration-none type">
                         <img src="../images/bed.png" class="cat img-responsive w-100 " alt="..."> 
                         <div class="text-center mt-3 ">
                              <div class="type  fs-5 ">
                                        Beds
                              </div> 
                              <div class="text-secondary fs-6">&#8369; 1000</div>
                         </div>
                    </a>  
               </div> 

               <div class="col-sm col-md col-lg col-xl p-5 bg-light rounded m-3">
               
                    <a href="" class="text-decoration-none type">
                         <img src="../images/cabinet.png" class="cat img-responsive w-100 " alt="..."> 
                         <div class="text-center mt-3 ">
                              <div class=" fs-5 ">Cabinets</div> 
                              <div class="text-secondary fs-6">&#8369; 5000</div>
                         </div>
                    </a>
               </div> 

               <div class="col-sm col-md col-lg col-xl p-5 bg-light rounded m-3">
                    
                    <a href="" class="text-decoration-none type">
                         <img src="../images/6.png" class="cat  img-responsive w-100" alt="..."> 
                         <div class="text-center mt-3 ">
                              <div class="  fs-5 ">Chairs</div> 
                              <div class="text-secondary fs-6">&#8369; 5000</div>
                         </div>
                    </a>
               </div> 

               <div class="col-sm col-md col-lg col-xl p-5 bg-light rounded m-3">
                    
                    <a href="" class="text-decoration-none type">
                         <img src="../images/6.png" class="cat  img-responsive w-100" alt="..."> 
                         <div class="text-center mt-3 ">
                              <div class="  fs-5 ">Chairs</div> 
                              <div class="text-secondary fs-6">&#8369; 5000</div>
                         </div>
                    </a>
               </div> 
               

          </div>

        

         <? include '../includes/footer.php'; ?>

     </div>

   </body>
</html>

