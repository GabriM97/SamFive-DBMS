<html>
	<head>
		<title>Registrazione DBMS SAMFive</title>
		<link rel="icon" href="images\icon.png" type="image/png">
		<link rel="Stylesheet" 
			  href="style.css" 
			  type="text/css">
	</head>
	
	<body background="images/tecnologia-a.jpg" class="bodycss">
		<a href="index.php"><img src="images\logo_2.png" align="right" height="100" width="220"></a>
		<?php
			$nome=$_POST["nome"];
			$cognome=$_POST["cognome"];
			$email=$_POST["email"];
			$user=$_POST["username"];
			$passw=$_POST["password"];
			$rank=$_POST["privilegi"];
			$query="INSERT INTO users (`nome`,`cognome`,`email`,`username`,`pswd`,`privilegi`)".
							  "VALUES (\"$nome\",\"$cognome\",\"$email\",\"$user\",\"$passw\",\"$rank\");";
			
			error_reporting(E_ALL ^ E_DEPRECATED);
			if(!($connection=mysql_connect("localhost","root","")))
				die ("ERRORE. Non riesco a contattare il server DBMS");
				
			if(!mysql_select_db("samfive",$connection))
				die("ERRORE. Non riesco a selezionare il DB");
				
			if(!($result=mysql_query($query,$connection)))
				die("ERRORE. Username già esistente. Clicca <a href=\"registrazione.html\">qui</a> per tornare indietro");
				
			echo "";
				
			echo "<br><br><h3>Registrazione effettuata correttamente. ";
			echo "<a href=\"login.html\">Accedi</a> effettuando il login.</h3>";
		?>
	</body>
</html>