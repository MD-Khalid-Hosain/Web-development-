<?php require 'session.php';?>
<?php require 'dashboard-part/header.php';?>
<?php require 'db.php';?>


<?php
    $id = $_GET['id'];
    $select = "SELECT * FROM users_info WHERE id=$id";
    $select_result = mysqli_query($db_connection,$select);
    $fetch_assoc = mysqli_fetch_assoc($select_result);
    $a = $fetch_assoc['hobbies'];
    $b = explode(',',$a);

?>
<section>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8 m-auto bg-dark">
              <div class="text-white text-center">
                  <h2>Update form</h2>
              </div>
              <form action="update_info.php" method="post" enctype="multipart/form-data">
                <div class="form-row">
                    <div class="form-group col-lg-12">
                     <input type="hidden" name="id" value="<?php echo $fetch_assoc['id'];?>" class="form-control" >
                      <input type="text" name="fname" value="<?php echo $fetch_assoc['fname'];?>" class="form-control" placeholder="first name">
                      <div class="err text-warning">
                        <?php
                          if(!empty($_GET['fname_err'])){
                            echo $_GET['fname_err'];
                          }
                         ?>
                      </div>
                    </div>
                    <div class="form-group col-lg-12">
                      <input type="email" name="email" class="form-control" value="<?php echo $fetch_assoc['email'];?>" placeholder="email">
                      <div class="err text-warning">
                        <?php
                          if(!empty($_GET['email_err'])){
                            echo $_GET['email_err'];
                          }
                         ?>
                       </div>
                    </div>
                </div>
                  <div class="form-row">
                    <div class="form-group position-relative col-lg-12">
                       <input type="password" name="pass" class="form-control" value="<?php echo $fetch_assoc['pass'];?>" placeholder="your password" id="myinput">
                       <button type="button" class="btn btn-success position-absolute" style="top:0; right:0;" onclick="myFunction()">Show</button>
                       <div class="err text-warning">
                        <?php
                          if(!empty($_GET['pass_err'])){
                            echo $_GET['pass_err'];
                          }
                         ?>
                       </div>
                    </div>
                    <div class="form-group col-lg-12 text-white text-center">
                        <label>Gender:</label>
                        <input type="radio" name="gen" value="Male" <?php if($fetch_assoc['gen']=="Male"){echo 'checked';}else{echo '';}?> id="gender1"><label for="gender1">Male</label>
                        <input type="radio"  value="Female" <?php if($fetch_assoc['gen']=="Female"){echo 'checked';}else{echo '';}?>name="gen"  id="gender2"><label for="gender2">Female</label>
                        <div class="err text-warning">
                            <?php
                              if(!empty($_GET['gen_err'])){
                                echo $_GET['gen_err'];
                              }
                             ?>
                          </div>
                    </div>
                  </div>
                  <div class="form-row">
                      <div class="form-group col-lg-4">
                          <select class="form-control" name="country">
                              <option value="" >---Country---</option>
                              <option  value="Bangladesh" <?php if($fetch_assoc['country']=="Bangladesh"){echo 'selected';}else{echo '';}?>>Bangladesh</option>
                              <option  value="USA" <?php if($fetch_assoc['country']=="USA"){echo 'selected';}else{echo '';}?>>USA</option>
                              <option  value="Canada" <?php if($fetch_assoc['country']=="Canada"){echo 'selected';}else{echo '';}?>>Canada</option>
                              <option value="Uganda" <?php if($fetch_assoc['country']=="Uganda"){echo 'selected';}else{echo '';}?> >Uganda</option>
                          </select>
                          <div class="err text-warning">
                            <?php
                              if(!empty($_GET['country_err'])){
                                echo $_GET['country_err'];
                              }
                             ?>
                          </div>
                    </div>
                    <div class="form-group col-lg-4">
                        <select class="form-control" name="university">
                              <option value="">---University---</option>
                              <option value="IUBAT"<?php if($fetch_assoc['university']=="IUBAT"){echo 'selected';}else{echo '';}?> >IUBAT</option>
                              <option value="AIUB" <?php if($fetch_assoc['university']=="AIUB"){echo 'selected';}else{echo '';}?>>AIUB</option>
                              <option value="BRACK" <?php if($fetch_assoc['university']=="BRACK"){echo 'selected';}else{echo '';}?>>BRACK</option>
                              <option value="NSU" <?php if($fetch_assoc['university']=="NSU"){echo 'selected';}else{echo '';}?>>NSU</option>
                          </select>
                          <div class="err text-warning">
                            <?php
                              if(!empty($_GET['universty_err'])){
                                echo $_GET['universty_err'];
                              }
                             ?>
                          </div>
                    </div>
                    <div class="form-group col-lg-4">
                      <input type="date" name="date"  value="<?php echo $fetch_assoc['birth_date'];?>"  class="form-control">
                      <div class="err text-warning">
                        <?php
                          if(!empty($_GET['date_err'])){
                            echo $_GET['date_err'];
                          }
                         ?>
                      </div>
                    </div>

                  </div>
                  <div class="form-group  text-center">
                   <p>Present Picture</p>
                    <img src="upload/imgs/<?php  echo $fetch_assoc['picture'];?>" alt="" width="50">
                    </div>
                    <div class="form-group">
                        <input type="file" name="picture" class="form-control">
                    </div>
                     <div class="form-group row text-white">
                      <div class="col-md-12" style="color:white;">Your Hobbies:</div>

                        <div class="custom-control custom-checkbox  m-auto">
                          <input class="custom-control-input" name="hobbies[]"  value="Football" <?php if(in_array("Football",$b)){echo 'checked';}else{echo '';}?> type="checkbox" id="gridCheck1">
                          <label class="custom-control-label" for="gridCheck1">Football</label>
                        </div>
                         <div class="custom-control custom-checkbox  m-auto">
                          <input class="custom-control-input"  name="hobbies[]"value="Cricket" <?php if(in_array("Cricket",$b)){echo 'checked';}else{echo '';}?> type="checkbox" id="gridCheck1">
                          <label class="custom-control-label" for="gridCheck1">Cricket</label>
                        </div>
                        <div class="custom-control custom-checkbox  m-auto">
                          <input class="custom-control-input" name="hobbies[]" value="Cooking" <?php if(in_array("Cooking",$b)){echo 'checked';}else{echo '';}?> type="checkbox" id="gridCheck1">
                          <label class="custom-control-label" for="gridCheck1">Cooking</label>
                        </div>
                        <div class="custom-control custom-checkbox  m-auto">
                          <input class="custom-control-input"  name="hobbies[]" value="Video Games" <?php if(in_array("Video Games",$b)){echo 'checked';}else{echo '';}?> type="checkbox" id="gridCheck1">
                          <label class="custom-control-label" for="gridCheck1">Video Games</label>
                        </div>

                        <div class="err text-warning">
                          <?php
                            if(!empty($_GET['hobbies_err'])){
                              echo $_GET['hobbies_err'];
                            }
                           ?>
                        </div>
                  </div>
                  <div class="form-group">
                      <textarea name="comment" class="form-control" rows="2" placeholder="write your comment"><?php echo $fetch_assoc['user_comment']; ?></textarea>
                      <div class="err text-danger">
                        <?php
                          if (!empty($_GET['comment_err'])) {
                            echo $_GET['comment_err'];
                          }

                         ?>
                      </div>
                  <div class="form-row py-3">
                    <div class="form-group col-lg-4 m-auto">
                        <input type="submit" value="Update" class="form-control btn-primary">
                    </div>
                  </div>
              </form>
            </div>
        </div>
    </div>

</section>





<?php require 'dashboard-part/footer.php'?>
