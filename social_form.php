<?php

require 'session.php';
require 'dashboard-part/header.php';?>
      <!-- form page -->
      <section>
        <div class="container">
          <div class="row">
            <div class="col-lg-10 m-auto">
              <div class="bg-primary px-5 py-1">
                <div class="header text-center text-white">
                  <h1>Social Form</h1>
                </div>
                  <form action="social_post.php" method="post">
                  <div class="form-row">
                    <!-- First Title start -->
                    <div class="form-group col-md-12">
                      <input type="text" class="form-control" name="social_icon"  placeholder="Service Title">

                    </div>
                    <div class="form-group col-md-12">
                      <input type="text" class="form-control" name="social_link"  placeholder="Service Title">

                    </div>
                  </div>
                      <!-- First title end -->

                  <div class="form-row ">
                    <div class="form-group col-md-6">
                        <input type="submit" id="show" class="btn btn-primary form-control">
                    </div>

                  </div>
                  <?php if(isset($_SESSION['social'])){ ?>
                  <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong><?php echo $_SESSION['social']; ?></strong>
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
<?php require 'dashboard-part/footer.php'?>
