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
        
     
      <title>My Cart</title>
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
                         <li class="breadcrumb-item"><a href="#" class="  text-primary text-decoration-none">Home</a></li>
                         <li class="breadcrumb-item active text-secondary " aria-current="page">All products</li>
                    </ol>
               </nav>
          </div>
     

          <div class="row  mt-5">
               <div class="col-lg">
                    <h4 class="fw-bolder text-uppercase">My Shopping Cart</h4>
                    <div class="mt-4">
                         <!-- left cart -->
                         <div class="">
                              <table class="table table-borderless w-100 table-responsive">
                                   <tr class="border-bottom fw-bold">
                                        <td>Product</td>
                                        <td>QTY</td>
                                        <!-- <td>Total Price</td> -->
                                        <td></td>
                                   </tr>
                              
                                   <tr>
                                        <td class="col-lg-5">
                                             <div class="row">
                                                  <div class="col-lg-3 rounded m-2">
                                                       <img src="../images/bed.png" class="cat img-responsive w-100 h-100 img-responsive" alt="..."> 
                                                  </div> 
                                                  <div class="col-lg mt-3">
                                                       Product name <br>
                                                       <p class="text-secondary small">CATEGORY</p>
                                                  </div>
                                             </div>
                                        </td>

                                        <td>
                                             <div class="col-lg-3  mt-3">
                                                  <input type="number" class="form-control" name="qty" min="0" value="1">
                                             </div>
                                        </td>

                                        <!-- <td>
                                             <div class="text-secondary mt-3">&#8369; 5000</div>
                                        </td> -->
                                        
                                        <td>
                                             <div class="mt-3 float-end">
                                                  <a href="" class="text-decoration-none text-danger">Remove</a>
                                             </div>
                                        </td>
                                   
                                   </tr>

                                 

                                   <tr class="border-top">
                                        <td class="mt-5">
                                             <div class="fw-bold pt-3"> 
                                                  <i class='bx bx-chevron-left'></i> <a href="../" class="text-decoration-none text-dark">Back to Shoppping</a>
                                             </div>
                                        </td>
                                        <td></td>
                                        <td class="">
                                           <div class="fw-bold pt-3">Subtotal:</div>
                                        </td>
                                        <td class="float-end">
                                             <div class="fw-bold pt-3">&#8369; 5000</div>
                                        </td>
                                   </tr>
                                   
                                   <tr class="mt-5">
                                        <td></td>
                                        <td></td>
                                     
                                        <td class="pt-5" colspan="2">
                                             <button class="btn btn-dark rounded-pill py-2 px-5">PROCEED TO CHECKOUT</button>
                                        </td>
                                        
                                   </tr>
                                  

                                 
                              </table>
                         </div>
                         </div>
                    </div>
                   
               </div>
               
          </div>
     </div>

   </body>
</html>

