<?php

include_once("includes/class-autoload.inc.php");

// inserting the data into the database starts

$posts = new post();

if (isset($_POST['save_product'])){


  $sku = $_POST['sku'];
  $name = $_POST['name'];
  $price = $_POST['price'];
  $type_selector = $_POST['type_select'];
  $size = $_POST['size'];
  $weight = $_POST['weight'];
  $height = $_POST['height'];
  $width  = $_POST['width'];
  $length = $_POST['length'];


 
   $posts->insertProduct($sku, $name, $price, $type_selector, $size, $weight, $height, $width, $length);

   header("location: index.php");

}

// inserting the data into the database ends


/* data delete using checkbox starts */

if(isset($_POST['delete_product'])) {
  if(isset($_POST['selector'])) {
      foreach ($_POST['selector'] as $selector) {
         
      $posts->deleteProduct($selector);

      }
  }

  header("location: index.php");
  

}

/* data delete using checkbox ends */

 
 


















?>