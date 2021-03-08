  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>


  <?php


$connection = mysqli_connect("localhost","root","","db_lsi");

if(isset($_POST['lsi']))
{
    $id = $_POST['id'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $birthdate = $_POST['birthdate'];
    $citizenship = $_POST['citizenship'];
    $mobile_number = $_POST['mobile_number'];
    $place_from = $_POST['place_from'];
    $date_of_arrival = $_POST['date_of_arrival'];
    $status = $_POST['status'];

    {
    $query = "INSERT INTO lsi (id,name,age,address,birthdate,citizenship,mobile_number,place_from,date_of_arrival,status) VALUES ('$id','$name','$age','$address','$birthdate','$citizenship','$mobile_number','$place_from','$date_of_arrival','status')";
        $query_run = mysqli_query($connection, $query);
    
        if($query_run)
        {
            echo "done";
            $_SESSION['success'] =  "Admin is Added Successfully";
            header('Location: personal-info.php');
        }
        else 
        {
            echo "not done";
            $_SESSION['status'] =  "Admin is Not Added";
            header('Location: personal-info.php');
        }
    }
}

?>