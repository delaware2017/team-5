<html>
</html>

<?php
header("Location: LoginScreen.html");
$con = mysqli_connect("localhost","Hunter","password");
if(!$con)
{
	echo "not connected";
}

if(!mysqli_select_db($con, 'users'))
{
	echo "wrong database";
}
$Answer1 = $_POST['math'];
$Answer2 = $_POST['chemistry'];
$Answer3 = $_POST['history'];
$Answer4 = $_POST['english'];
$Answer5 = $_POST['computerScience'];

$sql = "INSERT INTO answers(answer1,answer2,answer3,answer4,answer5) VALUES ('$Answer1', '$Answer2','$Answer3','$Answer4','$Answer5')";
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
