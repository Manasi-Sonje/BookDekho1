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
            <a href="admin.php" class="navbar-brand p-0">
            <img src="logo.jpg" alt="" width="250" style="margin-top:10px">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                <a href="admin.php" class="nav-item nav-link">Home</a>

                    <a href="about1.html" class="nav-item nav-link ">About Us</a>
                    <a href="contact1.html" class="nav-item nav-link">Contact Us</a>

                    
                    
                   
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-black" href="#" id="navbarDropdown" role="button"
                            data-mdb-toggle="dropdown" aria-expanded="false"> <i class="fas fa-user mx-1"></i> Account
                        </a>
                       
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li>
                                <a class="dropdown-item" href="uploadreport1.php">Uploads</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="interestreport1.php">Interests</a>
                            </li>

                            <li>
                                <a class="dropdown-item" href="userreport1.php">Users</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="login.php">Log out</a>
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
<html>
<body>
<form name=frm method=post action=interestreport1.php>
<center>
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
echo"</tr>";
while($row=mysql_fetch_array($result))
{
echo"<tr>";
echo"<td>$row[0]</td>";
echo"<td>$row[1]</td>";
echo"<td>$row[2]</td>";
echo"<td>$row[3]</td>";
echo"</tr>";
}
echo"record displayed";
echo"</table></center>";
}
}
?>