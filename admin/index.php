<?php
include('includes/header.php');
include('../middleware/adminMiddleware.php');
include('../function/statistical.php');

$countOrder = countOrder();
$countWait = countWait();
$countCan = countCanncel();
$countSucc = countSuccess();
$total = gettotal();
$totalWait = gettotalwait();
$totalCancel = gettotalCancel();
$totalSucc = gettotalSucc();
$countAcc = countAcc();
?>

        <?php
        include('includes/footer.php');
        ?>