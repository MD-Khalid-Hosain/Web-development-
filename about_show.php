<?php
  require 'session.php';
    require 'dashboard-part/header.php';
    require 'db.php';

?>


<?php
    $select = "SELECT * FROM about_section";
    $select_result = mysqli_query($db_connection, $select);

?>

<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 position-relative">
               <div class="text-center bg-dark text-success py-3"><h2>Banner Information Table</h2></div>
                <div class="table-responsive">
                     <table class="table table-striped table-dark text-center">
                        <tr>
                            <th>ID</th>
                            <th>About Picture</th>
                            <th>About Description</th>
                            <th>About Options </th>
                            <th colspan="3">Action</th>
                        </tr>
                        <?php foreach($select_result as $about_info){?>
                        <tr>
                            <td><?php echo $about_info['id']; ?></td>
                            <td><img src="upload/about/<?php echo $about_info['about_picture']; ?>" alt="" width="100"></td>
                            <td><?php echo substr($about_info['about_des'],0,30).'.....more'; ?></td>
                            <td><?php echo substr($about_info['why_choose'],0,30).'.....more'; ?></td>


                          <td>
                                  <a type="button" href="about_active.php?id=<?php echo $about_info['id'];?>" class="<?=($about_info['status']==1)?'btn btn-success':'btn btn-danger'?>"><?=($about_info['status']==1)?'Active':'Deactive'?></a>
                          </td>


                          <?php if($_SESSION['roll']==1){?>
                            <td><a type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalCenter<?php echo $about_info['id'];?>">
                            Delete
                            </a></td>
                            <?php } ?>
                        </tr>

                        <!-- Modal -->
                            <div class="modal fade" id="exampleModalCenter<?php echo $about_info['id'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                                    <a href="service_delete.php?id=<?php echo $banner_info['id'];?>" class="btn btn-danger">Delet</a>
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
