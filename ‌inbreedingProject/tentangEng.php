<?php
$Ns = isset($_POST['Ns']) ? $_POST['Ns'] : '';
$Nd = isset($_POST['Nd']) ? $_POST['Nd'] : '';

if ($Ns != '' && $Nd != '') {
    $Nmp = $Ns * $Nd;
    $Nmg = ($Nmp - 1) * ($Nmp / 2);
    $Nmi = ($Ns + $Nd - 2) * ($Nmp / 2);
    $P1 = $Nmi / $Nmg;
} else {
    $Nmp = '';
    $Nmg = '';
    $Nmi = '';
    $P1 = '';
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Custom Css-->
    <link rel="stylesheet" href="styleTentang.css">

    
    <!--Boxicon link-->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!--Remixicon-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css" rel="stylesheet">
    <!--Google Font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <script src="https://kit.fontawesome.com/2cffefa484.js" crossorigin="anonymous"></script>


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!--Favicon-->
    <link rel="icon" sizes="64x64" type="image/png" href="logoFavicon.png">

    <link rel="stylesheet" href="card.css">

    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&family=Poppins:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,300&display=swap" rel="stylesheet">
    <title>Tentang Kami </title>
</head>
<body>

<div class="container1" >
    <header>
        <h1 class="logo"></h1>
        <nav>
            <ul class="navlist" style="margin-left:150px">
            <li><a href="index.php">Home</a></li>
            <li><a href="tentangEng.php" style="text-decoration:underline">About Us</a></li>
            <li><a href="alamiEng.php">Natural Breeding</a></li>
            <li><a href="buatanEng.php">Artificial Insemination</a></li>
            <li><a href="tentang.php"><img src="Indonesia.svg" alt="Logo" width="30" height="30"></a></li>

            </ul>
            <i id="menu-icon" class="bx bx-menu"></i>
        </nav>
    </header>
    <!-- Form dan hasil perhitungan -->
</div>

<section class="our-team" style="margin-bottom: 100px;">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-light">About Us</h1>
            </div>
        </div>
        <hr class="mb-5 mt-4">
        <div class="row">


            <div class="col-lg-3 col-md-6">
                <div class="d-flex justify-content-center">
                    <div class="member">
                        <img src="pakwidya.png" class="img-fluid" alt="" />
                        <div class="member-info">
                            <div class="member-detail">
                                <h4>Widya Pintaka Bayu Putra</h4>
                                <span>Formula Designer</span>
                            </div>
                            <div class="social">
                                
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="d-flex justify-content-center">
                    <div class="member">
                        <img src="pak firman.png" class="img-fluid" alt="" />
                        <div class="member-info">
                            <div class="member-detail">
                                <h4>Muhammad Firmansyah</h4>
                                <span>Formula Designer</span>
                            </div>
                            <div class="social">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="d-flex justify-content-center">
                    <div class="member">
                        <img src="reza.png" class="img-fluid" alt="" />
                        <div class="member-info">
                            <div class="member-detail">
                                <h4>Reza Dysta Satria</h4>
                                <span>System Developer</span>
                            </div>
                            <div class="social">
                                <a href="https://www.linkedin.com/in/reza-dysta-satria-9b0a431b2/"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="d-flex justify-content-center">
                    <div class="member">
                        <img src="buHaryati.png" class="img-fluid" alt="" style="height:150px"/>
                        <div class="member-info">
                            <div class="member-detail">
                                <h4>Dr. Hartati</h4>
                                <span>System Designer</span>
                            </div>
                            <div class="social">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            

            
        </div>
        <hr class="mt-0">
    </div>
</section>
</div>


    <div class="footer" style="color:white;text-align:center">
        <a href="index.php"><img src="logo.png" alt="" height="100px"></a>
        <p>&copy; 2023 Kapling. All rights reserved. | Designed by dystaSatria </p>
    </div>


    <script src="script.js"></script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>
