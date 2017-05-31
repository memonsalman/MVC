<?php
	include("controller.php");
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Homepage</title>

  <script type="text/javascript" src="jquery.dataTables.min.js"></script>
  <link rel="stylesheet" href="jquery.dataTables.min.css" type="text/css">

</head>
<body>
<h1 align="center">Welcome <?php 
if(isset($_SESSION['user']))
{
	echo $_SESSION['user'];
}
else
{
	header("location:login.php");
}
 ?></h1>
<form method="post">
<table border="1" align="center">
	<tr>
		<td  align="center"><input type="text" name="ser"></td>
		<td><input type="submit" name="Serch" value="Search"></td>
	</tr>
	<tr>
		<td>No.</td>
		<td>Username</td>
		<td>Password</td>
		<td>gender</td>
		<td>Hobby</td>
		<td>State</td>
		<td colspan="2" align="center">Action</td>
	</tr>
<?php
	
	if(isset($_REQUEST['Serch']))
	{



	if(count($slike)>0)
	{

		$i=1;
	foreach($slike as $l)
	{
?>
	<tr>
		<td><?php echo $i; ?></td>
		<td><?php echo $l->username; ?></td>
		<td><?php echo $l->password; ?></td>
		<td><?php echo $l->gender; ?></td>
		<td><?php echo $l->hobby; ?></td>
		<td><?php echo $l->stname; ?></td>
		<td><a href="home.php?del=<?php echo $l->rid; ?>">Delete</a></td>
		<td><a href="update.php?edt=<?php echo $l->rid; ?>">Edit</a></td>
	</tr>
<?php
$i++;
	}

	}
	else
	{
		?>
		<tr>	
			<td colspan="7" align="center">No records found..!!</td>
		</tr>
		<?php
	}

}
else
{
	$i=1;
	foreach($logi as $l)
	{
?>
	<tr>
		<td><?php echo $i; ?></td>
		<td><?php echo $l->username; ?></td>
		<td><?php echo $l->password; ?></td>
		<td><?php echo $l->gender; ?></td>
		<td><?php echo $l->hobby; ?></td>
		<td><?php echo $l->stname; ?></td>
		<td><a href="home.php?del=<?php echo $l->rid; ?>">Delete</a></td>
		<td><a href="update.php?edt=<?php echo $l->rid; ?>">Edit</a></td>
	</tr>
<?php
$i++;
	}
}

?>
</table>
</form>

<script type="text/javascript">
$(document).ready(function(){
    $('#myTable').DataTable();
});
</script>
</body>
</html>