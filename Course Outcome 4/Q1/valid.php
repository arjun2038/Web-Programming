<?php 
$finame=$laname=$miname=$email=$gender=$nationaliy=$age=$pass=$cpass="";
$finame=$_POST["fname"];
$miname=$_POST["mname"];
$laname=$_POST["lname"];
$email=$_POST["mail"];
$age=$_POST["age"];
$pass=$_POST["pass"];
$cpass=$_POST["cpass"];
$fullname=$finame. " ".$miname." ".$laname;
$size=strlen($pass);
$c=0;
if(empty($finame))
{
    echo "First Name is mandatory. <br>";
    $c++;
}
if (empty($laname))
{
    echo "Last Name is Mandatory.<br>";
    $c++;
}
if (empty($email))
{
    echo "Email Address is Mandatory <br>";
    $c++;
}
if(empty($age))
{
    echo "Enter the Age. <br>";
    $c++;
}
if(empty($pass))
{
    echo "Enter The Password <br>";
    $c++;
}
if(empty($cpass))
{
    echo "Enter Confirm Password <br>";
    $c++;
}
elseif($pass!=$cpass)
{
    echo "Passwords are not same <br>";
    $c++;
}
elseif($size<8)
{
    echo "Number of Charcters in Password should be greater than 8";
    $c++;
}
if($c==0)
{
echo "<center><h1>User Details</h1><table><tr><td>Name:</td><td> $fullname </td></tr><tr><td>Email Address:</td><td>$email</td></tr><tr><td>Age:</td><td>$age</td></tr></table></center>";
}
?>   