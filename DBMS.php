<?php 
	session_start(); 
	//collegamento database
	error_reporting(E_ALL ^ E_DEPRECATED);
	if(!($connection=mysql_connect("localhost","root","")))
		die ("ERRORE. Non riesco a contattare il server DBMS");
				
	if(!mysql_select_db("samfive",$connection))
		die("ERRORE. Non riesco a selezionare il DB");
	//fine collegamento database
	
	
	if(!isset($_SESSION["id_utente"])){
		$page="login.html";
		header('Refresh: 3; url=' . $page);
		echo ("<br><br>Errore. Effettuare prima il login!<br>Attendi...");
	}else{
		//acquisizione username
		$iduser=$_SESSION["id_utente"];
		$query="SELECT `username`,`privilegi` FROM users ".
				"WHERE \"$iduser\"=`id_user`;";
				
		if(!($result=mysql_query($query,$connection)))
			die("ERRORE. Query non eseguita");
		
		if(mysql_num_rows($result)>0){
			$rs=mysql_fetch_row($result);
			$user=$rs[0];
			$rank=$rs[1];
		}else{
			echo "ERRORE!";
		}
		//fine acquisizione username
		
?>
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
		<!-------- INTESTAZIONE ------->
		<div style="width: 1000px; margin:auto; background-image: url('images/grigio-chiaro.jpg'); box-shadow: 0px 0px 10px #000">	
			<p align="center"><img src="images/nome.png"></p> <!-- DMBS SAMFive Technologies -->
			<?php echo "<p class=\"plogout\" align=\"right\">Benvenuto ".$user."<br><a href=\"logout.php\">Logout</a></p>";	?>
		
			<!-----------   MENU'  ------------>
			<div style="float: left; width: 230px; height: 1000px; padding: 10px; box-shadow: 0px 0px 10px #000; background-image: url('images/avorio.jpg');">
				<h2 align="center">Men&ugrave;</h2>
				<?php include 'include/menu.php'; ?>
			</div>
			
			<!-------- CONTENUTO ---------->
			<div style="float: right; width: 730px; height: 1000px; padding: 10px; box-shadow: 0px 0px 10px #000; background-image: url('images/arancione.jpg')">				
				<?php
					if(!isset($_GET["page"])){
						include 'include/homepage.php';
					}else{
						if($_GET["page"]=='select'){
							include 'include/select.php';
						}else{
							if($_GET["page"]=='insert'){
								include 'include/insert.php';
							}else{
								if($_GET["page"]=='update'){
									include 'include/update.php';
								}else{
									if($_GET["page"]=='delete'){
										include 'include/delete.php';
									}else{
										if($_GET["page"]=='create'){
											include 'include/create.php';
										}else{
											if($_GET["page"]=='alter'){
												include 'include/alter.php';
											}else{
												if($_GET["page"]=='drop'){
													include 'include/drop.php';
												}else{
													if($_GET["page"]=='log'){
														include 'include/log.php';
													}else{
														if($_GET["page"]=='richiesta'){
															include 'include/richiesta.php';
														}else{
															if($_GET["page"]=='richiedi'){
																include 'include/richiedi.php';
															}else{
																if($_GET["page"]=='esegui'){
																	include 'include/esegui.php';
																}else{
																	echo "ERRORE!";
																}
															}
														}
													}
												}
											}
										}
									}
								}
							}
						}
					}
				?>
			</div>
			
			<!-- <div style="clear: both"></div> -->
		</div>
	</body>
</html>
<?php } //chiusura else iniziale ?>