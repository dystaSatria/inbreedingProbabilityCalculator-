<!DOCTYPE html>
<html>
<head>




<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Custom Css-->
    <link rel="stylesheet" href="styleBuatan.css">

    <!--Boxicon link-->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">


	<!--Favicon-->
    <link rel="icon" sizes="64x64" type="image/png" href="logoFavicon.png">
    <!--Remixicon-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css" rel="stylesheet">
    <!--Google Font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&family=Poppins:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,300&display=swap" rel="stylesheet">
    
	<title>Artificial Insemination</title>
	
	
</head>
<body>

<div class="container1">
    <header>
	<a href="index.php" class="logo"><img src="logo.png" alt="" height="40px"></a>
        <ul class="navlist">	
            <li><a href="indexEng.php">Home</a></li>
            <li><a href="tentangEng.php">About Us</a></li>
            <li><a href="alamiEng.php">Natural Breeding</a></li>
            <li><a href="buatanEng.php">Artificial Insemination</a></li>
            <li><a href="buatan.php"><img src="Indonesia.svg" alt="Logo" width="30" height="30"></a></li>
        </ul>
            <i id="menu-icon" class="bx bx-menu"></i>
        
    </header>
    <!-- Form dan hasil perhitungan -->
</div>

<div class="container">
	<div class="kalkulator">
	<a href="index.php" class="close-button"><img src="home.png" alt="" height="16px"></a>

	<h1>Artificial Insemination</h1>
	<form method="POST" action="">
        <label for="n">Number of Sires:</label>
        
        <input type="number" name="n" id="n" required placeholder="Enter the number of sires">

        <br>
        <div style="text-align: center;margin:20px;">
            <button type="submit">Input the number of sires</button>
        </div>
		
		
		<?php
			echo '<div class="footer" style="margin-top:120px">';
			echo '    <a href="index.php"><img src="logo.png" alt="" height="100px"></a>';
			echo '</div>';
		?>
        <br>
        <br>
        <br>
	</form>

	<?php
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		$n = $_POST['n'];
		$NMP = 0;
		$NMK = 0;

		if ($n > 0) {
			
            
            echo '<h3 style="text-align: center;">Number of Sires: ' . $n . '</h3>';
            echo '<h2>Dose Values</h2>';
            
			echo '<form method="POST">';
			echo '<input type="hidden" name="n" value="' . $n . '">';

			for ($i = 1; $i <= $n; $i++) {
				
                echo '<label for="d' . $i . '">Dose for Sire ' . $i . ':</label>';
				echo '<input type="number" name="d[]" id="d' . $i . '" required><br><br>';
			}
            echo '<br>';
            echo '<div style="text-align: center;margin:20px;">';
            echo '<button type="submit">Calculate</button>';
            echo'</div>';
			
			echo '</form>';
			
		}

		if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['d'])) {
			
			$dosis = $_POST['d'];
			$NMP = array_sum($dosis);

			foreach ($dosis as $d) {
				$Jumlah = $d * ($d - 1) * 0.5;
				$NMK += $Jumlah;
			}

			

			echo '<div class="result">';
			echo '<h2 style="text-align:center;">Result</h2>';
            echo '<p>Number of mating combinations in the parental generation: <br> <span style="color:green;">' . $NMP . '</span> combinations</p>';
            echo '<p>Number of inbreeding mating combinations in the first generation: <br> <span style="color:green;">' . $NMK . '</span> combinations</p>';
			$NMG = ($NMP - 1) * ($NMP * 0.5);
            echo '<p>Number of mating combinations in the first generation: <br> <span style="color:green;"> ' . $NMG . '</span> combinations</p>';
			$P1 = $NMK / $NMG;
            echo '<p>Inbreeding probability: <br> <span style="color:green;"> ' . $P1 . '</span> </p>';
			echo '</div>';
			echo '<div class="footer">';
			echo '    <a href="index.php"><img src="logo.png" alt="" height="100px"></a>';
			echo '    <h3>&copy; 2023 Kapling. All rights reserved. | Created by <a href="https://github.com/dystaSatria" style="color:white">dystaSatria</a></h3>';
			echo '</div>';

		}
	}
	?>
</div>

</div>




<script src="script.js"></script>


</body>
</html>


