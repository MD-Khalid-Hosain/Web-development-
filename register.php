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
                  <h1>Registration Form</h1>
                </div>
                  <form action="view-post.php" method="post" enctype="multipart/form-data">
                  <div class="form-row">
                    <!-- First Name start -->
                    <div class="form-group col-md-6">
                      <input type="text" class="form-control" name="fname" value="" placeholder="First Name:">
                      <div class="err text-warning">
                        <?php
                          if(isset($_SESSION['fname_err'])){
                            echo $_SESSION['fname_err']; unset ($_SESSION['fname_err']);
                          }
                         ?>
                      </div>
                    </div>
                      <!-- First name end -->

                      <!-- Last name start -->
                    <div class="form-group col-md-6">
                      <input type="text" class="form-control" name="lname" value="" placeholder="Last Name:">
                      <div class="err text-warning">
                        <?php
                          if(isset($_SESSION['lname_err'])){
                            echo $_SESSION['lname_err'];unset ($_SESSION['lname_err']);
                          }
                         ?>
                       </div>
                    </div>
                      <!-- Last name end -->
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
                      <div class="form-group col-md-4">
                          <select class="form-control" name="country">
                              <option value="" >---Country---</option>
                              <option  value="Bangladesh">Bangladesh</option>
                              <option  value="USA">USA</option>
                              <option  value="Canada">Canada</option>
                              <option value="Uganda">Uganda</option>
                          </select>
                          <div class="err text-warning">
                            <?php
                              if(isset($_SESSION['country_err'])){
                                echo $_SESSION['country_err'];unset ($_SESSION['country_err']);
                              }
                             ?>
                          </div>
                      </div>
                      <div class="form-group col-md-4">
                          <input type="date" class="form-control" name="date">
                          <div class="err text-warning">
                            <?php
                              if(isset($_SESSION['date_err'])){
                                echo $_SESSION['date_err'];unset ($_SESSION['date_err']);
                              }
                             ?>
                          </div>
                      </div>
                  </div>
                  <div class="form-row">
                       <div class="form-group col-md-4">
                          <select class="form-control" name="university">
                              <option value="">---University---</option>
                              <option value="IUBAT">IUBAT</option>
                              <option value="AIUB">AIUB</option>
                              <option value="BRACK">BRACK</option>
                              <option value="NSU">NSU</option>
                          </select>
                          <div class="err text-warning">
                            <?php
                              if(isset($_SESSION['universty_err'])){
                                echo $_SESSION['universty_err'];unset ($_SESSION['universty_err']);
                              }
                             ?>
                          </div>
                      </div>
                      <div class="form-group col-md-4">
                          <select class="form-control" name="prog">
                              <option value="">---Program---</option>
                              <option value="BCSE">BCSE</option>
                              <option value="BSEEE">BSEEE</option>
                              <option value="BBA">BBA</option>
                              <option value="BSCE">BSCE</option>
                          </select>
                          <div class="err text-warning">
                            <?php
                              if(isset($_SESSION['prog_err'])){
                                echo $_SESSION['prog_err'];unset ($_SESSION['prog_err']);
                              }
                             ?>
                          </div>
                      </div>
                      <div class="form-group col-md-4">
                          <select class="form-control" name="skills[]" multiple>
                              <option value="">Select your skills</option>
                              <option value="PHP">PHP</option>
                              <option value="C++">C++</option>
                              <option value="C">C</option>
                              <option value="Python">Python</option>
                          </select>
                          <div class="err text-warning">
                            <?php
                              if(isset($_SESSION['skills_err'])){
                                echo $_SESSION['skills_err'];unset ($_SESSION['skills_err']);
                              }
                             ?>
                          </div>
                      </div>
                  </div>
                   <!--image uploading start-->
                    <div class="form-group py-2">
                        <input type="file" name="picture" class="form-control" onchange="document.getElementById('img').src = window.URL.createObjectURL(files[0])">
                        <div class="text-center">
                          <img src="" alt="" id="img">
                        </div>
                    </div>
                    <div class="form-group py-2">
                      <select class="form-control" name="roll">
                        <option value="">Select Role</option>
                        <option value="1">Admin</option>
                        <option value="2">Editor</option>
                        <option value="3">Modaretor</option>
                        <option value="0">Normal user</option>
                      </select>
                    </div>
                    <div class="err text-warning">
                      <?php
                        if(isset($_SESSION['roll_err'])){
                          echo $_SESSION['roll_err'];unset ($_SESSION['roll_err']);
                        }
                       ?>
                    </div>


                  <div class="form-group row">
                      <div class="col-md-12 py-2" style="color:black;">Your Hobbies:</div>

                          <div class="custom-control custom-checkbox  m-auto">
                            <input type="checkbox" class="custom-control-input" name="hobbies[]" value="Football" id="customCheck1">
                            <label class="custom-control-label" for="customCheck1">Football</label>
                          </div>
                          <div class="custom-control custom-checkbox m-auto">
                            <input type="checkbox" class="custom-control-input" name="hobbies[]" value="Cricket" id="customCheck2">
                            <label class="custom-control-label" for="customCheck2">Cricket</label>
                          </div>
                          <div class="custom-control custom-checkbox m-auto">
                            <input type="checkbox" class="custom-control-input" name="hobbies[]" value="Cooking" id="customCheck3">
                            <label class="custom-control-label" for="customCheck3">Cooking</label>
                          </div>
                          <div class="custom-control custom-checkbox m-auto">
                            <input type="checkbox" class="custom-control-input" name="hobbies[]" value="Video Games" id="customCheck4">
                            <label class="custom-control-label" for="customCheck4">Video Games</label>
                          </div>

                        <div class="err text-warning">
                          <?php
                            if(isset($_SESSION['hobbies_err'])){
                              echo $_SESSION['hobbies_err'];unset ($_SESSION['hobbies_err']);
                            }
                           ?>
                        </div>
                  </div>
                  <div class="form-group">
                      <textarea name="comment" class="form-control" rows="2" placeholder="write your comment"></textarea>
                      <div class="err text-danger">
                        <?php
                          if (isset($_SESSION['comment_err'])) {
                            echo $_SESSION['comment_err'];unset ($_SESSION['comment_err']);
                          }

                         ?>
                      </div>
                  </div>
                  <div class="form-row ">
                    <div class="form-group col-md-6">
                        <input type="submit" id="show" class="btn btn-primary form-control">
                    </div>
                    <div class="form-group col-md-6">
                        <a href="user_info_table.php" class="btn btn-warning form-control">View users</a>
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
<?php require 'dashboard-part/footer.php'?>
