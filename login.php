<html>
    <head>
    <meta charset="utf-8">
    <style>
        body{
            background-image: url("loginimg2.jpg");
            background-repeat: "no-repeat";
            height: 300px;
            background-position: center;
            background-size: 100%;
        }
        .center{
            margin-top: 0px;  
            padding: 20px;
            border-radius: 40px;
        }
    </style>
    <title>Pre-Owned Book Sell/Purchase</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="icon.jpeg" rel="icon">
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="assets/css/templatemo-sixteen.css">
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

    <body>


</body>

</html>
<html>
<body class="center">
    <center>
<form name=frm method=post action=login.php>
<div class="container" >
	<div class="screen" >
		<div class="screen__content" class="center">
			<form class="login">
				<div class="login__field">
<h3>Login</h3><br>
<table>
<tr>
<td>UserId</td>
<td>
<input type=text name=ui class="login__input"></td>
</tr>
<tr>
<td>Password</td>
<td><input type=password name=ps class="login__input"></td>
</tr>
</table>
<br><input class="btn btn-primary py-2 px-4 ms-3" type=submit name=sbm value=login><br><br>
<a href=user.php>new user?</a>
</div>		
	</div>
</div>
    </div>
</form>
</center>
</body>
</html>
<?php
if(isset($_POST['sbm']))
{
    if($_POST['ui']==1 AND $_POST['ps']==1)
    {
        $cn=mysql_connect("localhost","root");
mysql_select_db("book",$cn);
$sql="select count(*) from user where userid='$_POST[ui]' and password='$_POST[ps]'";
$result=mysql_query($sql,$cn);
$row=mysql_fetch_array($result);
if($row[0]>0)
{
// $sql11="select * from user where userid='$_POST[ui]' and password='$_POST[ps]'";
// $result11=mysql_query($sql11,$cn);
// $row11=mysql_fetch_array($result11);
session_start();
$_SESSION['userid']=$_POST['ui'];
header("location:http://localhost/BookDekho1/admin.php");
}
}
    else{
$cn=mysql_connect("localhost","root");
mysql_select_db("book",$cn);
$sql="select count(*) from user where userid='$_POST[ui]' and password='$_POST[ps]'";
$result=mysql_query($sql,$cn);
$row=mysql_fetch_array($result);
if($row[0]>0)
{
$sql11="select * from user where userid='$_POST[ui]' and password='$_POST[ps]'";
$result11=mysql_query($sql11,$cn);
$row11=mysql_fetch_array($result11);
session_start();
$_SESSION['userid']=$_POST['ui'];
header("location:http://localhost/BookDekho1/bookdisplay1.php");
}
else
echo "<font color=red><center>invalid username and or password</center></font>";
}
}
?>
