<?php session_start(); ?>
<html>
	<head>
		<title>Login DBMS SAMFive</title>
		<link rel="icon" href="images\icon.png" type="image/png">
	</head>
	
	<body>
		<?php
			$user=$_POST["username"];
			$passw=$_POST["password"];
			$query="SELECT `id_user` FROM users ".
					"WHERE \"$user\"=`username` and \"$passw\"=`pswd`;";
						
			$filelog=fopen("include/log.txt","a");
			
			error_reporting(E_ALL ^ E_DEPRECATED);
			if(!($connection=mysql_connect("localhost","root","")))
				die ("ERRORE. Non riesco a contattare il server DBMS");
				
			if(!mysql_select_db("samfive",$connection))
				die("ERRORE. Non riesco a selezionare il DB");
				
			if(!($result=mysql_query($query,$connection)))
				die("ERRORE. Query non eseguita");
		
			if(mysql_num_rows($result)>0){
				$rs=mysql_fetch_row($result);
				$_SESSION["id_utente"]=$rs[0];
				$page="DBMS.php";
				header('Refresh: 3; url=' . $page);
				
				$data=date("d/m/Y G:i");
				$log=$user." -- ".$data."<br>";
				fwrite($filelog,$log);
				
				echo "<br><br>Login effettuato correttamente. Verrai reindirizzato alla pagina del DBMS.";
				echo "<br><br>Caricamento in corso...";
				echo "<br><br>Clicca <a href=\"DBMS.php\">qui</a> se non vuoi aspettare.";
			}else{
				echo "<br><br>Attenzione dati errati! ";
				echo "Clicca <a href=\"login.html\">qui</a> per tornare indietro.";
			}
			fclose($filelog);
		?>
	</body>
</html>
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
	
	
	
	</body>
</html>