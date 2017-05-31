<?php

include("controller.php");

?>
<html>
<head>
	<title>Demo MVC</title>
</head>
<body>
<h1 align="center">Register Form</h1>

<h3 align="right"><a href="login.php">Login here</a></h3>
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
			<td>Gender :</td>
			<td><input type="radio" name="gen" value="male">Male
					<input type="radio" name="gen" value="female">Female
			</td>
		</tr>
		<tr>
			<td>Hobby :</td>
			<td><input type="checkbox" name="ho[]" value="cricket">Cricket
				<input type="checkbox" name="ho[]" value="chess">Chess
			</td>
		</tr>
		<tr>
			<td>State :</td>
			<td><select name="stt">
				<option>select state</option>
				<?php
				foreach ($stat as $value) {
					?>
					<option value="<?php echo $value->stid; ?>"><?php echo $value->stname; ?></option>
					<?php
				}
				?>
			</select></td>
		</tr>
		<tr>
			<td colspan="2" align="center"><input type="submit" name="sub"></td>
		</tr>
	</table>
		
	</form>
</body>

</html>