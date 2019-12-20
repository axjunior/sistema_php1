<?php
//dados do POST
$nome = $_POST["txt_nome"];
$atividade = $_POST["atividade"];
$texto = $_POST["comment"];

$conteudo =	"$texto\r\n";

//Criando o nome do arquivo
$arquivo = "$nome-Atividade $atividade.txt";

//Verifica se, ao abrir o arquivo, da erro
if (!$file = fopen($arquivo, "a")) {
        echo  "Erro abrindo arquivo ($arquivo)";
        exit;
   }

//Lotando o arquivo
if (!fwrite($file, $conteudo)) {
       print "Erro escrevendo no arquivo ($arquivo)";
       exit;
   }
   
// o "./" eh pra indicara q esta na raiz do arquivo
rename("./$arquivo", "./arquivos/$arquivo");

//Fecha o arquivo
fclose($file);
header('Location:index.php');
?>