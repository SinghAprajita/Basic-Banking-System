<html>
    <head>
        <style type="text/css">
        table,th,tr,td{
            border: 2px solid black;
            padding: auto;
            border-collapse:collapse;
            border-spacing: 4px;
            table-layout: inherit;
            text-align: center;

        }
        th,td{
            padding: 10px;
        }
        
        
        body{
            padding-top: 0px;
        }
        </style>
        <title>

        </title>
    </head>
    <body >




<?php


    $sen1=$_POST["receiver"];
    $sen=$_POST["sender"]; #sender
    $rec1=$_POST["receiver"]; 
    $amt1=$_POST["amount"]; #receiver

   



$con=mysqli_connect("localhost","root","","banking");
if(!$con)
die("server could not connect");
$sql="insert into transaction_history values('".$sen1."','".$sen."','".$rec1."','".$amt1."',now())";
$rs=mysqli_query($con,$sql);
if($rs!=0)
echo"Transaction Successfull";
else
echo"unable to store";

?>
</body>
</html>



