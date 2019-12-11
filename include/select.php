<?php
	if(!($rank>=1)){
		echo "Effettua il <a href=\"login.html\">login</a> prima di poter gestire il database.";
	}else{
?>
<h1>Ricerca elementi (SELECT)</h1>

<p>Inserisci la tua query</p>

<p>Cosa vuoi cercare?</p>

<p>Esempio query: SELECT `nome`,`cognome` FROM tabella WHERE `età`=18; </p>

<br>

<form method="POST" action="DBMS.php?page=esegui">
	Query<br>
	<textarea rows="15" cols="100" name="query" ></textarea>
	<br><br>
	<input type="hidden" name="tipo" value="select">
	<input type="submit" value="Esegui" name="btn_exe">
</form>

<?php
	}
?>