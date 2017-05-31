<?php
class connection
{
	public function connect()
	{
		$conn=new mysqli("localhost","root","","jan_batch1");
		return $conn;
	}
}
?>