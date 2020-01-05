<?php
  require 'session.php';
    require 'dashboard-part/header.php';
    require 'db.php';

?>


<?php
    $select = "SELECT * FROM service_section";
    $select_result = mysqli_query($db_connection, $select);

?>

<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 position-relative">
               <div class="text-center bg-dark text-success py-3"><h2>Service Information Table</h2></div>
                <div class="table-responsive">
                     <table class="table table-striped table-dark text-center">
                        <tr>
                            <th>ID</th>
                            <th>Service Title</th>
                            <th>Service Description</th>
                            <th>Service Picture</th>
                            <th colspan="3">Action</th>
                        </tr>
                        <?php foreach($select_result as $service_info){?>
                        <tr>
                            <td><?php echo $service_info['id']; ?></td>
                            <td><?php echo $service_info['service_title']; ?></td>
                            <td><?php echo substr($service_info['service_des'],0,20).'.....more'; ?></td>


                            <td><img src="upload/service/<?php echo $service_info['service_picture']; ?>" alt="" width="100"></td>


                          <?php if($_SESSION['roll']==1){?>
                            <td><a type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalCenter<?php echo $service_info['id'];?>">
                            Delete
                            </a></td>
                              <?php } ?>
                        </tr>
                        <!-- Modal -->
                            <div class="modal fade" id="exampleModalCenter<?php echo $service_info['id'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                                    <a href="service_delete.php?id=<?php echo $service_info['id'];?>" class="btn btn-danger">Delet</a>
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
