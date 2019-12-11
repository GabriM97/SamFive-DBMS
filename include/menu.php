<?php				
		if($rank==1){ //utente registrato
			echo "<br><br><a href=\"DBMS.php\">Hompage</a>";
			echo "<br><br><a href=\"DBMS.php?page=select\">Ricerca elementi</a>";
		}else{
			if($rank==2){ //Dipendente
				echo "<br><br><a href=\"DBMS.php\">Hompage</a>";
				echo "<br><br><a href=\"DBMS.php?page=select\">Ricerca elementi</a>";
				echo "<br><br><a href=\"DBMS.php?page=insert\">Inserisci elementi</a>";
			}else{
				if($rank==3){ //Managers
					echo "<br><br><a href=\"DBMS.php\">Hompage</a>";
					echo "<br><br><a href=\"DBMS.php?page=select\">Ricerca elementi</a>";
					echo "<br><br><a href=\"DBMS.php?page=insert\">Inserisci elementi</a>";
					echo "<br><br><a href=\"DBMS.php?page=update\">Modifica elementi</a>";
				}else{
					if($rank==4){ //Amministratore Delegato
						echo "<br><br><a href=\"DBMS.php\">Hompage</a>";
						echo "<br><br><a href=\"DBMS.php?page=select\">Ricerca elementi</a>";
						echo "<br><br><a href=\"DBMS.php?page=insert\">Inserisci elementi</a>";
						echo "<br><br><a href=\"DBMS.php?page=update\">Modifica elementi</a>";
						echo "<br><br><a href=\"DBMS.php?page=delete\">Elimina elementi</a>";
						echo "<br><br><a href=\"DBMS.php?page=log\">Log DBMS</a>";
					}else{	//Database Administrator
						echo "<br><br><a href=\"DBMS.php\">Hompage</a>";
						echo "<br><br> ------ COMANDI DML ------";
						echo "<br><br><a href=\"DBMS.php?page=select\">Ricerca elementi</a>";
						echo "<br><br><a href=\"DBMS.php?page=insert\">Inserisci elementi</a>";
						echo "<br><br><a href=\"DBMS.php?page=update\">Modifica elementi</a>";
						echo "<br><br><a href=\"DBMS.php?page=delete\">Elimina elementi</a>";
						echo "<br><br> ------ COMANDI DDL ------";
						echo "<br><br><a href=\"DBMS.php?page=create\">Crea tabella</a>";
						echo "<br><br><a href=\"DBMS.php?page=alter\">Modifica tabella</a>";
						echo "<br><br><a href=\"DBMS.php?page=drop\">Elimina Tabella</a>";
						echo "<br><br> ------ OTHER ------";
						echo "<br><br><a href=\"DBMS.php?page=log\">Log DBMS</a>";
					}			
				}
			}
		}
?>