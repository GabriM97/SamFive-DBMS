<?php
	if(!($rank>=4)){
		echo "Il tuo account non dispone delle autorizzazioni necessarie per eseguire questa query.<br><br>Vai alla <a href=\"DBMS.php\">Hompage</a>.";
	}else{
?>
<h1>Elimina elementi (DELETE)</h1>

<p>Inserisci la tua query</p>

<p>Cosa vuoi eliminare?</p>

<p>Esempio query: DELETE from tabella WHERE nome=`Andrea`;</p>

<br>

<form method="POST" action="DBMS.php?page=esegui">
	Query<br>
	<textarea rows="15" cols="100" name="query" ></textarea>
	<br><br>
	<input type="hidden" name="tipo" value="delete">
	<input type="submit" value="Esegui" name="btn_exe">
</form>

<?php
	}
?>