<!doctype html>
<html lang="en">
    <head>
        <title>Transfer</title>
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
            <h3>Transfer</h3><br>
            <form action="transcess.php" method="POST">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="input">Transfer From</label>
      <select name="sender" class="form-control">
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
    <input type="text" class="form-control" name="amount" id="inputAddress" placeholder="Amount">
  </div>
   <button type="submit" class="btn btn-primary">Transfer</button>
</form>
           

</div>
</div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </body>
</html>