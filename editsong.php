﻿<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Login </title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Login-.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 3.19.1, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    
    
    
    <script type="application/ld+json">{
    "@context": "http://schema.org",
    "@type": "Organization",
    "name": "",
    "logo": "images/MichaelCorleone.png"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Login">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body"><header class="u-clearfix u-header u-header" id="sec-96f0"><div class="u-clearfix u-sheet u-sheet-1">
        <a href="https://nicepage.com" class="u-image u-logo u-image-1" data-image-width="1185" data-image-height="1015">
          <img src="images/MichaelCorleone.png" class="u-logo-image u-logo-image-1" data-image-width="64">
        </a>
        <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
          <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px;">
            <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
              <svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><symbol id="menu-hamburger" viewBox="0 0 16 16" style="width: 16px; height: 16px;"><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</symbol>
</defs></svg>
            </a>
          </div>
          <div class="u-custom-menu u-nav-container">
            <ul class="u-nav u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="index.php" style="padding: 10px 20px;">Home</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="About.html" style="padding: 10px 20px;">About</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Contact.html" style="padding: 10px 20px;">Contact</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Login-.php" style="padding: 10px 20px;">Login</a>
</li></ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="index.html" style="padding: 10px 20px;">Home</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="About.html" style="padding: 10px 20px;">About</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Contact.html" style="padding: 10px 20px;">Contact</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" style="padding: 10px 20px;">Login</a>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
        <?php
              $servername = 'localhost';
              $username ='root';
              $password='';
              $database = 'website';

              $connect = mysqli_connect($servername, $username,$password,$database);
              $id=$_GET["id"];
              $sql="SELECT * FROM product WHERE product_id={$id} ";

              $result= mysqli_query($connect,$sql);
              while ($row=mysqli_fetch_assoc($result))
              {
                ?>
      </div></header>
    <section class="u-align-center u-clearfix u-grey-10 u-section-1" id="sec-53ed">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-align-center u-container-style u-group u-radius-50 u-shape-round u-white u-group-1">
          <div class="u-container-layout u-valign-middle u-container-layout-1">
            <h3 class="u-text u-text-default u-text-1"> Edit Song</h3>
            <div class="u-expanded-width u-form u-login-control u-form-1">
              <form action="" method="POST" enctype="multipart/form-data" class="u-clearfix u-form-custom-backend u-form-spacing-35 u-form-vertical u-inner-form" source="custom" name="form-2" style="padding: 10px;">
                <div class="u-form-group u-form-name">
                  <label for="username-708d" class="u-form-control-hidden u-label"></label>
                  <input type="text" placeholder="Enter product name" id="username-708d" name="product_name" class="u-grey-5 u-input u-input-rectangle" value = "<?php echo $row['product_name'] ?>" required="" size="60">
                </div>
                <div class="u-form-group u-form-name">
                  <label for="username-708d" class="u-form-control-hidden u-label"></label>
                  <input type="file" placeholder="add image file" id="username-708d" name="product_image" value = "Images/<?php echo $row['product_image'] ?>" class="u-grey-5 u-input u-input-rectangle" required="">
                </div>
                <div class="u-form-group u-form-password">
                  <label for="password-708d" class="u-form-control-hidden u-label"></label>
                  <input type="text" placeholder="Enter product price" id="password-708d" name="product_price" value = "<?php echo $row['product_price'] ?>" class="u-grey-5 u-input u-input-rectangle" required="">
                </div>
                 <div class="u-form-group u-form-password">
                  <label for="password-708d" class="u-form-control-hidden u-label"></label>
                  <input type="text" placeholder="Enter product description" id="password-708d" name="product_description" value = "<?php echo $row['product_description'] ?>" class="u-grey-5 u-input u-input-rectangle" required="">
                </div>
                <div class="u-form-group u-form-name">
                  <label for="username-708d" class="u-form-control-hidden u-label"></label>
                  <input type="file" placeholder="add audio file" id="username-708d" name="audio" value = "<?php echo $row['audio'] ?>" class="u-grey-5 u-input u-input-rectangle" required="">
                </div>
                <?php
                }
                ?>

                <div class="u-align-center u-form-group u-form-submit">
                  <a href="#" class="u-btn u-btn-round u-btn-submit u-button-style u-radius-17 u-btn-1">Submit</a>
                  <input type="submit" value="submit" class="u-form-control-hidden">
                </div>
                <input type="hidden" value="" name="recaptchaResponse">
              </form>
              <?php

              if(isset($_POST['product_name']))
              {
               $product_name = $_POST['product_name'];
               $product_price = $_POST['product_price'];
               $product_description = $_POST['product_description'];  

               $product_image  = $_FILES['product_image']['name'];
               $product_image_tmp = $_FILES['product_image']['tmp_name'];
               
               $audio = $_FILES['audio']['name'];
               $audio_tmp =  $_FILES['audio']['tmp_name'];

               move_uploaded_file($product_image_tmp,"Images/$product_image");
               move_uploaded_file($audio_tmp,"audios/$audio");

              $sql = "UPDATE `product` SET `product_name`='$product_name', `product_price`='$product_price', `product_description`='$product_description', `product_image`='$product_image', `audio`='$audio' WHERE `product_id`='$id';";

              $insert_pro = mysqli_query($connect, $sql);
              
              }
             ?>
            </div>
            <!--<a href="" class="u-border-1 u-border-active-palette-2-base u-border-hover-palette-1-base u-btn u-button-style u-login-control u-login-forgot-password u-none u-text-palette-1-base u-btn-2">Forgot password?</a>
            'product_image'='Images/$product_image', 'audio'='audios/$audio'-->
          </div>
        </div>
      </div>
    
  </body>
</html>