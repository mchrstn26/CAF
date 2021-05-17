
<!DOCTYPE html>
<html>
<head>
<title>CAF Admin Login</title>
<link rel="stylesheet" type="text/css" href="file.css">
</head>
<body>
<table border="0" align="center">
	<tr>
		<td>
			<div id="object" class="fadeIn" align="center">
				<div id="object" class="bounce" align="left">
					<img src="img/CAF Technology.jpg" width = "500px" height = "500px">
				</div>
			</div>
		</td>
		<td>
<div id="object" class="stretchLeft" align="center">
				<div id="object" class="fadeIn" align="left">
<form method="POST">
<table border="0" cellpadding="1" cellspacing="2">
<tr>
<td colspan=3 align="center"><font size="10px"><b><font color="black">Login</b></td>
</tr>
<tr>
	<td><font color="black">Username</td>
	<td>:</td>
	<td><input type="text" name="user" /></td>
</tr>
<tr>
	<td><font color="black">Password</td>
	<td>:</td>
	<td><input type="password" name="pass" /></td>
</tr>
<tr>
	<td colspan="3" align="center">
	<input type="submit" name="login" value="Login"/>
	</td>
</tr>

<?php
ob_start();
session_start();
if(isset($_SESSION['admin']))
{
	header('Location:index.php');
}else{
if(isset($_POST['login'])) 
{ 
$con = mysqli_connect("localhost","id14759530_cafuser","Bk-820201.290399","id14759530_caf");

if($con)
{

	$email = $_POST['user'];
	$password = $_POST['pass'];

$sql = "SELECT * FROM User WHERE email='".$email."' and password='".$password."'";
$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_assoc($result)){
if ($row == null) {
  echo '{"query_result":"FAILURE"}';
}else if($row['status'] == 0){
    echo '{"query_result":"UNCONFIRMED"}';
}
else{
	$name = $row['first_name']; 
	$name2 = $row['last_name'];
	$admin = "$name $name2";
	echo '{"query_result":"'.$name.' '.$name2.'"}';
	$_SESSION['admin']=$admin;
	header('Location:index.php');
	ob_end_flush();
	}
}
}
}
}
?>

</div>
</div>
</td>
</tr>
</table>
</table>

</form>
</body>
</html>
