<?php
	
	//carrega os arquvos do diretorio /arquivos/
	$diretorio = dir("arquivos/");
	
	// cria uma lista
	echo "<ul>";
		while($arquivo = $diretorio -> read()){
			if ($arquivo != "." && $arquivo != "..") {
				echo "<li>".$arquivo."</li><br/>";
			}
		}
	echo "</ul>";
	
	// fecha o diretorio
	$diretorio -> close();
?>