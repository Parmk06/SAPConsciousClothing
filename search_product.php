<!-- Connect file -->
<?php

include('includes/connect.php');
include('functions/common_function.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SAP Conscious Clothing</title>
    <!-- bootstrap CSS link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" 
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!-- CSS Files -->
    <link rel="stylesheet" href="style.css">
    <style>
      /* Write the codes over here in case it does not work at Style.css as of catches */
    </style>

</head>
<body>
    <!-- navbar -->
<div class="container-fluid p-0">
        <!-- fist child -->
        <nav class="navbar navbar-expand-lg bg-info">
  <div class="container-fluid">
    <img src="./images/SAP_logo.png" alt="" class="logo">
    
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">


        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fa-solid fa-cart-shopping"></i><sup>1</sup></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Total Price: $20</a>
        </li>
        
      </ul>
      <form class="d-flex" action="" method="get">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" placeholder="Search" name="search_data">
        <!-- <button class="btn btn-outline-light" type="submit">Search</button> -->
        <input type="submit" value="Search" class="btn btn-outline-light" name="search_data_product" >
      </form>
    </div>
  </div>
</nav>
<!-- calling cart function-->
<?php
cart();
?>




<!-- Second Child -->
<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">

<ul class="navbar-nav me-auto">

<li class="nav-item">
  <a class="nav-link" href="#">Welcome guest</a>
</li>
<li class="nav-item">
  <a class="nav-link" href="#">Login</a>
</li>
</ul>
</nav>




<!-- Third Child -->
<div class="bg-light">
  <h3 class="text-center">SAP Conscious Clothing</h3>
  <p class="text-center"> Experience the Cultures Through Our Exquisite Attire Collection</p>
</div>




<!-- Forth Child -->

<div class="row px-1">




    <!-- Side Nav -->
<div class="col-md-2 bg-secondary p-0">
     <ul class="navbar-nav me-auto text-center">  

     <li class="nav-item bg-info">
      <a href="#" class="nav-link text-light"><h4>Categories</h4></a>
     </li> 

     <?php

     getcategories();

?>

     <!-- <li class="nav-item">
      <a href="#" class="nav-link text-light">Choli_old</a>
     </li>

     <li class="nav-item">
      <a href="#" class="nav-link text-light">Salwar_old</a>
     </li>

      <li class="nav-item">
      <a href="#" class="nav-link text-light">Kurti Plazo_old</a>
     </li>

     <li class="nav-item">
      <a href="#" class="nav-link text-light">Sari_old</a>
     </li> -->


     </ul>
</div>


    <!-- Products -->
<div class="col-md-10">
    <div class="row">

<!-- Fetching Products -->

    <?php

    // Calling functins   
    search_products();
    getproducts();
    get_unique_categories();

  
    ?>

    <!-- <div class="col-md-4 mb-2">
    <div class="card">
                      <img src="./images/royal-choli.jpeg" class="card-img-top" alt="...">
                      <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-info">Add to cart</a>
                      <a href="#" class="btn btn-secondary">View more</a>
                      </div>
      </div>
    </div>  -->

<!-- row end -->
    </div>

<!-- col end -->
  </div>




</div>







<!-- Last Child -->

<!-- LIKE EDEMAMMA -->

<div class="bg-info p-3 text-right">
  <p>© SAP - All Rights Reserved.</p>
</div>



</div>

<!-- bootstrap JS link -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> 

</body>
</html>