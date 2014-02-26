<?php
include("config.php");

$userid=$_POST['userid'];
$latitude=$_POST['latitude'];
$longitude=$_POST['longitude'];


$sql="INSERT INTO  `cse2010_ratul_gt`.`gps_locations` (
`userid` ,
`latitude` ,
`longitude` ,
`time`
)
VALUES (
'$userid',  '$latitude',  '$longitude', 
CURRENT_TIMESTAMP
)";

if(mysql_query($sql))
{
	echo "1";
}

	
	
?>