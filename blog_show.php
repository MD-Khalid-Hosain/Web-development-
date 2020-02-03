<?php
  require 'session.php';
    require 'dashboard-part/header.php';
    require 'db.php';

    $id = $_SESSION['id']

?>


<?php
    if($_SESSION['roll']!=5){
      $select = "SELECT * FROM blog_section WHERE status=1";
      $select_result = mysqli_query($db_connection, $select);
    }
    else{
      $select = "SELECT * FROM blog_section WHERE user_id = '$id' and status=1";
      $select_result = mysqli_query($db_connection, $select);
    }




?>

<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 position-relative">
               <div class="text-center bg-dark text-success py-3"><h2>Blog posts</h2></div>
                <div class="table-responsive">
                     <table class="table table-striped table-dark text-center">
                       <tr>
                           <th>ID</th>
                           <th>Blog Title</th>
                           <th>Blog Description</th>
                           <th>by</th>
                           <th>Status</th>
                           <th colspan="3">Action</th>
                       </tr>
                       <?php foreach($select_result as $blog_info){?>
                       <tr>
                           <td><?php echo $blog_info['id']; ?></td>
                           <td><?php echo $blog_info['blog_title']; ?></td>
                           <td><?php echo $blog_info['blog_des']?></td>

                           <?php
                            $user_id = $blog_info['user_id'];
                            $who_post = "SELECT * FROM users_info WHERE id='$user_id'";
                            $result = mysqli_query($db_connection,$who_post);
                            $after_assoc_result = mysqli_fetch_assoc($result);
                            ?>
                           <td><?php echo $after_assoc_result['fname'];?></td>
                            <td> <a type="button" href="active_blog_post.php?id=<?php echo $blog_info['id'];?>" class="<?=($blog_info['status']==1)?'btn btn-success':'btn btn-danger'?>"><?=($blog_info['status']==1)?'Active':'Deactive'?></a> </td>

                                                              <!--=============
                                                               Start Edit button
                                                              ================  -->
                            <?php if($_SESSION['roll']==1 || $_SESSION['roll']==2 || $_SESSION['roll']==3 || $_SESSION['roll']==5 ||$_SESSION['roll']==0 ){ ?>
                            <td><a href="edit_blog.php?id=<?php echo $blog_info['id'];?>" class="btn btn-warning">Edit</a></td>
                          <?php } ?>
                                                            <!--=============
                                                             end Edit button
                                                            ================  -->

                          <?php if($_SESSION['roll']==1){?>
                            <td><a type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalCenter<?php echo $blog_info['id'];?>">
                            Delete
                            </a></td>
                              <?php } ?>
                        </tr>
                        <!-- Modal -->
                            <div class="modal fade" id="exampleModalCenter<?php echo $blog_info['id'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                              <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title text-danger" id="exampleModalLongTitle">Oh Nooo!!! There is a Delet Button</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    ভাই আমি তোর কি ক্ষতি করছি???????
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                                    <a href="social_delete.php?id=<?php echo $blog_info['id'];?>" class="btn btn-danger">Delet</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </div>
    </div>

</section>



<?php require 'dashboard-part/footer.php'?>
