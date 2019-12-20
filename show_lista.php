<?php
	
	//carrega os arquvos do diretorio /arquivos/ em forma de array
	$lista_arquivos = glob("arquivos/*.txt");
	
	//classifica os itens do array em ordem alfabetica
	sort($lista_arquivos,SORT_STRING);	
	
	// cria uma lista
	echo "<ul>";
		foreach($lista_arquivos as $arquivo){
			if ($arquivo != "arquivos/ignore.txt") {
				echo "<li>".substr($arquivo,9)."</li><br/>"; //o substring retira o "arquivos/" q fica antes do nome
			}
		}
	echo "</ul>";
	
?>