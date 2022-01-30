<?php
 $page ='Dashboard'; 
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="./css/main.css" rel="stylesheet">

    <?php 
         include "../includes/links.php";  
    ?>

    <title>Admin | Add product</title>

  </head>

  <body>
    <div class="container my-5">
      <div class="page-header mb-5">
        <h1>Add new Item</h1>
        <div class="my-auto"> 
         <a href="./products.php">back to products</a>
        </div>
        <hr>
      </div>

      <form class>
        <div class="row mt-3">
          <div class="form-group col-md-6">
            <label for="inputEmail4">Item name</label>
            <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
          </div>
          
        </div>

         <div class="row mt-3">
          <div class="form-group col-md-6">
            <label for="inputPassword4">Description</label>
            <textarea class="form-control" id="inputPassword4" placeholder="Password"></textarea>
          </div>
          <div class="form-group col-md-6">
            <label for="inputAddress2">Address 2</label>
            <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
          </div>
        </div>
         <div class="row mt-3">
          <div class="form-group col-md-6"> 
            <label for="inputCity">City</label>
            <input type="text" class="form-control" id="inputCity">
          </div>
          <div class="form-group col-md-4">
            <label for="inputState">State</label>
            <select id="inputState" class="form-control">
              <option selected>Choose...</option>
              <option>...</option>
            </select>
          </div>
          <div class="form-group col-md-2">
            <label for="inputZip">Zip</label>
            <input type="text" class="form-control" id="inputZip">
          </div>
        </div>
        <div class="form-group">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">
              Check me out
            </label>
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Sign in</button>
      </form>
    </div>
  </body>
</html>
