<!DOCTYPE html>
<html lang="en">
<script>
</script>
<style>
        body{
            /* background-image: url("loginimg.jpg");
            background-repeat: "no-repeat"; */
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

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <!-- <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner"></div>
    </div> -->
    <!-- Spinner End -->


    

    <!-- Navbar & Carousel Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
            <a href="bookdisplay1.php" class="navbar-brand p-0">
                <!-- <h1 class="m-0"><i class="fa fa-user-tie me-2"></i>BookDekho</h1> -->
                <img src="logo.jpg" alt="" width="250" style="margin-top:10px">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                <a href="bookdisplay1.php" class="nav-item nav-link active">Home</a>
                    <a href="dealinterest.php" class="nav-item nav-link">View Buyers</a>
                    <!-- <a href="bookdisplay1.php" class="nav-item nav-link active ">Interest</a> -->
                    <a href="Upload.php" class="nav-item nav-link">Sell A book</a>
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
        
    
                </div>
                
            </div>

            <a href="searching.php"
                class="btn btn-primary py-2 px-4 ms-3">Search</a>
    </div>
    </nav>

        <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
           
        </div>
    </div>
    <div class="container-fluid position-relative p-0">
        
    </div>
    


    
    <div class="For-you">
        <div class="container">
            <div class="row">
<?php 
session_start();
$cn=mysql_connect("localhost","root");
mysql_select_db("book",$cn);
$sql="select * from upload where status='Available' and Userid<>'$_SESSION[userid]' and uploadno not in (select uploadno from interest where Userid='$_SESSION[userid]')";
// $sql="select distinct * from upload where status='Available' and Userid<>'$_SESSION[userid]' and uploadno not in (select uploadno from interest where Userid='$_SESSION[userid]' and interest.deal='Y')";
$result=mysql_query($sql,$cn);
echo "<table>";
echo "<tr>";
echo "<div class='For-you'>";
echo "    <div class='container>";
echo "        <div class='row'>";
echo "            <div class='col-md-12'>";
echo "               <div class='section-heading'>";
echo "                   <h2>Latest Products</h2>";
echo "                    <a href='#one'>view all products <i class='fa fa-angle-right'></i></a>";
echo "                </div>";
echo "            </div>";
echo "</tr></table>";

while($row=mysql_fetch_array($result))
{
echo "<div class='col-md-4' id='one'>";
echo "                    <div class='product-item'>";
echo "                        <a href='largedisplay1.php?upl=$row[0]'><img src='$row[11]' alt='' height='300' width='150'></a>";
echo "                        <div class='down-content'>";
echo "                            <a href=largedisplay1.php?upl=$row[0]>";
echo "                                <h4>Title: $row[2]</h4>";
echo "                            </a>";
$price=(int)$row[10]*.05 + (int)$row[10];
echo "                            <h6>Rs.$price</h6>";
echo "                            <p><u><i<h2>Category: $row[4]</h2></i></u></p>";
echo "                             <i<h3>Original Price: $row[9]</h3></i>";

echo "                    </div></a>";
echo "                </div></a>";
echo "            </div></a>";
}
?>

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