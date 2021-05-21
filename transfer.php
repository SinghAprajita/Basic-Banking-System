<!DOCTYPE html>
<html lang="en">
  <head>
      <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width,initial-scale=1">

   
<link rel="stylesheet" href="style.css">

<style>
    select{
        width: 180px;
        height:30px;
        border: 1px solid black;
        border-radius: 2px;
        
    }
    option{
       text-align: center;
       border: 1px solid black;
        border-radius: 2px;
    }
    input{
        width: 170px;
        height:30px;
        border: 1px solid black;
        border-radius: 2px;
    }
    input[type=submit]{
        width: 250px;
        height: 40px;
        background-color:  rgb(255, 115, 0);
        border:2px solid #cccccc;
        border-radius: 5px;
        border: 2px solid rgb(255, 115, 0);
        font-size: large;
        

        
    }
</style>
<script type="text/javascript">
function display()
{
    

    alert("Transaction Successfull");
    
   
}


</script>
</head>
<title>
    Transfer Money
</title>
<body>
    <!-- navbar --> 

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
  <br>
  <br>
    <div class="trans">
        <h2 style="text-align: center;">Transfer Money</h2>
        <br>
        <form  action="transaction.php" method="POST" name="myform">
            
            <table align="center">
                <h2 align="center">From</h2>
                <tr><td><b>Customer</b>
            
               <select name="sender" id="sender"  required>
               <option value="--Select--">--Select--</option>
               <option value="Aprajita" >Aprajita</option>
               <option value="Blessy" >Blessy</option>
               <option value="Bandu" >Bandu</option>
               <option value="Abhijeet">Abhijeet</option>
               <option value="Prashansa" >Prashansa</option>
               <option value="Shailu">Shailu</option>
               <option value="Zara" >Zara</option>
               <option value="Billigraham" >Billigraham</option>
               <option value="Albert" >Albert</option>
               <option value="Paul" >Paul</option>
               <option value="Aprajita" >Aprajita</option>
               <option value="Aprajita" >Aprajita</option>
            </select>
        </td></tr>
            
            


            </table>

            <table align="center">
                <br>
                <br>
                <h2 align="center">To</h2>
                <tr><td><b>Customer</b>
               <select name="receiver" id="receiver" required>
               <option value="--Select--" name="receiver">--Select--</option>
               <option value="Aprajita" name="receiver">Aprajita</option>
               <option value="Blessy" name="receiver">Blessy</option>
               <option value="Bandu" name="receiver">Bandu</option>
               <option value="Abhijeet" name="receiver">Abhijeet</option>
               <option value="Prashansa" name="receiver">Prashansa</option>
               <option value="Shailu" name="receiver">Shailu</option>
               <option value="Zara" name="receiver">Zara</option>
               <option value="Billigraham" name="receiver">Billigraham</option>
               <option value="Albert" name="receiver">Albert</option>
               <option value="Paul" name="receiver">Paul</option>
               <option value="Aprajita" name="receiver">Aprajita</option>
               <option value="Aprajita" name="receiver">Aprajita</option>
            </select>
        </td></tr>
        
            <tr><td>
                <br>
                <br>   
            <b>Amount</b> &nbsp &nbsp<input type="text"   name="amount" placeholder="Enter the amount" id="amount">
        </td> </tr>
        <tr ><td >
            
            <br>
            
            <input type="submit"  name="amount1"  id="amount1" value="Transfer" onclick="display();">
        </td> </tr>
            


            </table>
            

        </form>
    </div>
    <br>
    <br>
    <br>
    
    <div class="bottom"  style="background-color: black;">
        <footer style="height: 40px ; color: cornsilk; padding-top: 5px;">
            <p style="text-align: center;">Copyright © Aprajita Singh. The Sparks Foundation</p>
        </footer>
    </div>
</body>