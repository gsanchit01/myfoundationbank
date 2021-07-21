<?php          
include('open.php');
$userid = $_GET['userid'];
$qur="SELECT * FROM `customers` WHERE userid='$userid'";
$result = $con->query($qur);
$row = $result->fetch_assoc();
?>
<!doctype html>
<html lang="en">
    <head>
        <title><?php echo $row["name"]; ?> - Transfer</title>
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
    <div class="content pt-6 pl-5 pr-5">
        <div class="left">
            <div>
                 <img class="med" src="https://static.vecteezy.com/system/resources/thumbnails/001/234/725/small/side-portrait-of-a-black-man.jpg" height="150px" alt="...">
            </div>
            <div>
                <h3 class="pt-4"><?php  echo $row["name"];  ?></h3>
            </div><hr class="mr-2">
            <div>
                <a href="./" class="nav-link">
                        Home
                    </a>
                    <a href="./table.php" class="nav-link">
                        All Customers
                    </a>
                    <a href="./newreg.php" class="nav-link">
                        New Customers
                    </a>
                    <a href="./transfer.php" class="nav-link">
                        Transfer
                    </a>
            </div>
        </div>
        <div class="right">
            <div>
                
            </div>
            <div class="pt-4 pr-2 disp">
            <div class="alig pt-2 pr-2">
                <p><b>Email-</b> <?php  echo $row["email"];  ?></p>
            </div>
            <div class="alig pt-2 pl-5 pr-2">
                <p><b>Phone-</b> <?php  echo $row["phone"];  ?></p>
            </div>
            </div>
            <div class="alig pt-2 pl-1 pr-2 disp">
                <p><b>Current Balance-</b> <?php  echo $row["currbal"];  ?></p>
            </div>
            <hr>
            <h5>Transfer</h5><br>
            <form action="transcess.php" method="POST">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="input">Transfer From</label>
      <select name="sender" class="form-control">
        <option selected><?php  echo $userid;  ?> - <?php  echo $row["name"];  ?></option>
      </select>
    </div>
    <div class="form-group col-md-6">
      <label for="input">Transfer To</label>
      <select name="reciver" class="form-control">
        <option selected>Choose</option>
        <?php 
                include('open.php');
                $qur="SELECT * FROM `customers`";
                $result = $con->query($qur);
                $count=mysqli_num_rows($result);
 
              for ($i=1; $i<=$count;$i++) { 
              $roww = $result->fetch_assoc();
              ?>
        <option><?php echo $roww["userid"]; ?> - <?php echo $roww["name"]; ?></option>
    <?php } ?>
      </select>
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Amount</label>
    <input type="number" name="amount" class="form-control" id="inputAddress" placeholder="Amount">
  </div>
   <button type="submit" class="btn btn-primary">Transfer</button>
</form>
           
        </div>
    </div>
</div>
</div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </body>
</html>