<html>
</html>

<?php

header("Location: Nominator.html");
$con = mysqli_connect("localhost","Hunter","password");
if(!$con)
{
	echo "not connected";
}

if(!mysqli_select_db($con, 'users'))
{
	echo "wrong database";
}
$User = $_POST['username'];
$Password = $_POST['password'];

$sql = "INSERT INTO userData (username, password) VALUES ('$User','$Password')";
if(!mysqli_query($con,$sql))
{
	echo 'Data not inserted';
}
else
{
	echo 'Data inserted';
}
mysqli_close($con);
?>
