<?php session_start(); ?>
<html>
	<head>
		<title>DBMS SAMFive</title>
		<link rel="icon" href="images\icon.png" type="image/png">
		<link rel="Stylesheet" 
			  href="style.css" 
			  type="text/css">
	</head>
	
	<body class="bodycss" background="images\background-s.png">
		<a href="index.php"><img src="images\logo_2.png" align="right" height="100" width="220"></a>
				
		<?php
		
			$page="login.html";
			if(isset($_SESSION["id_utente"])){
				header('Refresh: 2; url=' . $page);
				session_destroy();
				echo "<br><br>";
				echo "Logout effettuato correttamente.";
			}else
				echo "<br><br><br>Errore! Clicca <a href=\"login.html\">qui</a> per andare al login.";
		?>
	</body>
</html>