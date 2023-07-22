<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Custom Css-->
    <link rel="stylesheet" href="style2.css">

    <link rel="icon" sizes="64x64" type="image/png" href="logoFavicon.png">


    <!--Boxicon link-->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    <!--Remixicon-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css" rel="stylesheet">
    <!--Google Font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&family=Poppins:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,300&display=swap" rel="stylesheet">
    <title>Kalkulator Peluang Inbreeding | Home </title>
</head>
<body>
    <header>
        <a href="index.php" class="logo"><img src="logo.png" alt="" height="45px"></a>
        <ul class="navlist">
            <li><a href="http://iptek.its.ac.id/index.php/limits/article/view/5253">Dokumen Referensi</a></li>
            <li><a href="tentang.php">Tentang Kami</a></li>
            <li><a href="http://iptek.its.ac.id/index.php/limits/article/view/5253">Dokumen Hak Cipta</a></li>
            <li><a href="indexEng.php"><img src="English.svg" alt="Logo" width="30" height="30"></a></li>
        
        </ul>
        <i id="menu-icon" class="bx bx-menu"></i>
    </header>

    <section class="hero">
        
        <div class="hero-text">
            
            <h1>Kalkulator Peluang Inbreeding</h1>
            
            <p>Kapling (Kalkulator Peluang Inbreeding) adalah aplikasi untuk menghitung peluang inbreeding pada hewan monoparous (tipe kelahiran tunggal).</p>
            <p>Perhitungan peluang inbreeding dilakukan berdasarkan asumsi sebagai berikut : </p>
            <p>1. Perhitungan dilakukan pada generasi pertama.</p>
            <p>2. Service per Conception pada sistem IB(Inseminasi Buatan) adalah 1,00.</p>
            <p>3. Perkawinan alam pada tetua dan antar generasi pertama terjadi secara acak.</p>
            <p>4. Perkawinan melalui Inseminasi buatan pada tertua terjadi secara tidak acak,tetapi pada generasi pertama terjadi secara acak.</p>
            <p>5. Pada sistem IB, jumlah betina sama dengan jumlah sperma beku.</p>
            <p>6. Masng-masing pada perkawinan alami dan IB menghasilkan 1 anak.</p>
            <br>
            
            <a href="alami.php">Perkawinan Alami</a>
            <a href="buatan.php">Inseminasi Buatan</a>
        </div>

        <div class="hero-img">
            <img src="livestock.png" alt="">
        </div>


    </section>
    <br>
    <br>
    <br>
    <div class="footer" style="color:white;text-align:center">
        <a href="index.php"><img src="logo.png" alt="" height="100px"></a>
        <h3>&copy; 2023 Kapling. All rights reserved. | Created by <a href="https://github.com/dystaSatria" style="color:white">dystaSatria</a></h3>
    </div>
    <!--js link-->
    <script src="script.js">
    
    </script>
</body>
</html>