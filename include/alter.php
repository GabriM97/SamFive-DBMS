<?php
	if(!($rank==5)){
		echo "Il tuo account non dispone delle autorizzazioni necessarie per eseguire questa query.<br><br>Vai alla <a href=\"DBMS.php\">Hompage</a>.";
	}else{
?>
<h1>Modifica tabella (ALTER)</h1>

<p>Inserisci la tua query</p>

<p>Cosa vuoi modificare?</p>

<p>Esempio query: ALTER TABLE tabella (ADD PRIMARY KEY `matricola`, MODIFY `prezzo` FLOAT NOT NULL, DROP `costo`);</p>

<br>

<form method="POST" action="DBMS.php?page=esegui">
	Query<br>
	<textarea rows="15" cols="100" name="query" ></textarea>
	<br><br>
	<input type="hidden" name="tipo" value="alter">
	<input type="submit" value="Esegui" name="btn_exe">
</form>

<?php
	}
?>