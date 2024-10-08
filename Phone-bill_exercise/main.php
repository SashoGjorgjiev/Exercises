<?php

require_once('PhoneNumber.php');
require_once('Call.php');
require_once('PhoningBill.php');

$naTeodora = new PhoneNumber('Teodora', 389,);
$naTeodora->setNumberPhone('0722343');
$naTeodora->getNumberPhone();
$call1 = new Call($naTeodora, 120);
$call2 = new Call($naTeodora, 60);
$call3 = new Call($naTeodora, 90);
$phoningBill = new PhoningBill($naTeodora, [$call1, $call2, $call3]);

?>

<!DOCTYPE html>
<html>

<head>
    <title>PhoneNumberCompany</title>
    <meta charset="utf-8" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />

    <!-- Latest compiled and minified Bootstrap 4.6 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <!-- CSS script -->
    <link rel="stylesheet" href="style.css">
    <!-- Latest Font-Awesome CDN -->
    <script src="https://kit.fontawesome.com/3257d9ad29.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <h1>PhoneNumberCompany</h1>

        <div class="row">
            <div class="col-10">
                <h2>Phone number : <?php echo $naTeodora->getPrefix() . ' ' .   $naTeodora->getNumberPhone(); ?> </h2>
                <h2>Name: <?php echo   $naTeodora->getName(); ?></h2>
                <h2>Number Of Calls: <?php echo $phoningBill->getNumberOfCalls($phoningBill); ?> Total Duration: <?php echo $phoningBill->calculateTotalMinutes(); ?> minutes seconds <?php echo $call1->callDuration + $call2->callDuration + $call3->callDuration; ?></h2>
                <h3>Total cost: <?php echo $phoningBill->calculateTotalBill(); ?></h3>
            </div>
        </div>
    </div>
    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="ha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

    <!-- Latest Compiled Bootstrap 4.6 JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
</body>

</html>