<?php
$inn=$_GET['intno'];
$upn=$_GET['uppno'];
$uid=$_GET['userid'];
$cn=mysql_connect("localhost","root");
mysql_select_db("book",$cn);
$sql="update interest set deal='Y' where interestno=$inn and uploadno=$upn and userid=$uid";
mysql_query($sql,$cn);
$sql="select * from upload where uploadno=$upn";
$result=mysql_query($sql,$cn);
$row=mysql_fetch_array($result);
$rt=$row[10]*.05;
$sql="update user set reward=reward+$rt where userid=$uid";
mysql_query($sql,$cn);
$sql="update upload set Status='selled' where Uploadno=$upn";
mysql_query($sql,$cn);
header("location:http://localhost/BookDekho1/dealinterest.php");

?>