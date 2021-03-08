<?php
include('security.php');

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

    $email_query = "SELECT * FROM lsi WHERE id='$id' ";
    $email_query_run = mysqli_query($connection, $email_query);
    if(mysqli_num_rows($email_query_run) > 0)
    {
        $_SESSION['status'] = "#";
        $_SESSION['status_code'] = "error";
        header('Location: register.php');  
    }
    else
    {
        if($password === $cpassword)
        {
            $query = "INSERT INTO lsi (id,name,age,address,birthdate,citizenship,mobile_number,place_from,date_of_arrival,status) VALUES ('$id','$name','$age','$address','$birthdate','$citizenship','$mobile_number','$place_from','$date_of_arrival','$status')";
            $query_run = mysqli_query($connection, $query);
            
            if($query_run)
            {
                // echo "Saved";
                $_SESSION['status'] = "#";
                $_SESSION['status_code'] = "success";
                header('Location: register.php');
            }
            else 
            {
                $_SESSION['status'] = "#";
                $_SESSION['status_code'] = "error";
                header('Location: register.php');  
            }
        }
        else 
        {
            $_SESSION['status'] = "#";
            $_SESSION['status_code'] = "warning";
            header('Location: register.php');  
        }
    }

}


if(isset($_POST['updatebtn']))
{
    $id = $_POST['edit_id'];
    $name = $_POST['edit_name'];
    $age = $_POST['edit_age'];
    $address = $_POST['edit_address'];
    $birthdate = $_POST['edit_birthday'];
    $citizenship = $_POST['edit_citizenship'];
    $mobile_number = $_POST['edit_number'];
    $place_from = $_POST['edit_place-from'];
    $date_of_arrival = $_POST['edit_date-arrival'];
    $status = $_POST['edit_status'];

    $query = "UPDATE lsi SET id='$id', name='$name', age='$age', address='$address', birthdate='$birthdate', citizenship='$citizenship', mobile_number='$mobile_number', place_from='$place_from', date_of_arrival='$date_of_arrival', status='$status' WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);    

    if($query_run)
    {
        $_SESSION['success'] = "Your Data is Updated";
        $_SESSION['status_code'] = "success";
        header('Location: register.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT Updated";
        $_SESSION['status_code'] = "error";
        header('Location: register.php'); 
    }
}


if(isset($_POST['delete_btn']))
{
    $id = $_POST['delete_id'];

    $query = "DELETE FROM lsi WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query); 

        if($query_run)
    {
        $_SESSION['success'] = "Your Data is DELETED";
        header('Location: register.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT DELETED";
        header('Location: register.php'); 
    }

}


?>