<?php

if(isset($_GET['delete']))
{
  include_once'dbh.inc.php';
$id=$_GET['delete'];
$mysqli="DELETE FROM data where id=$id";
mysqli_query($conn,$mysqli);
header("location:admin.php");
}

?>
