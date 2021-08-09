<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Sign Up</title>
        <!-- Font Awesome -->
        <link rel="stylesheet" href="assets/css/all.min.css">
        <!-- icheck bootstrap -->
        <link rel="stylesheet" href="assets/css/icheck-bootstrap.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="assets/css/adminlte.min.css">
        <!-- font-awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Benne&display=swap');
        </style>
    </head>

    <body style="font-family: 'Benne', serif;">
        <br/><br/>  
        <div class="container">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="card">
                        <div class="card-body register-card-body">
                            <p class="login-box-msg"><b>Sign Up</b></p>

                            <form action="../php/register.php" method="post">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Full Name" name="fullname" required >
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-user"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Address Line 1" name="al1" required>
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="far fa-address-card"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Address Line 2" name="al2" required>
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="far fa-address-card"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="City" name="city" required>
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-city"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="State" name="state" required>
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-map-marker-alt"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Zip code" name="zip" required>
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="far fa-file-archive"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="input-group mb-3">
                                    <input type="email" class="form-control" placeholder="Email" name="mail" required>
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-envelope"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Password" name="password" required>
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-lock"></span>
                                        </div>
                                    </div>
                                </div>
                                <!--
                                  <div class="input-group mb-3">
                                      <input type="password" class="form-control" placeholder="Retype password">
                                      <div class="input-group-append">
                                          <div class="input-group-text">
                                              <span class="fas fa-lock"></span>
                                          </div>
                                      </div>
                                  </div>
                               
                                <div class="row">
                                    <div class="col-8">
                                        <div class="icheck-primary">
                                            <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                                            <label for="agreeTerms">
                                                I agree to the <a href="#">terms</a>
                                            </label>
                                        </div>
                                    </div>
                               
                                     
                                    <div class="col-4">
                                        <button type="submit" class="btn btn-primary btn-block">Sign Up</button>
                                    </div>
                                    
                                </div>
                                -->
                                <div class="row">
                                    <div class='col-8'>
                                    </div>
                                    <div class="col-4" style="text-align:right;">
                                        <button type="submit" class="btn btn-secondary">Submit</button>
                                    </div>
                                </div>
                                
                            </form>

                            <div class="social-auth-links text-center">
                                <p>- OR -</p>
                                <a href="#" class="btn btn-primary">
                                    <i class="fab fa-facebook mr-2"></i>
                                    Sign Up With Facebook
                                </a>
                                <a href="#" class="btn btn-danger">
                                    <i class="fab fa-google-plus mr-2"></i>
                                    Sign up With Google
                                </a>
                            </div>

                            <a href="https://spotinfotech.com/admin/login.php" class="text-center">I already have a membership</a>
                        </div>
                       
                    </div> 


                </div>
            </div>
        </div>

        </div>

        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/adminlte.min.js"></script>
    </body>

</html>