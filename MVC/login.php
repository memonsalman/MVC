<?php

include("controller.php");

?>
<html>
<head>
	<title>Demo MVC</title>
</head>
<body>

<h1 align="center">Login Form</h1>
<h3 align="center"><?php

if(isset($msg))
{
	echo $msg;
}

?></h3>
<h3 align="right"><a href="index.php">Register Here</a></h3>
	
	<form method="post">
	<table align="center" border="1">
		<tr>
			<td>Username :</td>
			<td><input type="text" name="unm"></td>
		</tr>
		<tr>
			<td>Password :</td>
			<td><input type="password" name="pass"></td>
		</tr>
		<tr>
			<td colspan="2" align="center"><input type="submit" name="log_sub"></td>
		</tr>
	</table>
		
	</form>
</body>

</html>