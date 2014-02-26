<?php
$con = mysql_connect("localhost","cse2010_ratul","27101991");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("cse2010_ratul_gt", $con);

?>