<?php
	if(!($rank==5)){
		echo "Il tuo account non dispone delle autorizzazioni necessarie per eseguire questa query.<br><br>Vai alla <a href=\"DBMS.php\">Hompage</a>.";
	}else{
?>
<h1>Crea tabella (CREATE)</h1>

<p>Inserisci la tua query</p>

<p>Cosa vuoi creare?</p>

<p>Esempio query: CREATE TABLE Personale(`matricola` VARCHAR(5) PRIMARY KEY, `nominativo` VARCHAR(30) NOT NULL);</p>

<br>

<form method="POST" action="DBMS.php?page=esegui">
	Query<br>
	<textarea rows="15" cols="100" name="query" ></textarea>
	<br><br>
	<input type="hidden" name="tipo" value="create">
	<input type="submit" value="Esegui" name="btn_exe">
</form>

<?php
	}
?>