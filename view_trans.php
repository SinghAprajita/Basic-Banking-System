<!DOCTYPE html>
<html lang="en">
  <head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width,initial-scale=1">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="style.css">

        <style type="text/css">
        table,th,tr,td{
            border: 2px solid black;
            padding: auto;
            border-collapse:collapse;
            border-spacing: 4px;
            table-layout: inherit;
            text-align: center;
            font-size: 15px;

        }
        th,td{
            padding: 10px;
        }
        
        
        body{
            padding-top: 35px;
            
        }
        </style>
        <title>
            <p>Transaction History</p>

        </title>
    </head>
    <body>
    <div class="container">
    <div class="nav navbar-inverse navbar-fixed-top">
        <nav>
            <ul class="nav navbar-nav navbar-left">
                <li class="active"> <a href="index.html"><b>TSF Bank</b></a></li> 
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="view_trans.php">Transaction History</span></a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="transfer.php">Amount Transfer</span></a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="customer.php">Customers</span></a></li>
            </ul>
        </nav>
    </div>
</div>


<h1 style="text-align: center ;">Transaction History</h1>


<?php
$con=mysqli_connect("localhost","root","","banking");
if(!$con)
die("server could not connect");
$sql="select * from transaction_history";
$rs=mysqli_query($con,$sql);
echo"<table align='center';>";
echo"<tr><th>SNo.</th><th>Sender</th><th>Receiver</th><th>Amount</th><th>Date and Time</th></tr>";
while($rows=mysqli_fetch_assoc($rs))
{
echo "<tr><td>".$rows["SNo."]."</td>";
echo "<td>".$rows["Sender"]."</td>";
echo "<td>".$rows["Receiver"]."</td>";
echo "<td>".$rows["Amount"]."</td>";
echo "<td>".$rows["Date&Time"]."</td></tr>";
}
echo "</table>";
?>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>


<div class="bottom"  style="background-color: black;">
    <footer style="height: 40px ; color: cornsilk; padding-top: 5px;">
        <p style="text-align: center;">Copyright © Aprajita Singh. The Sparks Foundation</p>
    </footer>
</div>
</body>
</html>


