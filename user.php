<html>
<style>
        body{
            background-image: url("loginimg2.jpg");
            background-repeat: "no-repeat";
            height: 300px;
            background-position: center;
            background-size: 100%;
        }
        .center{
            margin-top: 150px;  
            padding: 20px;
            border-radius: 40px;
        }
    </style>
    <head>
    <meta charset="utf-8">
    <title>Pre-Owned Book Sell/Purchase</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="icon.jpeg" rel="icon">
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="assets/css/owl.css">


    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

    <body >
<!-- Navbar & Carousel Start -->
<!--  -->
</body>

</html>

<?php
$err1="";
$err2="";
$err3="";
$err4="";
$err5="";
$err6="";
$fl=0;
if(isset($_POST['sbm']))
{
if(empty($_POST['ui']))
{
$err1="<font color=red>userid must exist</font>";
$fl=1;
}
if(empty($_POST['un']))
{
$err2="<font color=red>username must exist</font>";
$fl=1;
}
if(empty($_POST['addr']))
{
$err3="<font color=red>address must exist</font>";
$fl=1;
}
if(empty($_POST['cn']))
{
$err4="<font color=red>contactno must exist</font>";
$fl=1;
}
if(empty($_POST['eid']))
{
$err5="<font color=red>emailid must exist</font>";
$fl=1;
}
if(empty($_POST['ps']))
{
$err6="<font color=red>password must exist</font>";
$fl=1;
}
}
// $cn=mysql_connect("localhost","root");
// mysql_select_db("book",$cn);
// $sql="select count(*) from user";
// $result=mysql_query($sql,$cn);
// $row=mysql_fetch_array($result);
// if($row[0]>0)
// {
// $sql="select max(Userid) from user";
// $result=mysql_query($sql,$cn);
// $row=mysql_fetch_array($result);
// $uid=$row[0]+1;
// }
// else
// $uid=1;
$cn=mysql_connect("localhost","root");
mysql_select_db("book",$cn);
$sql="select count(*) from user";
$result=mysql_query($sql,$cn);
$row=mysql_fetch_array($result);
if($row[0]>0)
{
$sql="select max(Userid) from user";
$result=mysql_query($sql,$cn);
$row=mysql_fetch_array($result);
$uid=$row[0]+1;
}
else
$uid=1;


?>
<form name=frm method=post action=user.php class="center">
<div class="container">
<center>
<table>
<tr>
<td>Userid</td>
<td>
<input type=text class="login__input" class="login__input" name=ui readonly value=<?php echo $uid; ?>><?php echo $err1; ?></td>
</tr>
<tr>
<td>Username</td>
<td>
<input type=text class="login__input" class="login__input" name=un><?php echo $err2; ?></td>
</tr>
<tr>
<td>Address</td>
<td>
<input type=text class="login__input" class="login__input" name=addr><?php echo $err3; ?></td>
</tr>
<tr>
<td>Contact no</td>
<td>
<input type=text class="login__input" class="login__input" name=cn><?php echo $err4; ?></td>
</tr>
<tr>
<td>Email id</td>
<td>
<input type=text class="login__input" class="login__input" name=eid><?php echo $err5; ?></td>
</tr>
<tr>
<td>Password</td>
<td><input type=password name=ps class="login__input"><?php echo $err6; ?></td>
</tr>
</table><br>
<input type=Submit name=sbm value=Submit class="btn btn-primary py-2 px-4 ms-3">
<input type=button name=login value=Login class="btn btn-primary py-2 px-4 ms-3" onclick="window.location.href = 'login.php'">
</div>
</center>
</form>
</body>
</html>

<?php
$cn=mysql_connect("localhost","root");
mysql_select_db("book",$cn);
if(isset($_POST['sbm']))
{
if($_POST['sbm']=="Submit")
{
if($fl==0)
{
$sql="insert into user values('$_POST[ui]','$_POST[un]','$_POST[addr]','$_POST[cn]','$_POST[eid]','$_POST[ps]',0)";
mysql_query($sql,$cn);
echo"record saved...Please click on Login to continue";
}
}
// else
// if($_POST['sbm']=="Update")
// {
// $sql="Update user set Username='$_POST[un]',Address='$_POST[addr]',Contact no='$_POST[cn]',Email id='$_POST[eid]',Password='$_POST[ps]'where userid='$_POST[ui]'";
// mysql_query($sql,$cn);
// echo"record updated";
// }
// else
// if($_POST['sbm']=="Delete")
// {
// $sql="Delete from user where userid='$_POST[ui]'";
// mysql_query($sql,$cn);
// echo"record deleted";
// }

}
?>