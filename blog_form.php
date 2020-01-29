<?php

require 'session.php';
require 'dashboard-part/header.php';
  $id = $_SESSION['id'];
?>
      <!-- form page -->
      <section>
        <div class="container">
          <div class="row">
            <div class="col-lg-10 m-auto">
              <div class="bg-primary px-5 py-1">
                <div class="header text-center text-white">
                  <h1>Add Blog</h1>
                </div>
                  <form action="blog_post.php" method="post">
                  <div class="form-row">
                    <!-- First Title start -->
                    <div class="form-group col-md-12">
                      <input type="hidden" class="form-control" name="user_id"  value="<?php echo $id ; ?>" placeholder="Blog Title">
                      <input type="text" class="form-control" name="blog_title"  placeholder="Blog Title">

                    </div>
                    <div class="form-group col-md-12">
                      <input type="text" class="form-control" name="blog_des"  placeholder="Blog description">

                    </div>
                  </div>
                      <!-- First title end -->

                  <div class="form-row ">
                    <div class="form-group col-md-6">
                        <input type="submit" id="show" class="btn btn-primary form-control">
                    </div>

                  </div>
                  <?php if(isset($_SESSION['blog'])){ ?>
                  <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong><?php echo $_SESSION['blog']; ?></strong>
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
