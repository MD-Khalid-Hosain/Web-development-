<?php
session_start();
require 'header.php';?>
      <!-- form page -->
      <section class="mt-5">
        <div class="container">
          <div class="row">
            <div class="col-lg-10 m-auto">
              <div class="bg-primary px-5 py-1">
                <div class="header text-center text-white">
                  <h1>Sing Up Form</h1>
                </div>
                  <form action="singup-post.php" method="post" >
                  <div class="form-row">
                    <!-- First Name start -->
                    <div class="form-group col-md-12">
                      <input type="text" class="form-control" name="fname" value="" placeholder="Full Name:">
                      <div class="err text-warning">
                        <?php
                          if(isset($_SESSION['fname_err'])){
                            echo $_SESSION['fname_err']; unset ($_SESSION['fname_err']);
                          }
                         ?>
                      </div>
                    </div>
                      <!-- First name end -->
                  </div>

                  <div class="form-row">
                    <!-- Email start -->
                    <div class="form-group col-md-6">
                      <input type="text" class="form-control" name="email"  placeholder="Email">
                      <div class="err text-warning">
                        <?php
                          if(isset($_SESSION['email_err'])){
                            echo $_SESSION['email_err']; unset ($_SESSION['email_err']);
                          }
                         ?>
                       </div>
                    </div>
                    <div class="form-group col-md-6">
                      <input type="text" class="form-control" name="remail" value="" placeholder="Re-type Email">
                      <div class="err text-warning">
                        <?php
                          if(isset($_SESSION['remail_err'])){
                            echo $_SESSION['remail_err'];unset ($_SESSION['remail_err']);
                          }
                         ?>
                       </div>
                    </div>
                  </div>
                  <!-- Email  end -->
                  <div class="form-row">
                    <!-- password Start -->
                    <div class="form-group col-md-6">
                      <input type="password" class="form-control" name="pass" value="" placeholder="Password">
                      <div class="err text-warning">
                        <?php
                          if(isset($_SESSION['pass_err'])){
                            echo $_SESSION['pass_err'];unset ($_SESSION['pass_err']);
                          }
                         ?>
                       </div>
                    </div>
                    <div class="form-group col-md-6">
                      <input type="password" class="form-control" name="rpass" value="" placeholder="Re-type Password">
                      <div class="err text-warning">
                        <?php
                          if(isset($_SESSION['rpass_err'])){
                            echo $_SESSION['rpass_err'];unset ($_SESSION['rpass_err']);
                          }
                         ?>
                       </div>
                    </div>
                    <!-- password end -->
                  </div>
                  <!-- gender start -->
                  <div class="form-row">
                      <div class="form-group col-md-4">
                          <input type="radio" name="gen" class=" col-md-2" value="Male"><label for="">Male</label>
                          <input type="radio" name="gen"  class=" col-md-2" value="Female"><label for="">Female</label>
                          <div class="err text-warning">
                            <?php
                              if(isset($_SESSION['gen_err'])){
                                echo $_SESSION['gen_err'];unset ($_SESSION['gen_err']);
                              }
                             ?>
                          </div>
                      </div>
                      <!-- gender end -->
                  </div>

                  <div class="form-row ">
                    <div class="form-group col-md-6 offset-3">
                        <input type="submit" id="show" class="btn btn-success form-control">
                    </div>

                  </div>
                    <div class="<?=(isset($_SESSION['success']))?'py-2 alert alert-success':' '; ?>">
                      <?php
                        if(isset($_SESSION['success'])){
                          echo $_SESSION['success'];unset ($_SESSION['success']);
                        }
                       ?>
                    </div>
                    <?php if(isset($_SESSION['exist'])){ ?>
                      <div class="alert alert-warning alert-dismissible fade show" role="alert">
                      <strong><?php echo $_SESSION['exist']; unset ($_SESSION['exist']); ?></strong>
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                  <?php } ?>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
<?php require 'footer.php'?>
