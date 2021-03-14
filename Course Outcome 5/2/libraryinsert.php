<?php 
require '2.php';
$access_number = $_POST["access_number"];
$title = $_POST["title"];
$authors = $_POST["authors"];
$edition = $_POST["edition"]; 
$publisher = $_POST["publisher"];

$query = "INSERT INTO books (access_number, title, authors, edition, publisher) VALUES ('".$access_number."', '".$title."', '".$authors."','".$edition."','".$publisher."')";
if(mysqli_query($con,$query))
{
    echo "<script>alert('Successfully added new row !')</script>";
    header("Location: 2index.php"); 
}
else
{
    echo "<script>alert(".mysqli_error($con).")</script>";
    header("Location: 2index.php"); 
}

mysqli_close($con);



?>