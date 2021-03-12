<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
</head>
<body>
<center><h1>Registration Form</h1>
<form method="POST" action="valid.php">
<table>
<tr>
<td>First Name </td>
<td><input type="text" name="fname" placeholder="First Name"></td></tr>
<tr><td>Middle Name </td>
<td><input type="text" name="mname" placeholder="Middle Name(Not Mandatory)"></td></tr>
<tr><td>Last Name</td>
<td><input type="text" name="lname" placeholder="Last Name"></td></tr>
<tr><td>Email</td><td><input type="email" name="mail" placeholder="Email Address"></td></tr>
<tr>
<tr><td>Age</td><td><input type="number" name="age" placeholder="Age"></td></tr>
<tr><td>Password</td><td><input type="password" name="pass" placeholder="Password"></td></tr>
<tr><td>Confirm Password</td><td><input type="password" name="cpass" placeholder="Confirm Password"></td></tr>
<tr><td colspan="2" align="middle"><input type="submit" value="Register"></td></tr>
</table>
</form> </center>
</body>
</html>