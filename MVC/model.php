<?php
include("db.php");

$qq= new connection;
$ccn=$qq->connect();

class model
{
 
 public function select($tbl,$ccn)
 {
 	$sel="select * from $tbl";
 	$qq=$ccn->query($sel);
 	while($ff=$qq->fetch_object())
 	{
 		$rr[]=$ff;
 	}
 	return $rr;
 }


 public function delete($tbl,$data,$ccn)
 {
 	$del="delete from $tbl where ";
 	foreach($data as $dk=>$dv)
 	{
 		$del.=" ".$dk."='".$dv."' and ";
 	}
 	$del.=" 1=1 ";
 	$ccn->query($del);

 }

 public function select_like($tbl,$data,$ccn)
 {
 	$sel="select * from $tbl where ";
	foreach($data as $dk=>$dv)
	{
		$sel.=" ".$dk." like '%".$dv."%' or ";
	}
	$sell=rtrim($sel," or");
	$qq=$ccn->query($sell);
	while($ff=$qq->fetch_object())
	{
		$rr[]=$ff;
	}
	return @$rr;
 }

 public function select_all($qer,$ccn)
 {
 	$qq=$ccn->query($qer);
 	while($ff=$qq->fetch_object())
 	{
 		$rr[]=$ff;
 	}
 	return @$rr;
 }

 public function update($tbl,$data,$wh,$ccn)
 {
 	$upd="update $tbl set ";
 	$ct=count($data);
 	$i=0;
 	foreach($data as $dk=>$dv)
 	{
 		if($ct==$i+1)
 		{
 			$upd.=" ".$dk."='".$dv."' ";
 		}
 		else
 		{
 			$upd.=" ".$dk."='".$dv."', ";
 		}
 		$i++;	
 	}

 	$upd.=" where ";

 	foreach($wh as $wk=>$wv)
 	{
 		$upd.=" ".$wk."='".$wv."' and ";
 	}

 	$upd.=" 1=1 ";

 	$ccn->query($upd);
 }


 
 public function select_where($tbl,$data,$ccn)
 {
 	$sel="select * from $tbl where ";
 	foreach($data as $dk=>$dv)
 	{
 		$sel.=" ".$dk."='".$dv."' and ";
 	}
 	$sel.=" 1=1 ";
 	$qq=$ccn->query($sel);
 	while($ff=$qq->fetch_object())
 	{
 		$rr[]=$ff;
 	}
 	return @$rr;
 }

 public function select_join($tb,$ddt,$ccn)
 {
 	$t=implode(",",$tb);
 	$sel="select * from $t where ";
 	foreach($ddt as $dt)
 	{
 		$sel.=" ".$dt." and ";
 	}
 	$sel.=" 1=1 ";
 	$qq=$ccn->query($sel);
 	while($ff=$qq->fetch_object())
 	{
 		$rr[]=$ff;
 	}
 	return @$rr;

 }


 public function insert($tbl,$data,$ccn)
 {
 	$k=array_keys($data);
 	$kv=implode(",",$k);
 	$v=array_values($data);
 	$vv=implode("','",$v);
 	$ins="insert into $tbl($kv) values('$vv')";
 	$ccn->query($ins);
 	
 }

}

?>