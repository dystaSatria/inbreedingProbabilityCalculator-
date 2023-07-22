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
    <link rel="stylesheet" href="style.css">

    
    <!--Boxicon link-->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    <!--Remixicon-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css" rel="stylesheet">
    <!--Google Font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    <!--Favicon-->
    <link rel="icon" sizes="64x64" type="image/png" href="logoFavicon.png">



    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&family=Poppins:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,300&display=swap" rel="stylesheet">
    <title>Natural Breeding</title>
</head>
<body>

<div class="container1">
    <header>
        <h1 class="logo"></h1>
        <nav>
            <ul class="navlist">
            <li><a href="index.php">Home</a></li>
            <li><a href="tentangEng.php">About Us</a></li>
            <li><a href="alami.php">Natural Breeding</a></li>
            <li><a href="buatan.php">Artificial Insemination</a></li>
            <li><a href="alami.php"><img src="Indonesia.svg" alt="Logo" width="30" height="30"></a></li>
            </ul>
            <i id="menu-icon" class="bx bx-menu"></i>
        </nav>
    </header>
    <!-- Form dan hasil perhitungan -->
</div>

<div class="container">
    
    <div class="kalkulator">

        <a href="index.php" class="close-button"><img src="home.png" alt="" height="16px"></a>
        <h1>Natural Breeding </h1>
        <form method="POST" action="">
            <div class="form-group">
                <label for="Ns">Number of Sires:</label>
                <input type="number" id="Ns" name="Ns" placeholder="Enter the number of sires" value="<?php echo $Ns; ?>">
            </div>
            <div class="form-group">
            <label for="Nd">Number of Dams:</label>
            <input type="number" id="Nd" name="Nd" placeholder="Enter the number of dams" value="<?php echo $Nd; ?>">

            </div>
            <div class="form-group">
                <input type="submit" value="Count">
            </div>
        </form>
        <?php if ($Ns != '' && $Nd != ''): ?>
            <div class="result">
                <?php echo '<h2 style="text-align:center;">Result</h2>'; ?>
                <p>Number of mating combinations in the parental generation: <?php echo "<span style='color: green;'>$Nmp</span>";?></p>
                <p>Number of mating combinations in the first generation: <?php echo "<span style='color:green;'> ". round($Nmg) . "</span>"; ?> </p>
                <p>Number of inbreeding mating combinations in the first generation: <?php echo "<span style='color:green;'>" .round($Nmi)."</span>"; ?></p>
                <p>Inbreeding probability in the first generation: <?php echo "<span style='color:green;'>" .number_format($P1, 2). "</span>";?></p>
            </div>
        <?php endif; ?>
    </div>
    
</div>



</div>
<div class="footer" style="color:white;text-align:center">
        <a href="index.php"><img src="logo.png" alt="" height="100px"></a>
        <p>&copy; 2023 Kapling. All rights reserved. | Created by  dystaSatria</p> 
</div>
    <script src="script.js">
    
    </script>
  
</body>
</html>
