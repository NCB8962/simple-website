<?php


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>NGU CHUNG BENG & SONS SDN BHD</title>

    <style>
body, html {
  height: 100%;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

.bg-image {
  /* The image used */
  background-image: url("factory.jpeg");
  
  /* Add the blur effect */
  
  /* Full height */
  height: 100%; 
  
  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

/* Position text in the middle of the page/image */
.bg-text {
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
  color: white;
  font-weight: bold;
  border: 3px solid #f1f1f1;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 80%;
  text-align: left;
}

.bg-text > .header{
    background: url(new.png) center center no-repeat;
    width: 100%;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    font-size: 30px;
    font-weight: bold;
    position: absolute;
    top: 0%;
    text-transform: uppercase;
    text-align: center;
    padding: 80px 0;
    border-top-right-radius: 15px;
    border-top-left-radius: 15px;
    text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
}

.bg-text > .body{
    padding: 20px;
}
</style>

</head>
<body>
    <div class="bg-image"></div>
    <div class="bg-text">
        <div class="header"></div>
        <div class="container d-flex justify-content-center align-items-center body"
        style="min-height: 100vh">
            <form class="border shadow p-3 rounded" action="php/check-login.php" method="post" style="width: 450px;">
                <h1 class="text-center p-3">LOGIN</h1>
                <?php if (isset($_GET['error'])) { ?>
                <div class="alert alert-danger" role="alert">
                    <?=$_GET['error']?>
                </div>
                <?php } ?>
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" name="username" id="username">
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" id="password">
                </div>

                <div class="mb-1">
                    <label class="form-label">Select User:</label>
                </div>
                <select class="form-select mb-3" name="role"
                        aria-label="Default select example">
                    <option selected>Open this select menu</option>
                    <option value="user">User</option>
                    <option value="supervisor">Supervisor</option>
                    <option value="engineer">Engineer</option>
                    <option value="profesional">Profesional Engineer</option>

                </select>

                <button type="submit" class="btn btn-primary">Login</button>
            </form>


        </div>


    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<body>
</html>