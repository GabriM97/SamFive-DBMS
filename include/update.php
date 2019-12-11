<?php
	if(!($rank>=3)){
		echo "Il tuo account non dispone delle autorizzazioni necessarie per eseguire questa query.<br><br>Vai alla <a href=\"DBMS.php\">Hompage</a>.";
	}else{
?>
<h1>Modifica elementi (UPDATE)</h1>

<p>Inserisci la tua query</p>

<p>Cosa vuoi modificare?</p>

<p>Esempio query: UPDATE tabella SET `stipendio`=1200 WHERE `matricola`=35;</p>

<br>

<form method="POST" action="DBMS.php?page=esegui">
	Query<br>
	<textarea rows="15" cols="100" name="query" ></textarea>
	<br><br>
	<input type="hidden" name="tipo" value="update">
	<input type="submit" value="Esegui" name="btn_exe">
</form>

<?php
	}
?>