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
            <a href="index1.html" class="navbar-brand p-0">
            <img src="logo.jpg" alt="" width="250" style="margin-top:10px">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                <a href="bookdisplay1.php" class="nav-item nav-link active">Home</a>
                    <a href="dealinterest.php" class="nav-item nav-link">View Buyers</a>
                    <a href="Upload.php" class="nav-item nav-link">Sell a book</a>
                    <a href="about.html" class="nav-item nav-link ">About Us</a>
                    <a href="contact.html" class="nav-item nav-link">Contact Us</a>
                    <a href="bookdisplay.php" class="nav-item nav-link">Logout</a>
                    
                    
                   
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-black" href="#" id="navbarDropdown" role="button"
                            data-mdb-toggle="dropdown" aria-expanded="false"> <i class="fas fa-user mx-1"></i> Account
                        </a>
                        <!-- Dropdown menu -->
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
<form name=frm method=post action=uploadreport.php>
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
    session_start();
    $uid=$_SESSION['userid'];
$sql="Select * from upload where Userid='$uid'";
$result=mysql_query($sql,$cn);
echo "<div class='container'>";
echo "<div class='col-md-12'";
echo "<div class='panel panel-success'>";
echo "<div class='panel-heading'>";
echo "<span class=''>";
echo"<center><table border=5px solid >";
echo"<tr border=5px solid >";
echo"<th>Upload no</th>";
echo"<th>Userid</th>";
echo"<th>Title</th>";
echo"<th>Update</th>";
echo"<th>Category</th>";
echo"<th>Language</th>";
echo"<th>Edition</th>";
echo"<th>Publication</th>";
echo"<th>Author</th>";
echo"<th>Original Price</th>";
echo"<th>Selling Price</th>";
echo"<th>Book image</th>";
echo"<th>Status</th>";
echo "</div>";
echo"</tr>";
while($row=mysql_fetch_array($result))
{
    echo "<div class='panel panel-success'";
    echo "<div class='panel-body'>";
    echo "<div class='row'>";
    echo "<div class='col-md-12'>";
echo"<tr style ='border=5px solid'>";
echo"<td >$row[0]</td>";
echo"<td>$row[1]</td>";
echo"<td>$row[2]</td>";
echo"<td>$row[3]</td>";
echo"<td>$row[4]</td>";
echo"<td>$row[5]</td>";
echo"<td>$row[6]</td>";
echo"<td>$row[7]</td>";
echo"<td>$row[8]</td>";
echo"<td>$row[9]</td>";
echo"<td>$row[10]</td>";
echo"<td><img src='$row[11]' alt='' height='60' width='50'></td>";
echo"<td>$row[12]</td>";
echo"</tr>";
echo "<td><hr><br></td>";
echo "</div>";
echo "</div>";
echo "</div>";
echo "</div>";
}
echo "</div>";
echo "</div>";
echo"record displayed";
echo"</table></center>";
}
}
?>