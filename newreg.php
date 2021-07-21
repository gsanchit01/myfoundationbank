<?php
include('open.php');
 if(isset($_POST['name'])){
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $currbal = $_POST['currbal'];   
    $sql = "INSERT INTO `customers`(`name`, `email`, `phone`, `currbal`) VALUES ('$name','$email','$phone','$currbal')";
    if($con->query($sql) == true){
    echo '<script>alert("Registerd Sucessfully")</script>';        
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }
    $con->close();
}
?>

<!doctype html>
<html lang="en">
    <head>
        <title>New Registration</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        
<nav class="navbar navbar-dark navbar-expand-sm bg-dark fixed-top">
    <div class="container">
        <a href="./" class="navbar-brand">
            <i class="fas fa-blog"></i> &nbsp;
            Foundation Bank
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="navbarCollapse" class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="./" class="nav-link active">
                        Home
                    </a>
                </li>
                <li class="nav-item">
                    <a href="./newreg.php" class="nav-link active">
                        New Customers
                    </a>
                </li>
                <li class="nav-item">
                    <a href="./table.php" class="nav-link active">
                        All Customers
                    </a>
                </li>
                <li class="nav-item">
                    <a href="./transfer.php" class="nav-link active">
                        Transfer
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="backg">
    <div class="contain">
        <div class="content d-flex justify-content-center bg-tran pt-0">
            <div class="card px-1 py-4">
                <form action="newreg.php" method="POST" class="card-body">
                    <h3 class="information mt-4">New User Registration</h3>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <input class="form-control" type="text" name="name" placeholder="Name" required> 
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <div class="input-group"> 
                                    <input class="form-control" name="email" type="email" placeholder="Email ID" > 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <div class="input-group"> 
                                    <input class="form-control" type="tel" name="phone" placeholder="Mobile No." pattern="[0-9]{10}"> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <div class="input-group"> 
                                    <input class="form-control" type="number" name="currbal" placeholder="Starting Balance"> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-my btn-block confirm-button">Confirm</button>
                </form>
            </div>
        </div>
    </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </body>
</html>