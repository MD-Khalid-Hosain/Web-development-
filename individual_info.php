
<?php
require 'session.php';
require 'dashboard-part/header.php';
 require 'db.php';
?>
<?php
    $id = $_GET['id'];
    $select = "SELECT * FROM users_info WHERE id=$id";
    $select_result = mysqli_query($db_connection, $select);
    $fetch_assoc = mysqli_fetch_assoc($select_result);
?>
<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
               <div class="text-center bg-dark text-success py-3"><h2>Individual Information</h2></div>
                <div class="table-responsive">
                    <table class="table table-striped table-dark">
                        <tr>
                            <th>Picture</th>
                            <td><img src="upload/imgs/<?php echo $fetch_assoc['picture'] ?>" alt="" width="100"></td>
                        </tr>
                        <tr>
                            <th>Name</th>
                            <td><?php echo $fetch_assoc['fname'] ?></td>
                        </tr>
                         <tr>
                            <th>Email</th>
                            <td><?php echo $fetch_assoc['email'] ?></td>
                        </tr>
                         <tr>
                            <th>Password</th>
                            <td><?php echo $fetch_assoc['pass'] ?></td>
                        </tr>
                         <tr>
                            <th>Gender</th>
                            <td><?php echo $fetch_assoc['gen'] ?></td>
                        </tr>
                         <tr>
                            <th>Country</th>
                            <td><?php echo $fetch_assoc['country'] ?></td>
                        </tr>
                         <tr>
                            <th>Date of birth</th>
                            <td><?php echo $fetch_assoc['birth_date'] ?></td>
                        </tr>
                         <tr>
                            <th>University</th>
                            <td><?php echo $fetch_assoc['university'] ?></td>
                        </tr>
                         <tr>
                            <th>Comment</th>
                            <td><?php echo $fetch_assoc['user_comment'] ?></td>
                        </tr>
                   </table>
                </div>
            </div>
        </div>
    </div>
</section>




















<?php require 'dashboard-part/footer.php'?>
