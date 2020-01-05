<?php
  require 'session.php';
    require 'dashboard-part/header.php';
    require 'db.php';

?>


<?php
    $select = "SELECT * FROM users_info WHERE status=1 ORDER by id DESC";
    $select_result = mysqli_query($db_connection, $select);

?>
<?php if($_SESSION['roll'] !=0) {?>
<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 position-relative">
               <div class="text-center bg-dark text-success py-3"><h2>Users Information Table</h2></div>
               <div class="text-center bg-dark text-success"><a href="index.php" class="btn btn-warning ">Go to Registration</a></div>
                <div class="table-responsive">
                     <table class="table table-striped table-dark text-center">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Emali</th>
                            <th>Password</th>
                            <th>Gender</th>
                            <th>Country</th>
                            <th>University</th>
                            <th>Date of Birth</th>
                            <th>Photo</th>
                            <th>Created time</th>
                            <th colspan="3">Action</th>
                        </tr>
                        <?php foreach($select_result as $selected_value){?>
                        <tr>
                            <td><?php echo $selected_value['id']; ?></td>
                            <td><?php echo $selected_value['fname']; ?></td>
                            <td><?php echo $selected_value['email']; ?></td>
                            <td><?php echo $selected_value['pass']; ?></td>
                            <td><?php echo $selected_value['gen']; ?></td>
                            <td><?php echo $selected_value['country']; ?></td>
                            <td><?php echo $selected_value['university']; ?></td>
                            <td><?php echo $selected_value['birth_date']; ?></td>
                            <td><img src="upload/imgs/<?php echo $selected_value['picture']; ?>" alt="" width="50"></td>
                            <td><?php echo $selected_value['create_datetime']; ?></td>
                            <?php if($_SESSION['roll']==0 || $_SESSION['roll']==1 || $_SESSION['roll']==2 || $_SESSION['roll']==3 ){ ?>
                            <td><a href="individual_info.php?id=<?php echo $selected_value['id'];?>" class="btn btn-primary">View</a></td>
                            <?php } ?>

                          <?php if($_SESSION['roll']==1){?>
                            <td><a type="button" class="btn btn-danger" href="delete.php?id=<?php echo $selected_value['id'];?>">
                            Delete
                            </a></td>
                            <td><a type="button" class="btn btn-success" href="undo.php?id=<?php echo $selected_value['id'];?>">
                            Undo
                            </a></td>
                              <?php } ?>
                        </tr>

                        <?php } ?>
                    </table>
                </div>
            </div>
        </div>
    </div>

</section>
<?php }
  else { ?>
    <div class="text-danger">
      <h1>Sorry !!!! you have no right to see this page</h1>
    </div>
<?php  }
 ?>


<?php require 'dashboard-part/footer.php'?>
