<html>
<center>
<body>
<h1>Customer Electricity Bill Request Form</h1>
<form method="post" action="#">
<table><tr><td>Name:</td><td><input type="text" name="name"></td></tr>
<tr><td>Consumer Number</td><td><input type="number" name="cnumber"></td></tr>
<tr><td>Mobile Number</td><td><input type="number" name="mnumber"></td></tr>
<tr><td>Previous Reading</td><td><input type="number" name="pr"></td></tr>
<tr><td>Current Reading :</td><td><input type="number" name="cr"></td></tr>
<tr><td colspan=2 align="middle"><input type="submit"></td></tr></table>
</form>
<?php
  $name =$creading =$preading =$mobile=$consumer=$units ="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
  $creading = $_POST['cr'];
  $preading = $_POST['pr'];
  $mobile=$_POST['mnumber'];
  $consumer=$_POST['cnumber'];
  $units =floatval($creading)-floatval($preading);
if($units<100)
{
  $rate=3;
  $amount=$units*$rate;
}
elseif($units<=250)
{
  $rate=4;
  $amount=$units*$rate;
}
elseif($units>250)
{
  $rate=6;
  $amount=$units*$rate;
}
if($name!="" and $preading!="" and $rate!="" and $creading!="" and $consumer!="" and $mobile!=""){
  echo "-------------------------------------------------------------------------";
  echo "<h3>Kerala State Electricity Board (KSEB)</h3>";
  echo "<br><br>";
  echo "Consumer name : ".$name."<br>";
  echo "Consumer No   : ".$consumer."<br>";
  echo "Units Consumed : ".$units."<br>";
  echo "Rate per unit : Rs.".$rate."<br><br>";

  echo "<h4>Total : Rs.".($amount)."</h4><br>";
  echo "-------------------------------------------------------------------------";
}
else 
  echo "Some Field are missing,Enter properly.";
}
?>
</body></center>
</html>