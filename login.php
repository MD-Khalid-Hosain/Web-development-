<?php
session_start();
?>
      <!DOCTYPE html>
      <html lang="en">


      <!-- Mirrored from www.urbanui.com/victory/pages/samples/login-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 Jun 2019 09:43:04 GMT -->
      <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Victory Admin</title>
        <!-- plugins:css -->
        <link rel="stylesheet" href="dashboard-asset/vendors/mdi/css/materialdesignicons.min.css">
        <link rel="stylesheet" href="dashboard-asset/vendors/simple-line-icons/css/simple-line-icons.css">
        <link rel="stylesheet" href="dashboard-asset/vendors/flag-icon-css/css/flag-icon.min.css">
        <link rel="stylesheet" href="dashboard-asset/vendors/css/vendor.bundle.base.css">
        <!-- endinject -->
        <!-- plugin css for this page -->
        <!-- End plugin css for this page -->
        <!-- inject:css -->
        <link rel="stylesheet" href="dashboard-asset/css/style.css">
        <!-- endinject -->
        <link rel="shortcut icon" href="dashboard-asset/images/favicon.png" />
      </head>

      <body>
        <div class="container-scroller">
          <div class="container-fluid page-body-wrapper">
            <div class="row">
              <div class="content-wrapper full-page-wrapper d-flex align-items-center auth">
                <div class="row w-100">
                  <div class="col-lg-8 mx-auto">
                    <div class="row">
                      <div class="col-lg-6 bg-white">
                        <div class="auth-form-light text-left p-5">
                          <h2>Login</h2>
                          <h4 class="font-weight-light">Hello! let's get started</h4>
                          <form class="pt-5" action="login-post.php" method="post">
                            <form >
                              <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Username">
                                <i class="mdi mdi-account"></i>
                              </div>
                              <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" name="pass" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                <i class="mdi mdi-eye"></i>
                              </div>
                              <div class="mt-5">
                                <button type="submit" name="button" class="btn btn-success">Login</button>
                              </div>
                              <?php if(isset($_SESSION['login_err'])){ ?>
                              <div class="alert alert-warning alert-dismissible fade show m-2" role="alert">
                                <strong><?php echo $_SESSION['login_err']; unset($_SESSION['login_err']); ?></strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                            <?php } ?>
                            </form>
                          </form>
                        </div>
                      </div>
                      <div class="col-lg-6 login-half-bg d-flex flex-row">
                        <p class="text-white font-weight-medium text-center flex-grow align-self-end">Copyright &copy; 2018  All rights reserved.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- content-wrapper ends -->
            </div>
            <!-- row ends -->
          </div>
          <!-- page-body-wrapper ends -->
        </div>
        <!-- container-scroller -->
        <!-- plugins:js -->
        <script src="dashboard-asset/vendors/js/vendor.bundle.base.js"></script>
        <!-- endinject -->
        <!-- inject:js -->
        <script src="dashboard-asset/js/off-canvas.js"></script>
        <script src="dashboard-asset/js/hoverable-collapse.js"></script>
        <script src="dashboard-asset/js/misc.js"></script>
        <script src="dashboard-asset/js/settings.js"></script>
        <script src="dashboard-asset/js/todolist.js"></script>
        <!-- endinject -->
      </body>


      <!-- Mirrored from www.urbanui.com/victory/pages/samples/login-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 Jun 2019 09:43:04 GMT -->
      </html>
