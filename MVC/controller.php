<?php
include("model.php");

$obj=new model;


$stat=$obj->select('state',$ccn);

//join query
$tb=array("login","state");
$ddt=array("login.state=state.stid");
$logi=$obj->select_join($tb,$ddt,$ccn);




//data insert
if(isset($_REQUEST['sub']))
{
	$u=$_REQUEST['unm'];
	$p=$_REQUEST['pass'];
	$g=$_REQUEST['gen'];
	$ho=$_REQUEST['ho'];
	$hh=implode(",",$ho);
	$st=$_REQUEST['stt'];

	$data=array("username"=>$u,"password"=>$p,"gender"=>$g,"hobby"=>$hh,"state"=>$st);
	$i=0;
	foreach($data as $dk=>$dv)
	{
		if(empty($dv))
		{
			$i++;
			echo "plzz fill ".$dk;
			echo "<br>";
		}
	}
	if($i==0)
	{
		$obj->insert("login",$data,$ccn);
	}
}


if(isset($_REQUEST['log_sub']))
{
	$u=$_REQUEST['unm'];
	$p=$_REQUEST['pass'];
	$data=array("username"=>$u,"password"=>$p);
	$rd=$obj->select_where('login',$data,$ccn);
	if(count($rd)>0)
	{
		session_Start();
		$_SESSION['user']=$u;
		header("location:home.php");
	}
	else
	{
		$msg="wRONG uSERNAME pASSWORD...!!";
	}
}


if(isset($_REQUEST['del']))
{
	$id=$_REQUEST['del'];
	$data=array("rid"=>$id);
	$obj->delete("login",$data,$ccn);
	header("location:home.php");
}

if(isset($_REQUEST['edt']))
{
	$id=$_REQUEST['edt'];
	$wh=array("rid"=>$id);
	$edd=$obj->select_where("login",$wh,$ccn);
	
	if(isset($_REQUEST['updsub']))
	{
		$u=$_REQUEST['unm'];
		$p=$_REQUEST['pass'];
		$g=$_REQUEST['gen'];
		$ho=$_REQUEST['ho'];
		$hh=implode(",",$ho);
		$st=$_REQUEST['stt'];

		$data=array("username"=>$u,"password"=>$p,"gender"=>$g,"hobby"=>$hh,"state"=>$st);
		
		$obj->update("login",$data,$wh,$ccn);

		header("location:home.php");
	}
	
}

if(isset($_REQUEST['Serch']))
{
	$nm=$_REQUEST['ser'];
	//$data=array("username"=>$nm,"password"=>$nm,"gender"=>$nm,"hobby"=>$nm);
	//$slike=$obj->select_like('login',$data,$ccn);
	$qer="select * from login join state on login.state=state.stid where username like '%$nm%' or password like '%$nm%' or gender like '%$nm%' or hobby like '%$nm%' or stname like '%$nm%'";
	$slike=$obj->select_all($qer,$ccn);

}





?>