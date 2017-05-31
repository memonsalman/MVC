<?php

include("controller.php");

?>
<html>
<head>
	<title>Demo MVC</title>
</head>
<body>
<h1 align="center">Update Form</h1>
	<form method="post">
	<table align="center" border="1">
		<tr>
			<td>Username :</td>
			<td><input type="text" name="unm" value="<?php echo $edd[0]->username; ?>"></td>
		</tr>
		<tr>
			<td>Password :</td>
			<td><input type="password" name="pass" value="<?php echo $edd[0]->password; ?>"></td>
		</tr>
		<tr>
			<td>Gender :</td>
			<td><input type="radio" name="gen" value="male"
			<?php
				if($edd[0]->gender=="male")
				{
					echo "checked='checked'";
				}
			?>
			>Male
					<input type="radio" name="gen" value="female"
					<?php
				if($edd[0]->gender=="female")
				{
					echo "checked='checked'";
				}
			?>
					>Female
			</td>
		</tr>
		<tr>
			<td>Hobby :</td>
			<?php
			$hh=$edd[0]->hobby;
			$ex=explode(",",$hh);
			?>
			<td><input type="checkbox" name="ho[]"
			<?php
			if(in_array("cricket",$ex))
			{
				echo "checked='checked'";
			}
			?>
			 value="cricket">Cricket
				<input type="checkbox" name="ho[]"
				<?php
			if(in_array("chess",$ex))
			{
				echo "checked='checked'";
			}
			?>
				 value="chess">Chess
			</td>
		</tr>
		<tr>
			<td>State :</td>
			<td><select name="stt">
				<option>select state</option>
				<?php
				foreach ($stat as $value)
				{
						if($edd[0]->state==$value->stid)
						{
					?>
					<option selected value="<?php echo $value->stid; ?>"><?php echo $value->stname; ?></option>
					<?php
						}
						else
						{
							?>
						<option value="<?php echo $value->stid; ?>"><?php echo $value->stname; ?></option>
							<?php
						}
				}
				?>
			</select></td>
		</tr>
		<tr>
			<td colspan="2" align="center"><input type="submit" name="updsub"></td>
		</tr>
	</table>
		
	</form>
</body>

</html>