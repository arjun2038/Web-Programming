<html>
<center><body>

<h1>Customer Electricity Bill Request Form</h1>
<form method="post" action="#">
<table><tr><td>Name:</td><td><input type="text" name="name"></td></tr>
<tr><td>Units Consumed :</td><td><input type="number" name="units"></td></tr>
<tr><td>Rate Per Unit :</td><td><input type="number" name="rate"></td></tr></table>
<tr><td colspan=2><input type="submit"></td></tr>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
  $units = $_POST['units'];
  $rate = $_POST['rate'];
if($name!="" and $units!="" and $rate!="")
{
  echo "-------------------------------------------------------------------------";
  echo "<h3>Kerala State Electricity Board (KSEB)</h3>";
  echo "<br><br>";
  echo "Consumer name : ".$name."<br>";
  echo "Units Consumed : ".$units."<br>";
  echo "Rate per unit : Rs.".$rate."<br><br>";

  echo "<h4>Total : Rs.".($rate*$units)."</h4><br>";
  echo "-------------------------------------------------------------------------";

}
else {
  echo "Some Field are missing,Enter properly.";
}
}
?>
</body></center>
</html>