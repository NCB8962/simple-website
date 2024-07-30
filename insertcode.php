<?php

$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'reman');

if(isset($_POST['insertdata']))
{
    $date = $_POST['date'];
    $chassis_number = $_POST['chassis_number'];
    $engine_number = $_POST['engine_number'];
    $model = $_POST['model'];

    $query = "INSERT INTO crud (`date`,`chassis_number`,`engine_number`,`model`) VALUES ('$date','$chassis_number','$engine_number','$model')";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        echo '<script> alert("Data Saved"); </script>';
        header('Location: home1.php');
    }
    else
    {
        echo '<script> alert("Data Not Saved"); </script>';
    }
}

?>