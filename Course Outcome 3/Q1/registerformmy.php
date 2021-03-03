<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
</head>
<body>
<center>
<form name="bod" onsubmit=validate()> 
<h1>Enter The Details</h1>
<table>
<tr>
<td>Fullname</td>
<td><input type="text" name="fullname"></td></tr>
<tr><td>Email</td>
<td><input type="email" name="email"></td></tr>
<tr>
<td>Username</td>
<td><input type="text" name="username"></td>
</tr>
<tr><td>Password</td>
<td><input type="password" name="pass"></td></tr>
<tr><td>Confirm Password</td>
<td><input type="password" name="cpass1"></td></tr>
<tr><td></td>
<td><input type="submit" value="Submit">
<input type="reset" value="Reset"></td>
</tr>
</table>
</form>
</center>
<script>
function validate(){
    var name=document.bod.fullname.value
    var emai=document.bod.email.value
    var uname=document.bod.username.value
    var passw=document.bod.pass.value
    var confirm=document.bod.cpass1.value
    if(name=="")
    {
        alert("Enter Name")
    }
    if(emai[-9]!=="@")
    {
        alert("Enter a Valid Email Address")
    }
}
</script>

    
</body>


</html>