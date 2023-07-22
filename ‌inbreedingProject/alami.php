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
    <title>Perkawinan Alami </title>
</head>
<body>

<div class="container1">
    <header>
        <h1 class="logo"></h1>
        <nav>
            <ul class="navlist">
            <li><a href="index.php">Home</a></li>
            <li><a href="tentang.php">Tentang Kami</a></li>
            <li><a href="alami.php">Perkawinan Alami</a></li>
            <li><a href="buatan.php">Perkawinan Buatan</a></li>
            <li><a href="alamiEng.php"><img src="English.svg" alt="Logo" width="30" height="30"></a></li>
            </ul>
            <i id="menu-icon" class="bx bx-menu"></i>
        </nav>
    </header>
    <!-- Form dan hasil perhitungan -->
</div>

<div class="container">
    
    <div class="kalkulator">

        <a href="index.php" class="close-button"><img src="home.png" alt="" height="16px"></a>
        <h1>Perkawinan Alami </h1>
        <form method="POST" action="">
            <div class="form-group">
                <label for="Ns">Jumlah Pejantan :</label>
                <input type="number" id="Ns" name="Ns" placeholder="Masukkan jumlah pejantan" value="<?php echo $Ns; ?>">
            </div>
            <div class="form-group">
                <label for="Nd">Jumlah Induk :</label>
                <input type="number" id="Nd" name="Nd" placeholder="Masukkan jumlah induk"value="<?php echo $Nd; ?>">
            </div>
            <div class="form-group">
                <input type="submit" value="Hitung">
            </div>
        </form>
        <?php if ($Ns != '' && $Nd != ''): ?>
            <div class="result">
                <?php echo '<h2 style="text-align:center;">Hasil</h2>'; ?>
                <p>Jumlah kombinasi perkawinan pada tetua/parental: <?php echo "<span style='color: green;'>$Nmp</span>";?></p>
                <p>Jumlah kombinasi perkawinan pada generasi pertama: <?php echo "<span style='color:green;'> ". round($Nmg) . "</span>"; ?> </p>
                <p>Jumlah kombinasi perkawinan inbreeding pada generasi pertama: <?php echo "<span style='color:green;'>" .round($Nmi)."</span>"; ?></p>
                <p>Peluang inbreeding pada generasi pertama: <?php echo "<span style='color:green;'>" .number_format($P1, 2). "</span>";?></p>
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
