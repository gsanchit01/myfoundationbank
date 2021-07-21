<!DOCTYPE html>
<html>
<head><meta http-equiv = "refresh" content = "0; url = table.php" ></head>
<body>
<?php
include('open.php');
    $sender = $_POST['sender'];
    $reciver = $_POST['reciver'];   
    $amount = $_POST['amount']; 
    $send = explode(" - ", $sender);
    $recive = explode(" - ", $reciver);

    $qur="SELECT * FROM `customers` WHERE userid='$send[0]'";
    $result = $con->query($qur);
    $rowsen = $result->fetch_assoc();

    $qur="SELECT * FROM `customers` WHERE userid='$recive[0]'";
    $result = $con->query($qur);
    $rowrec = $result->fetch_assoc();
    $fiamse= $rowsen["currbal"]-$amount;
    if($fiamse<0){
        echo '<script>alert("Sorry, Sender does not have sufficient balance")</script>';
    }
    else{
        $fiamre= $rowrec["currbal"]+$amount;
        $sqlse="UPDATE `customers` SET `currbal`='$fiamse' WHERE `userid`='$send[0]'";
        $sqlre="UPDATE `customers` SET `currbal`='$fiamre' WHERE `userid`='$recive[0]'";
        $sqlup="INSERT INTO `transfers`(`sender`, `reciver`, `amount`) VALUES ('$send[0]','$recive[0]','$amount')";
        if($con->query($sqlse) == true){
            if($con->query($sqlre) == true){
                if($con->query($sqlup) == true){
            echo '<script>alert("Funds Transfer Successfull")</script>';
        }
        else{
            echo "ERROR: $sqlse <br> $sqlre <br> $con->error";
        }
    }
}
        $con->close();
}
?>

</body>
</html>