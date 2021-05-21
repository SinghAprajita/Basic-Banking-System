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
            <p>Customer Details</p>

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


<h1 style="text-align: center;">Customer Details</h1>

<?php
$con=mysqli_connect("localhost","root","","banking");
if(!$con)
die("server could not connect");
$sql="select * from customer";
$rs=mysqli_query($con,$sql);
echo"<caption ></caption>";
echo"<table align='center'width=500;>";
echo"<tr><th>Id</th><th>Customer_Name</th><th>Email</th><th>Balance</th></tr>";
while($rows=mysqli_fetch_assoc($rs))
{
echo "<tr><td>".$rows["Id"]."</td>";
echo "<td>".$rows["Customer_Name"]."</td>";
echo "<td>".$rows["Email"]."</td>";
echo "<td>".$rows["current_balance"]."</td></tr>";
}
echo "</table>";
?>
<br>

<div class="bottom"  style="background-color: black;">
    <footer style="height: 40px ; color: cornsilk; padding-top: 5px;">
        <p style="text-align: center;">Copyright © Aprajita Singh. The Sparks Foundation</p>
    </footer>
</div>
</body>
</html>



