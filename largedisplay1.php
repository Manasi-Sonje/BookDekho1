<!DOCTYPE html>
<html lang="en">
<script>

</script>

<head>
    <style>
        body{
            background-image: url("largedisplay.jpg");
            background-repeat: "no-repeat";
            height: 500px;
            background-position: center;
            background-size: 100%;
        }

    </style>
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
    <!-- Spinner Start -->
    <!-- <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner"></div>
    </div> -->
    <!-- Spinner End -->




    <!-- Navbar & Carousel Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
            <a href="index1.html" class="navbar-brand p-0">
                <h1 class="m-0"><i class="fa fa-user-tie me-2"></i>BookDekho</h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="bookdisplay1.php" class="nav-item nav-link active">Home</a>
                    <a href="dealinterest.php" class="nav-item nav-link">Confirm</a>
                    <!-- <a href="bookdisplay1.php" class="nav-item nav-link active ">Interest</a> -->
                    <a href="Upload.php" class="nav-item nav-link">Sell a book</a>
                    <!-- <a href="user.php" class="nav-item nav-link">User</a> -->
                    <a href="about.html" class="nav-item nav-link ">About Us</a>
                    <a href="contact.html" class="nav-item nav-link">Contact Us</a>
                    <a href="bookdisplay.php" class="nav-item nav-link">Logout</a>
                </div>
             
            </div>

            <a href="searching.php" class="btn btn-primary py-2 px-4 ms-3">Search</a>
    </div>
    </nav>

    <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">

    </div>
    </div>
</body>

</html>
<html>

<body>
    <form name=frm method=post action=preint.php>
        <?php
        session_start();
        $cn = mysql_connect("localhost", "root");
        mysql_select_db("book", $cn);
        $sql = "select * from upload where uploadno='$_GET[upl]'";
        $result = mysql_query($sql, $cn);
        echo "<center><table>";
        $i = 0;
        echo "<tr>";
        while ($row = mysql_fetch_array($result)) {
            $ud = $row[1];
            $_SESSION['upuserid'] = $ud;
            $sql11 = "select * from user where userid=$ud";
            $result11 = mysql_query($sql11, $cn);
            $row11 = mysql_fetch_array($result11);
            $un = $row11[1];
            $em = $row11[4];
            $_SESSION['uplno'] = $_GET['upl'];
            $price = (int) $row[10] * .05 + (int) $row[10]; 
            echo "<td><img src=$row[11] height=300 width=350><hr>title:$row[2]<br>language:$row[5]<br>edition:$row[6]<br>publication:$row[7]<br>author:$row[8]<br>original_price:$row[9]<br>selling_price:$price<br>No. of Pages:$row[16]<br>upload by:$un<br>emailid:$em<br>Quality Factors:$row[17]<br><br></td>";
            echo "<td></td><td></td><td></td><td></td><td></td><td></td>";
            $i = $i + 1;
            if ($i == 6) {
                $i = 0;
                echo "</tr>";
                echo "<tr>";
            }
        }
        echo "</tr></table></center>";
        ?>
        <hr>
        <center>
            <input type=submit name=sbm value=Request class="btn btn-primary py-2 px-4 ms-3" onclick="request()">
            <input type=submit name=sbm value=Previous class="btn btn-primary py-2 px-4 ms-3">
        </center>
    </form>
    <script>
        function request(){
            alert("Your request for the book has been sent to the seller...!!!");
        }
    </script>
</body>

</html>