<html>
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
<!-- Navbar & Carousel Start -->
<div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
            <a href="index1.html" class="navbar-brand p-0">
            <img src="logo.jpg" alt="" width="250" style="margin-top:10px">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                <a href="index1.html" class="nav-item nav-link active">Home</a>
                    <a href="dealinterest.php" class="nav-item nav-link">Confirm</a>
                    <a href="bookdisplay1.php" class="nav-item nav-link">Interest</a>
                    <a href="Upload.php" class="nav-item nav-link">Sell a book</a>
                       <a href="user.php" class="nav-item nav-link">User</a>
                    <a href="about.html" class="nav-item nav-link ">About Us</a>
                    <a href="contact.html" class="nav-item nav-link">Contact Us</a>
                    
                    
                   
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-black" href="#" id="navbarDropdown" role="button"
                            data-mdb-toggle="dropdown" aria-expanded="false"> <i class="fas fa-user mx-1"></i> Account
                        </a>
                       
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li>
                                <a class="dropdown-item" href="uploadreport.php">My Uploads</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="interestreport.php">Cart</a>
                            </li>

                            <li>
                                <a class="dropdown-item" href="userreport.php">Profile</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="login.php">Log out</a>
                            </li>
                        </ul>
                    </li>
                     <!-- <li class="nav-item me-3 me-lg-0">
                        <a class="nav-link" href="#">
                            <i class="bi bi-heart"></i>
                        </a>
                    </li>
                    <li class="nav-item me-3 me-lg-0">
                        <a class="nav-link" href="#">
                            <i class="fas fa-shopping-cart"></i>
                        </a>

                    </li> -->
                </ul>
                   
                    
                </div>
                <li class="nav-item me-3 me-lg-0">
                    <a class="nav-link" href="#" style="margin-top: -15px;">
                        <button type="button" class="btn text-primary ms-3" data-bs-toggle="modal"
                            data-bs-target="#searchModal" style="margin-bottom: 20px;left: 100px;"><i class="fa fa-search"></i></button>
                    </a>
                </li>
                <li>
                    <input type="text" placeholder="Search here" style="margin-left:-20px;margin-bottom: 30px;">
                </li>
            </div>

            <a href="#"
                class="btn btn-primary py-2 px-4 ms-3">Search</a>
    </div>
    </nav>

        <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
           
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
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
if(empty($_POST['in']))
{
$err1="<font color=red>interestno must exist</font>";
$fl=1;
}
if(empty($_POST['date']))
{
$err2="<font color=red>interestdate must exist</font>";
$fl=1;
}
if(empty($_POST['un']))
{
$err3="<font color=red>uploaddate must exist</font>";
$fl=1;
}
if(empty($_POST['uid']))
{
$err4="<font color=red>userid must exist</font>";
$fl=1;
}
if(empty($_POST['upid']))
{
$err5="<font color=red>Upuserid must exist</font>";
$fl=1;
}
if(empty($_POST['deal']))
{
$err6="<font color=red>Deal must exist</font>";
$fl=1;
}
}
$cn=mysql_connect("localhost","root");
mysql_select_db("book",$cn);
$sql="select count(*) from interest";
$result=mysql_query($sql,$cn);
$row=mysql_fetch_array($result);
if($row[0]>0)
{
$sql="select max(interestno) from interest";
$result=mysql_query($sql,$cn);
$row=mysql_fetch_array($result);
$inn=$row[0]+1;
}
else
$inn=1;

?>

<form name=frm method=post action=interest.php>
<center>
<table>
<tr>
<td>InterestNo</td>
<td>
<input type=text name=in value=<?php echo $inn; ?> ><?php echo $err1; ?></td>
</tr>
<tr>
<td>InterestDate</td>
<td><input id="date"type="date" name=date><?php echo $err2; ?></td>
</tr>
<tr>
<td>UploadNo</td>
<td>
<input type=text name=un><?php echo $err3; ?></td>
</tr>
<tr>
<td>Userid</td>
<td>
<input type=text name=uid><?php echo $err4; ?></td>
</tr>
<tr>
<td>Upuserid</td>
<td>
<input type=text name=upid><?php echo $err5; ?></td>
</tr>
<tr>
<td>Deal</td>
<td>
<input type=text name=deal><?php echo $err6; ?></td>
</tr>
</table>
<input type=Submit name=sbm value=Submit>
<input type=Submit name=sbm value=Delete>
<input type=Submit name=sbm value=Display>
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
$sql="insert into interest values('$_POST[in]','$_POST[date]','$_POST[un]','$_POST[uid]','$_POST[upid]','$_POST[deal]')";
mysql_query($sql,$cn);
echo"record saved";
}
else
if($_POST['sbm']=="Delete")
{
$sql="Delete from interest where interestno='$_POST[in]'";
mysql_query($sql,$cn);
echo"record deleted";
}
else
if($_POST['sbm']=="Display")
{
$sql="Select * from interest";
$result=mysql_query($sql,$cn);
echo"<center><table border=1>";
echo"<tr>";
echo"<th>Interest no</th>";
echo"<th>Interest date</th>";
echo"<th>Upload no</th>";
echo"<th>User id</th>";
echo"<th>Upuser id</th>";
echo"<th>Deal</th>";
echo"</tr>";
while($row=mysql_fetch_array($result))
{
echo"<tr>";
echo"<td>$row[0]</td>";
echo"<td>$row[1]</td>";
echo"<td>$row[2]</td>";
echo"<td>$row[3]</td>";
echo"<td>$row[4]</td>";
echo"<td>$row[5]</td>";
echo"</tr>";
}
echo"record displayed";
echo"</table></center>";
}
}
?>