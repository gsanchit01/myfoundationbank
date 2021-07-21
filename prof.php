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
		<title><?php echo $row["name"]; ?> - Profile</title>
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
			&nbsp; &nbsp; &nbsp; &nbsp;
			<div class="alig pt-2 pl-5 pr-2">
				<p><b>Phone-</b> <?php  echo $row["phone"];  ?></p>
			</div>
			</div>
			<div class="alig pt-2 pl-1 pr-2 disp">
				<p><b>Current Balance-</b> <?php  echo $row["currbal"];  ?></p>
			</div>
			<hr>
			<h5>Transactions</h5><br>
			<div id="no-more-tables">
			<table class="col-md-12 table-bordered table-dark table-hover table-sm pb-3 pt-3 table-striped table-condensed cf">
				<thead class="cf ">
					<tr>
						<th>Sr No.</th>
						
						<th class="numeric">Transaction ID</th>
						<th class="numeric">Sender</th>
						<th class="numeric">Reciver</th>
						<th class="numeric">Amount</th>
						
					</tr>
				</thead>
				<tbody>
				<?php 
				include('open.php');
				$qur="SELECT * FROM `transfers` WHERE sender='$userid'";
				$result = $con->query($qur);
				$count=mysqli_num_rows($result);
 
			  for ($i=1; $i<=$count;$i++) { 
			  $rows = $result->fetch_assoc();
			  ?>

	  <tr>
			  <td data-title=Sr No.>
				 <?php echo $i; ?>
			  </td>
			  <td data-title=Transaction ID>
				 <?php echo $rows["tranxid"]; ?>
			  </td>
			  <td data-title=Sender>
				<?php echo $rows["sender"]; ?>
			  </td>
			  <td data-title=Reciver>
				<?php echo $rows["reciver"]; ?>
			  </td>
			  <td data-title=Amount>
				<?php echo $rows["amount"]; ?>
			  </td>
			  
			  </tr>
			  <?php
			  }
				$qur="SELECT * FROM `transfers` WHERE reciver='$userid'";
				$result = $con->query($qur);
				$count=mysqli_num_rows($result);
 
			  for ($i=1; $i<=$count;$i++) { 
			  $rowr = $result->fetch_assoc();
			  ?>
		<tr>
			  <td data-title=Sr No.>
				 <?php echo $i; ?>
			  </td>
			  <td data-title=Transaction ID>
				 <?php echo $rowr["tranxid"]; ?>
			  </td>
			  <td data-title=Sender>
				<?php echo $rowr["sender"]; ?>
			  </td>
			  <td data-title=Reciver>
				<?php echo $rowr["reciver"]; ?>
			  </td>
			  <td data-title=Amount>
				<?php echo $rowr["amount"]; ?>
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
</div>

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
	</body>
</html>