<?php

// including connect file
include('./includes/connect.php');

// getting products

function getproducts(){

    global $con;

    //condition to check isset or not

    if(!isset($_GET['category'])){
    $select_query="Select * from `products` order by rand() LIMIT 0,9"; //0 to 9 is limit of products on one page
    $result_query=mysqli_query($con,$select_query);
    // $row=mysqli_fetch_assoc($result_query);
    // echo $row['product_title'];
    while($row=mysqli_fetch_assoc($result_query)){

      $product_id=$row['product_id'];
      $product_title=$row['product_title'];
      $product_description=$row['product_description'];
      // $product_keywords=$row['product_keywords'];
      $category_id=$row['category_id'];
      $product_image=$row['product_image'];
      $product_price=$row['product_price'];

      echo "<div class='col-md-4 mb-2'>
     <div class='card'>
                        <img src='./admin_area/product_images/$product_image'
                         class='card-img-top' alt='$product_title'>
                        <div class='card-body'>
                          <h5 class='card-title'>$product_title</h5>
                          <p class='card-text'>$product_description</p>
                          <a href='index.php?add_to_cart=$product_id' class='btn btn-info'>Add to cart</a>
                          <a href='product_details.php?product_id=$product_id'class='btn btn-secondary' class='btn btn-secondary'>View more</a>
                        </div>
        </div>
      </div>";
      // We can remove "<a href='#' class='btn btn-secondary'>View more</a>" as we will not have other pictures to view more
      
    }
}

}

// getting unique categories

function get_unique_categories(){

  global $con;

    //condition to check isset or not

    if(isset($_GET['category'])){

        $category_id=$_GET['category'];

    $select_query="Select * from `products` where category_id=$category_id"; //0 to 9 is limit of products on one page
    $result_query=mysqli_query($con,$select_query);

    $num_of_rows=mysqli_num_rows($result_query);
    if($num_of_rows==0){
      echo "<h2 class = 'text-center text-danger mt-4'> Sorry! No Stock available for this category</h2>";
      echo "<h2 class = 'text-center text-danger'> :-( </h2>";

    }

    // $row=mysqli_fetch_assoc($result_query);
    // echo $row['product_title'];
    while($row=mysqli_fetch_assoc($result_query)){

      $product_id=$row['product_id'];
      $product_title=$row['product_title'];
      $product_description=$row['product_description'];
      // $product_keywords=$row['product_keywords'];
      $category_id=$row['category_id'];
      $product_image=$row['product_image'];
      $product_price=$row['product_price'];

      echo "<div class='col-md-4 mb-2'>
            <div class='card'>
                        <img src='./admin_area/product_images/$product_image' class='card-img-top' alt='$product_title'>
                        <div class='card-body'>
                        <h5 class='card-title'>$product_title</h5>
                        <p class='card-text'>$product_description</p>
                        <a href='index.php?add_to_cart=$product_id' class='btn btn-info'>Add to cart</a>
                        <a href='product_details.php?product_id=$product_id'class='btn btn-secondary' class='btn btn-secondary'>View more</a>
                        </div>
        </div>
      </div>";
      // We can remove "<a href='#' class='btn btn-secondary'>View more</a>" as we will not have other pictures to view more
      
    }
 }
}





// displaying categories in side-nav

function getcategories(){

    global $con;

    $select_categories = "Select * from `categories`";

    $result_categories = mysqli_query($con,$select_categories);
    // $row_data = mysqli_fetch_assoc($result_categories);
    // echo $row_data['category_title'];
    // echo $row_data['category_title'];
    
    while($row_data = mysqli_fetch_assoc($result_categories)){
    
      $category_title = $row_data['category_title'];
      $category_id = $row_data['category_id'];
      // echo $category_title;
      echo " <li class='nav-item'>
      <a href='index.php?category=$category_id' class='nav-link text-light'>$category_title</a>
     </li>";
    }
}

//searching products functions
function search_products(){
  global $con;
  if(isset($_GET['search_data_product'])){
  $search_data_value=$_GET['search_data'];
  $search_query="Select * from `products` where product_keywords like'%$search_data_value%'";
  $result_query=mysqli_query($con,$search_query);

  $num_of_rows=mysqli_num_rows($result_query);
  if($num_of_rows==0){
    echo "<h2 class = 'text-center text-danger mt-4'> Sorry! No results match! No products found!</h2>";
    echo "<h2 class = 'text-center text-danger'> :-( </h2>";

  }

  // $row=mysqli_fetch_assoc($result_query);
  // echo $row['product_title'];
  while($row=mysqli_fetch_assoc($result_query)){

    $product_id=$row['product_id'];
    $product_title=$row['product_title'];
    $product_description=$row['product_description'];
    // $product_keywords=$row['product_keywords'];
    $category_id=$row['category_id'];
    $product_image=$row['product_image'];
    $product_price=$row['product_price'];

    echo "<div class='col-md-4 mb-2'>
          <div class='card'>
                      <img src='./admin_area/product_images/$product_image' class='card-img-top' alt='$product_title'>
                      <div class='card-body'>
                      <h5 class='card-title'>$product_title</h5>
                      <p class='card-text'>$product_description</p>
                      <a href='index.php?add_to_cart=$product_id' class='btn btn-info'>Add to cart</a>
                      <a href='product_details.php?product_id=$product_id'class='btn btn-secondary' class='btn btn-secondary'>View more</a>
                      </div>
      </div>
    </div>";
    // We can remove "<a href='#' class='btn btn-secondary'>View more</a>" as we will not have other pictures to view more
    
  }
}
}
//view details function
function view_details(){
  global $con;
    if(isset($_GET['product_id'])){
    //condition to check isset or not
    if(!isset($_GET['category'])){
      $product_id=$_GET['product_id'];
    $select_query="Select * from `products` where product_id=$product_id";
    $result_query=mysqli_query($con,$select_query);
    while($row=mysqli_fetch_assoc($result_query)){

      $product_id=$row['product_id'];
      $product_title=$row['product_title'];
      $product_description=$row['product_description'];
      // $product_keywords=$row['product_keywords'];
      $category_id=$row['category_id'];
      $product_image=$row['product_image'];
      $product_price=$row['product_price'];

      echo "<div class='col-md-4 mb-2'>
     <div class='card'>
                        <img src='./admin_area/product_images/$product_image'
                         class='card-img-top' alt='$product_title'>
                        <div class='card-body'>
                          <h5 class='card-title'>$product_title</h5>
                          <p class='card-text'>$product_description</p>
                          <a href='index.php?add_to_cart=$product_id' class='btn btn-info'>Add to cart</a>
                          <a href='index.php'class='btn btn-secondary' class='btn btn-secondary'>Go Home</a>
                        </div>
        </div>
      </div>";
      // We can remove "<a href='#' class='btn btn-secondary'>View more</a>" as we will not have other pictures to view more
      
    }
 }
}
}
//get ip address function
function getIPAddress() {  
  //whether ip is from the share internet  
   if(!empty($_SERVER['HTTP_CLIENT_IP'])) {  
              $ip = $_SERVER['HTTP_CLIENT_IP'];  
      }  
  //whether ip is from the proxy  
  elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
              $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
   }  
//whether ip is from the remote address  
  else{  
           $ip = $_SERVER['REMOTE_ADDR'];  
   }  
   return $ip;  
}  
// $ip = getIPAddress();  
// echo 'User Real IP Address - '.$ip; 
 

function cart() {
  if (isset($_GET['add_to_cart'])) {
      global $con;
      $get_ip_add = getIPAddress();
      $get_product_id = $_GET['add_to_cart'];

      // Check for SQL Injection and improve query formatting
      $select_query = "SELECT * FROM cart_details WHERE ip_address = ? AND product_id = ?";
      $stmt_select = mysqli_prepare($con, $select_query);

      if ($stmt_select) {
          mysqli_stmt_bind_param($stmt_select, "si", $get_ip_add, $get_product_id);
          mysqli_stmt_execute($stmt_select);
          $result_query = mysqli_stmt_get_result($stmt_select);
          $num_of_rows = mysqli_num_rows($result_query);

          if ($num_of_rows > 0) {
              echo "<script>alert('This item is already present inside the cart')</script>";
          } else {
              // Use prepared statements to prevent SQL injection
              $insert_query = "INSERT INTO cart_details (product_id, ip_address, quantity) VALUES (?, ?, 0)";
              $stmt_insert = mysqli_prepare($con, $insert_query);

              if ($stmt_insert) {
                  mysqli_stmt_bind_param($stmt_insert, "is", $get_product_id, $get_ip_add);
                  $result = mysqli_stmt_execute($stmt_insert);

                  if ($result) {
                      echo "<script>alert('This item added to the cart')</script>";
                  } else {
                      echo "<script>alert('Failed to add item to the cart')</script>";
                  }
                  mysqli_stmt_close($stmt_insert);
              } else {
                  echo "<script>alert('Failed to prepare the statement')</script>";
              }
          }

          mysqli_stmt_close($stmt_select);
      } else {
          echo "<script>alert('Failed to prepare the statement')</script>";
      }

      echo "<script>window.open('index.php','_self')</script>";
  }
}

?>