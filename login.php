<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Admin Log In</title>
      <!-- Font Awesome -->
      <link rel="stylesheet" href="assets/css/all.min.css">
      <!-- icheck bootstrap -->
      <link rel="stylesheet" href="assets/css/icheck-bootstrap.min.css">
      <!-- Theme style -->
      <link rel="stylesheet" href="assets/css/adminlte.min.css">
      <!-- font-awesome -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   </head>
   <body class="hold-transition login-page">
      <div class="login-box">
         <div class="login-logo">
            <a href="https://spotinfotech.com/admin/login.php"><b>SPOTiTUSA</b></a>
         </div>
         <div class="card">
            <div class="card-body login-card-body">
               <p class="login-box-msg">Sign In</p>
               <div class="text-center">
                  <?php
                     if(isset($_SESSION['status'])) {
                     ?>
                  <div class="alert alert-danger" role="alert">
                     <?php      
                        echo $_SESSION['status'];
                     ?>
                  </div>
                  <?php
                     }
                   ?>
               </div>
               <form action="php/review.php" method="post">
                  <div class="input-group mb-3">
                     <input type="text" class="form-control" placeholder="Enter Your Email" name="mail" value="<?php if($_SESSION['mail']) { echo $_SESSION['mail']; } ?>">
                     <div class="input-group-append">
                        <div class="input-group-text">
                           <span class="fas fa-envelope"></span>
                        </div>
                     </div>
                  </div>
                  <div class="input-group mb-3">
                     <input type="password" class="form-control" placeholder="Enter Your Password" name="pass" value="<?php if($_SESSION['pass']) { echo $_SESSION['pass']; } ?>">
                     <div class="input-group-append">
                        <div class="input-group-text">
                           <span class="fas fa-lock"></span>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-12" style="text-align: right;">
                        <button type="submit" class="btn btn-primary">Sign In  <i class="fas fa-sign-in-alt"></i></button>
                     </div>
                    
                  </div>
               </form>
            </div>
         </div>
      </div>
      
      <script src="assets/js/jquery.min.js"></script>
      <script src="assets/js/bootstrap.bundle.min.js"></script>
      <script src="assets/js/adminlte.min.js"></script>
   </body>
</html>