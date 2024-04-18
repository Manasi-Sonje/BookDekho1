<!DOCTYPE html>
<html lang="en">
<script>
</script>
<style>
    /* body{
            background-image: url("loginimg.jpg");
            background-repeat: "no-repeat";
            height: 900px;
            background-position: center;
            background-size: 100%;
            
           
        } */
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



    <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
        <div class="container-fluid position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
                <a href="index1.html" class="navbar-brand p-0">
                    <img src="logo.jpg" alt="" width="250" style="margin-bottom:-5px">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">

                </div>

                <a href="Login.php" class="btn btn-primary py-2 px-4 ms-3">Login</a>
            </nav>
        </div>
    </div>
    </div>
</body>

</html>
<html>

<body>
<div class="For-you">
        <div class="container">
            <div class="row">
    <?php
    session_start();
    $cn = mysql_connect("localhost", "root");
    mysql_select_db("book", $cn);
    $sql = "select * from upload";
    $result = mysql_query($sql, $cn);
    echo "<table>";
    $i = 0;
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

    while ($row = mysql_fetch_array($result)) {
        echo "<div class='col-md-4' id='one'>";
        echo "                    <div class='product-item'>";
        echo "                        <a><img src='$row[11]' alt='' height='300' width='150'></a>";
        echo "                        <div class='down-content'>";
        echo "                            <a >";
        echo "                                <h4>Title: $row[2]</h4>";
        echo "                            </a>";
        $price=(int)$row[10]*.05 + (int)$row[10];
        echo "                            <h6>Rs.$price</h6>";
        echo "                            <p><u><i<h2>Category: $row[4]</h2></i></u></p>";
        echo "                             <i<h3>Original Price: $row[9]</h3></i>";
        //$i = $i + 1;
        // if($i==4)
// {
// $i=0;
// echo "</tr>";
// echo "<tr>";
// echo "</div>";
// }
        echo "                    </div></a>";
        echo "                </div></a>";
        echo "            </div></a>";
    }
    ?>
</body>

</html>