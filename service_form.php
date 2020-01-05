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
                  <h1>Service Form</h1>
                </div>
                  <form action="service_post.php" method="post" enctype="multipart/form-data">
                  <div class="form-row">

                    <!--image uploading start-->
                     <div class="form-group py-2">
                         <input type="file" name="service_picture" class="form-control"  onchange="document.getElementById('img').src = window.URL.createObjectURL(files[0])">
                         <div class="text-center">
                           <img src="" alt="" id="img" width="200">
                         </div>
                     </div>
                     <!--image uploading end-->


                    <!-- First Title start -->
                    <div class="form-group col-md-12">
                      <input type="text" class="form-control" name="service_title"  placeholder="Service Title">

                    </div>
                  </div>
                      <!-- First title end -->

                      <!-- Last description start -->
                  <div class="form-row">
                    <div class="form-group col-md-12">
                      <textarea name="service_des" rows="2"  class="form-control" placeholder="Service Description"></textarea>
                    </div>
                      <!-- Last description end -->
                  </div>



                  <div class="form-row ">
                    <div class="form-group col-md-6">
                        <input type="submit" id="show" class="btn btn-primary form-control">
                    </div>
                    <div class="form-group col-md-6">
                        <a href="service_show.php" class="btn btn-warning form-control">View users</a>
                    </div>
                  </div>
                  <?php if(isset($_SESSION['service'])){ ?>
                  <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong><?php echo $_SESSION['service']; ?></strong>
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
