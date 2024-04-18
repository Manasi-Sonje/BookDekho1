<html>
<style>
        body{
            background-image: url("loginimg2.jpg");
            background-repeat: "no-repeat";
            height: 900px;
            background-position: center;
            background-size: 100%;
            
           
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
                <a href="bookdisplay1.php" class="nav-item nav-link">Home</a>
                    <a href="dealinterest.php" class="nav-item nav-link">View Buyers</a>
                    <!-- <a href="bookdisplay1.php" class="nav-item nav-link active ">Interest</a> -->
                    <a href="Upload.php" class="nav-item nav-link active">Sell a book</a>
                       <!-- <a href="user.php" class="nav-item nav-link">User</a> -->
                    <a href="about.html" class="nav-item nav-link ">About Us</a>
                    <a href="contact.html" class="nav-item nav-link">Contact Us</a>
                    <a href="bookdisplay.php" class="nav-item nav-link">Logout</a>
                   
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
                           
                        </ul>
                    </li>
                    
                </ul>
                   
                    
                </div>
              
            </div>

            <a href="searching.php"
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
$err7="";
$err8="";
$err9="";
$err10="";
$err11="";
$err12="";
$err13="";
$err14="";
$err15="";
$err16="";
$fl=0;
if(isset($_POST['sbm']))
{
if(empty($_POST['uno']))
{
$err1="<font color=red>upload no must exist</font>";
$fl=1;
}
if(empty($_POST['uid']))
{
$err2="<font color=red>userid must exist</font>";
$fl=1;
}
if(empty($_POST['date']))
{
$err3="<font color=red>uploaddate must exist</font>";
$fl=1;
}
if(empty($_POST['title']))
{
$err4="<font color=red>title must exist</font>";
$fl=1;
}
if(empty($_POST['cat']))
{
$err5="<font color=red>category must exist</font>";
$fl=1;
}
if(empty($_POST['lang']))
{
$err6="<font color=red>language must exist</font>";
$fl=1;
}
if(empty($_POST['edi']))
{
$err7="<font color=red>edition must exist</font>";
$fl=1;
}
if(empty($_POST['aut']))
{
$err8="<font color=red>author must exist</font>";
$fl=1;
}
if(empty($_POST['pub']))
{
$err9="<font color=red>publication must exist</font>";
$fl=1;
}
if(empty($_POST['org']))
{
$err10="<font color=red>orginal price must exist</font>";
$fl=1;
}
if(empty($_POST['sel']))
{
$err11="<font color=red>selling price must exist</font>";
$fl=1;
}
if(empty($_POST['bookimg']))
{
$err12="<font color=red>bookimg must exist</font>";
$fl=1;
}
if(empty($_POST['pages']))
{
$err14="<font color=red>No. of Pages must exist</font>";
$fl=1;
}
if(empty($_POST['indeximg']))
{
$err15="<font color=red>Index photo must exist</font>";
$fl=1;
}
if(empty($_POST['middleimg']))
{
$err16="<font color=red>Middle Page Photo must exist</font>";
$fl=1;
}
}
$cn=mysql_connect("localhost","root");
mysql_select_db("book",$cn);
$sql="select count(*) from upload";
$result=mysql_query($sql,$cn);
$row=mysql_fetch_array($result);
if($row[0]>0)
{
$sql="select max(uploadno) from upload";
$result=mysql_query($sql,$cn);
$row=mysql_fetch_array($result);
$upn=$row[0]+1;
}
else
$upn=1;
?>


<form name=frm method=post action=upload.php>
<div class="container">
<center>
<table>
<tr>
<td>Upload no</td>
<td>
<input type=text name=uno class="login__input" readonly value=<?php echo $upn; ?>><?php echo $err1; ?></td>
</tr>
<tr>
<td>Title</td>
<td>
<input type=text name=title class="login__input"><?php echo $err3; ?></td>
</tr>
<tr>
<td>Update</td>
<td>
<input id="date" type="date" class="login__input"  name=date><?php echo $err4; ?></td>
</tr>
<tr>
<td>Category</td>
<td>
<input type=text class="login__input" name=cat><?php echo $err5; ?></td>
</tr>
<tr>
<td>Language</td>
<td><select name=lang class="login__input">
<option>English</option>
<option>Marathi</option>
<option>Hindi</option>
<option>Sanskrit</option>
</select><?php echo $err6; ?></td>
</tr>
<tr>
<td>Edition</td>
<td>
<input type=text class="login__input" name=edi><?php echo $err7; ?></td>
</tr>
<tr>
<td>Publication</td>
<td>
<input type=text class="login__input" name=pub><?php echo $err8; ?></td>
</tr>
<tr>
<td>Author</td>
<td>
<input type=text class="login__input" name=aut><?php echo $err9; ?></td>
</tr>
<tr>
<td>Original price</td>
<td>
<input type=text class="login__input" name=org><?php echo $err10; ?></td>
</tr>
<tr>
<td>Selling price</td>
<td>
<input type=text class="login__input" name=sel><?php echo $err11; ?></td>
</tr>
<tr>
<td>Total No. of Pages</td>
<td>
<input type=text class="login__input" name=pages><?php echo $err14; ?></td>
</tr>
<tr>
<td>
<input type=hidden class="login__input" name=sta></td>
</tr>
<tr>
<td>Cover Page</td>
<td>
<input type=file class="login__input" name=bookimg><?php echo $err12; ?></td>
</tr>
<tr>
<td>Index Page</td>
<td>
<input type=file class="login__input" name=indeximg><?php echo $err15; ?></td>
</tr>
<tr>
<td>Index Page</td>
<td>
<input type=file class="login__input" name=indeximg1></td>
</tr>
<tr>
<td>Middle Page</td>
<td>
<input type=file class="login__input" name=middleimg><?php echo $err16; ?></td>
</tr>
<tr>
<td>Quality Factors</td>
<td>
<input type="checkbox" name="quality[]" value="A" />First hand<br />
<input type="checkbox" name="quality[]" value="B" />No missing Pages<br />
<input type="checkbox" name="quality[]" value="C" />No torn Pages<br />
<input type="checkbox" name="quality[]" value="D" />No Writing on Pages<br />
<input type="checkbox" name="quality[]" value="E" />Latest edition<br />
</td>
</tr>

</table><br>
<input type=Submit class="btn btn-primary py-2 px-4 ms-3" name=sbm value=Submit >

<input type=Submit class="btn btn-primary py-2 px-4 ms-3" name=sbm value=Delete>
</div>
</div>
</div>

</center>
</form>

</body>
</html>

<?php
session_start();
$cn=mysql_connect("localhost","root");
mysql_select_db("book",$cn);
if(isset($_POST['sbm']))
{
if($_POST['sbm']=="Submit" && $fl==0)
{
    $rew=$_POST['sel']*.05;
//     $N = count($_POST['quality']);
//     $quality1 = " ";
//     for($i=0; $i < $N; $i++)
//     {
//         $quality1 =  $quality1 + "," + IsChecked('$_quality','A') ? "First hand" : "," ;
//         $quality1 =  $quality1 + "," + IsChecked('$_quality','B') ? "No missing Pages" : "," ;
//         $quality1 =  $quality1 + "," + IsChecked('$_quality','C') ? "No torn Pages" : "," ;
//         $quality1 =  $quality1 + "," + IsChecked('$_quality','D') ? "No Writing onn Pages" : "," ;
//         $quality1 =  $quality1 + "," + IsChecked('$_quality','E') ? "Latest edition" : "," ;
    
//     }
// // $sql="insert into upload values('$_POST[uno]','$_SESSION[userid]','$_POST[title]','$_POST[date]','$_POST[cat]','$_POST[lang]','$_POST[edi]','$_POST[pub]','$_POST[aut]','$_POST[org]','$_POST[sel]','$_POST[bookimg]','$_POST[sta]','$_POST[indeximg]','$_POST[indeximg1]','$_POST[middleimg]','$_POST[pages]',$quality1)";
$sql="insert into upload values('$_POST[uno]','$_SESSION[userid]','$_POST[title]','$_POST[date]','$_POST[cat]','$_POST[lang]','$_POST[edi]','$_POST[pub]','$_POST[aut]','$_POST[org]','$_POST[sel]')";
mysql_query($sql,$cn);
$sql="update user set reward=reward+$rew where userid='$_SESSION[userid]'";
mysql_query($sql,$cn);
echo"record saved";
}
else
if($_POST['sbm']=="Update")
{
$sql="Update upload set Userid='$_POST[uid]',Title='$_POST[title]',Update='$_POST[date]',Category='$_POST[cat]',Language='$_POST[lang]',Edition='$_POST[edi]',Publication='$_POST[pub]',Author='$_POST[aut]',Original price='$_POST[org]',Selling price='$_POST[sel]',Book image='$_POST[bookimg]',Status='$_POST[sta]'where Uploadno='$_POST[uno]'";
mysql_query($sql,$cn);
echo"record updated";
}
else
if($_POST['sbm']=="Delete")
{
$sql="Delete from upload where Title='$_POST[title]'";
mysql_query($sql,$cn);
echo"record deleted";
}
}
?><html>
<style>
        body{
            background-image: url("loginimg2.jpg");
            background-repeat: "no-repeat";
            height: 900px;
            background-position: center;
            background-size: 100%;
            
           
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
                <a href="bookdisplay1.php" class="nav-item nav-link">Home</a>
                    <a href="dealinterest.php" class="nav-item nav-link">View Buyers</a>
                    <!-- <a href="bookdisplay1.php" class="nav-item nav-link active ">Interest</a> -->
                    <a href="Upload.php" class="nav-item nav-link active">Sell a book</a>
                       <!-- <a href="user.php" class="nav-item nav-link">User</a> -->
                    <a href="about.html" class="nav-item nav-link ">About Us</a>
                    <a href="contact.html" class="nav-item nav-link">Contact Us</a>
                    <a href="bookdisplay.php" class="nav-item nav-link">Logout</a>
                   
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
                           
                        </ul>
                    </li>
                    
                </ul>
                   
                    
                </div>
              
            </div>

            <a href="searching.php"
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

