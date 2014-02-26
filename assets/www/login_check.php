<?php
header('Content-type:application/json');
include("config.php");


$userid=$_POST['userid'];
$mobile=$_POST['mobile'];

$user_check=mysql_query("SELECT * FROM users WHERE userid='$userid' and mobile='$mobile'");
	$user_decision = mysql_fetch_array($user_check);
	if ($user_decision['name'] != NULL)
	{
	$user_login['decision']="done";
	
	}
	else{
	$user_login['decision']="error";
	
	}
	
	echo json_encode($user_login);
	
	
?>