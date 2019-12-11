<?php
	if(!isset($_POST["btn_exe"])){
		echo "ERRORE! Nessuna query eseguita.";
	}else{
		$query=$_POST["query"];
		$tipo=$_POST["tipo"];
		
		if(!($result=mysql_query($query,$connection))){
			echo "<br><br><br>ERRORE. Query non eseguita.";
			echo "<p align=\"center\"><img src=\"images/errore.png\" height=\"80\" width=\"80\"></p>";
			die("");
		}

		if($tipo=="select"){
			echo "<table border=\"0\">";
			if(mysql_num_rows($result)>0){
				echo "Query: ".$query."<br><br><br>";
				while($rs=mysql_fetch_row($result)){
					echo "<tr>";
					$indice=count($rs);
					for($i=0; $i<$indice; $i++){
						echo "<td>".$rs[$i]."</td>";
					}
					echo "</tr>";
				}
			}else{
				echo "<br><br>Nessun risultato trovato.";
			}
			echo "</table>";
		}else{
			echo "<br><br>Query: ".$query."<br><br><br>";
			echo "Query eseguita correttamente.<br>";
			echo "<p align=\"center\"><img src=\"images/visto.png\" height=\"100\" width=\"100\"></p>";
		}
	}
					
?>