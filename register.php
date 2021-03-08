<?php
session_start();
include('security.php');
include('includes/header.php'); 
include('includes/navbar.php'); 
?>
<head>
<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/personal-info.css">
</head>

<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <div class="register-photo">
        <div class="form-container">      
           <form action="code.php" method="post">
                <h2 class="text-center"><strong><img src="assets/img/carigara.png" height="70px;"></i> Please </strong>complete the information below.</h2>
                <div class="form-group"><input class="form-control" required="" type="text" name="name" placeholder="Name" autocomplete="off"></div>
                <div class="form-group"><input class="form-control" required="" type="number" name="age" placeholder="Age" autocomplete="off"></div>
                <div class="form-group"><input class="form-control" required="" type="text" name="address" placeholder="Address" autocomplete="off"></div>
                <div class="form-group">Birthdate:<input class="form-control" required="" type="Date" name="birthday" placeholder="Birthdate"></div>
                <div class="form-group"><input class="form-control" required="" type="text" name="citizenship" placeholder="Citizenship" autocomplete="off"></div>
                <div class="form-group"><input class="form-control" required="" type="number" name="number" placeholder="Mobile Number" autocomplete="off"></div>
                <div class="form-group"><input class="form-control" required="" type="text" name="place-from" placeholder="Place From" autocomplete="off"></div>
                <div class="form-group">
                <div class="form-group">Date of Arrival:<input class="form-control" required="" type="Date" name="date-arrival" placeholder="Date of Arrival" autocomplete="off"></div>
                <div class="form-group"><input class="form-control" required="" type="text" name="place-from" placeholder="Status" autocomplete="off"></div>
                </div>
                <div class="form-group"><button class="btn btn-primary btn-block" name="lsi" type="submit">Finish Up</button>
                </div>
            </form>
        </div>
</div>     
    </div>
  </div>
</div>


<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Profile 
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
              Add 
            </button>
    </h6>
  </div>

  <div class="card-body">

    <?php
    if(isset($_SESSION['success']) && $_SESSION['success'] !='')
    {
      echo '<h2 class="bg-primary"> '.$_SESSION['success'].'</h2>';
      unset($_SESSION['success']);
    }

    if(isset($_SESSION['status']) && $_SESSION['success'] !='')
    {

      echo '<h2 class="bg-danger"> '.$_SESSION['success'].'</h2>';
      unset($_SESSION['status']);
    }    

    ?>

    <div class="table-responsive">

            <?php
            $connection = mysqli_connect("localhost","root","","db_lsi");
                $query = "SELECT * FROM lsi";
                $query_run = mysqli_query($connection, $query);
            ?>

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Age</th>
            <th>Address</th>
            <th>Birthdate</th>
            <th>Citizenship</th>
            <th>Mobile Number</th>
            <th>Place From</th>
            <th>Date of Arrival</th>
            <th>Status</th>
            <th>Edit</th>
            <th>Delete</th>
          </tr>
        </thead>
        <tbody>

            <?php
              if(mysqli_num_rows($query_run) > 0)        
                        {
                            while($row = mysqli_fetch_assoc($query_run))
                            {
            ?>
     
          <tr>
            <td><?php  echo $row['id']; ?></td>
            <td><?php  echo $row['name']; ?></td>
            <td><?php  echo $row['age']; ?></td>
            <td><?php  echo $row['address']; ?></td>
            <td><?php  echo $row['birthdate']; ?></td>
            <td><?php  echo $row['citizenship']; ?></td>
            <td><?php  echo $row['mobile_number']; ?></td>
            <td><?php  echo $row['place_from']; ?></td>
            <td><?php  echo $row['date_of_arrival']; ?></td>
            <td><?php  echo $row['status']; ?></td>            
            
            <td>
                <form action="register_edit.php" method="post">
                    <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                    <button  type="submit" name="edit_btn" class="btn btn-success">Update</button>
                </form>
            </td>
            <td>
                <form action="code.php" method="post">
                  <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                  <button type="submit" name="delete_btn" class="btn btn-danger">Delete</button>
                </form>
            </td>
          </tr>

                       <?php
                            } 
                        }
                        else {
                            echo "No Record Found";
                        }
                        ?>          
        
        </tbody>
      </table>

    </div>
  </div>
</div>

</div>
<!-- /.container-fluid -->

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>

<?php
include('includes/scripts.php');
?>