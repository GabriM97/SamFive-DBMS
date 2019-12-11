<?php
	if(!($rank>=4)){
		echo "Il tuo account non dispone delle autorizzazioni necessarie per eseguire questa query.<br><br>Vai alla <a href=\"DBMS.php\">Hompage</a>.";
	}else{
?>
<h1>Log DMBS SAMFive Technologies</h1>

<?php
		$filelog=fopen("include/log.txt","r");	
		$log=fread($filelog,filesize("include/log.txt"));
		fclose($filelog);
		echo $log;
		echo "<br> &nbsp;&nbsp;&nbsp; ----- END OF LOG -----";
	}
?>