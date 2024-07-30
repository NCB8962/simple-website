<?php
$connection = mysqli_connect("localhost", "root", "", "reman");

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['updatedata'])) {   
    $update_id = $_POST['update_id'];
    
    $date = $_POST['date'];
    $chassis_number = $_POST['chassis_number'];
    $engine_number = $_POST['engine_number'];
    $model = $_POST['model'];
    $job_number = $_POST['job_number'];


    $query = "UPDATE crud SET date='$date', chassis_number='$chassis_number', engine_number='$engine_number', model='$model', job_number='$job_number' WHERE id='$update_id'";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) {
        echo '<script>alert("Data Updated");</script>';
        header("Location: home1.php");
        exit();
    } else {
        echo '<script>alert("Data Not Updated");</script>';
    }
}
?>
