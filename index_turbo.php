<?php
session_start();
include "db_conn.php";
include "fix_bar.php";

// Check if the form has been submitted
$form_submitted = isset($_SESSION['form_submitted']) ? $_SESSION['form_submitted'] : false;

// Clear the flag after checking
if ($form_submitted) {
    unset($_SESSION['form_submitted']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.111.3">


    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/navbar-static/">

    

    

    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Turbocharger</title>
<head>
<body>
    <nav class="navbar navbar-light bg-light justify-content-center fs-3 mb-5">
        Turbocharger Remanufacturing Process
    </nav>

    <div class="container">
        <?php
        if(isset($_GET['msg'])){
            $msg = $_GET['msg'];
            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            '.$msg.'
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
        }
        ?>
            <form action="" method="GET">
                <div class="input-group mb-3">
                    <input type="text" name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" class="form-control" placeholder="Search data">
                    <button type="submit" class="btn btn-primary">Search</button>
                </div>
            </form>
        <table class="table table-hover text-center">
            <thead class="table-dark">
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Date</th>
                <th scope="col">Chassis Number</th>
                <th scope="col">Engine_number</th> 
                <th scope="col">Model</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
    <?php
    // Check if the search box is used
    if (isset($_GET['search'])) {
        $filtervalues = mysqli_real_escape_string($conn, $_GET['search']);
        // Filter query based on the search input
        $query = "SELECT * FROM crud WHERE CONCAT(chassis_number, engine_number, date) LIKE '%$filtervalues%'";
    } else {
        // Default query to display all data
        $query = "SELECT * FROM `crud`";
    }

    // Execute the query
    $query_run = mysqli_query($conn, $query);

    // Check if the query execution was successful
    if ($query_run) {
        $no = 1; // Initialize row number

        // Loop through the result set and display data
        while ($row = mysqli_fetch_assoc($query_run)) {
    ?>
            <tr>
                <th><?php echo $no; ?></th>
                <th><?php echo $row['date']; ?></th>
                <th><?php echo $row['chassis_number']; ?></th>
                <th><?php echo $row['engine_number']; ?></th>
                <th><?php echo $row['model']; ?></th>
                <td>
                    <a href="turbo/edit_turbo.php?id=<?php echo $row['id']; ?>" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
                    <a href="turbo/view_turbo.php?id=<?php echo $row['id']; ?>" class="link-dark"><i class="fa-solid fa-eye fs-5 me-3"></i></a>
                    <?php if (!isset($_SESSION['form_submitted']) || !$_SESSION['form_submitted']) { ?>
                        <a href="turbo/add_turbo.php?id=<?php echo $row['id']; ?>" class="btn btn-dark addButton" id="addButton_<?php echo $row['id']; ?>">Add</a>
                    <?php } ?>
                </td>
            </tr>
    <?php
            $no++;
        }
    } else {
        // Display error message if query fails
        echo "Error: " . mysqli_error($conn);
    }
    ?>
</tbody>
            </table>
                </div>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="physical/script.js"></script>
                    

<body>
</html>