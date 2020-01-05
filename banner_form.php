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
                  <h1>Banner Form</h1>
                </div>
                  <form action="banner_post.php" method="post" enctype="multipart/form-data">
                  <div class="form-row">
                    <!-- First Name start -->
                    <div class="form-group col-md-12">
                      <input type="text" class="form-control" name="banner_title" value="" placeholder="Banner Title">

                    </div>
                  </div>
                      <!-- First name end -->

                      <!-- Last name start -->
                  <div class="form-row">
                    <div class="form-group col-md-12">
                      <textarea name="banner_des" rows="2"  class="form-control" placeholder="Banner Description"></textarea>
                    </div>
                      <!-- Last name end -->
                  </div>



                  <div class="form-row">
                    <div class="form-group col-md-12">
                      <input type="text" class="form-control" name="banner_btn"  placeholder="Banner Button">

                    </div>
                  </div>


                   <!--image uploading start-->
                    <div class="form-group py-2">
                        <input type="file" name="banner_picture" class="form-control"  onchange="document.getElementById('img').src = window.URL.createObjectURL(files[0])">
                        <div class="text-center">
                          <img src="" alt="" id="img" width="200">
                        </div>
                    </div>



                  <div class="form-row ">
                    <div class="form-group col-md-6">
                        <input type="submit" id="show" class="btn btn-primary form-control">
                    </div>
                    <div class="form-group col-md-6">
                        <a href="banner_show.php" class="btn btn-warning form-control">View users</a>
                    </div>
                  </div>
                  <?php if(isset($_SESSION['banner'])){ ?>
                  <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong><?php echo $_SESSION['banner']; ?></strong>
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
