﻿<?php
include('connect.php');
#include('header.php');
$search = "";
if( !empty($_GET['Search'])){
  $search = $_GET['Search'];
}
?>
 <h3 class="title">Search Results for: <?= $search ?></h3>
<div class="container" style="margin-top: 20px">
<div class="row">
    <?php
    if( !empty($search)) {
      $rs = mysqli_query( $connect ,"SELECT * FROM product WHERE product.product_name LIKE '%{$search}%'");
      while($row = mysqli_fetch_assoc($rs)){

    ?>
    <div class="card" style="background-color: white;margin-top: 20px;margin-left: 35px;overflow: auto;width: 270px;
          border: 2px solid #F8ABAB;border-radius: 1px;border-bottom: 6px solid #FCA5A5; float: left;">
              <a href="detail.php?id=<?php echo $row['product_id']?>" style=" text-decoration: none;
            text-align: center;">
            <div style="height:80px">
              <h2><?php echo $row['product_name'] ?></h2>
              </div>
              <div><img src="images/<?php echo $row['product_image']?>" style="width: 247px;height: 200px;padding: 7px"></div>
              <p style="color: red"><?php echo $row['product_price']." $"; ?></p>
              

                <!--<h5>Genre: <?php echo $row['product_description'] ?></h5>-->
            </a>
          </div>
         <?php
     }
    }
    ?>
  </div>
  </div>
  <?php
  
  #include('inc/footer.php');
   ?>