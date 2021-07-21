<!doctype html>
<html lang="en">
    <head>
        <title>All Customers</title>
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
    <div class="content">
        <div id="no-more-tables">
            <table class="col-md-12 table-bordered table-dark table-hover table-sm pb-3 pt-3 table-striped table-condensed cf">
                <thead class="cf ">
                    <tr>
                        <th>Sr No.</th>
                        <th>A/C No.</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th class="numeric">Current Balance</th>
                        <th>Transfer</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php 
                include('open.php');
                $qur="SELECT * FROM `customers`";
                $result = $con->query($qur);
                $count=mysqli_num_rows($result);
 
              for ($i=1; $i<=$count;$i++) { 
              $row = $result->fetch_assoc();
              ?>
      <tr>
              <td data-title=Sr No.>
                 <?php echo $i; ?>
              </td>
                <td data-title=A/C No.>
                 <a href="./prof.php?userid=<?php echo $row['userid']; ?>"><?php echo $row["userid"]; ?></a>
              </td>
              <td data-title=Name>
                 <?php echo $row["name"]; ?>
              </td>
              <td data-title=Email>
                <?php echo $row["email"]; ?>
              </td>
              <td data-title=Phone>
                <?php echo $row["phone"]; ?>
              </td>
              <td data-title=Current Balance>
                <?php echo $row["currbal"]; ?>
              </td>
              <td>
                <button onclick="document.location ='trans.php?userid=<?php echo $row['userid']; ?>'" class="button btn btn-outline-dark back m-0">Transfer</button>
              </td>
              </tr>
              <?php
              }
        ?>
                </tbody>
            </table>
        </div>
   
    </div>
</div>
</div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </body>
</html>