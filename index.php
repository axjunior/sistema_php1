<?php header("Content-type: text/html; charset=utf-8"); ?>
<meta charset="UTF-8">
<html>
	<head>
		<title> Envio de arquivos</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<!-- SCRIPT PARA ABRIR/FECHAR O POPUP -->
		<script language="javascript">
			function popup_abrir(){
				document.getElementById('popup').style.display='block';
			}
			function popup_fechar(){
				document.getElementById('popup').style.display='none';
			}
		</script>
	</head>
	<body>
		<div id="cabecalho">
				<div id="cabecalho_texto">
					<h1>Formulário de envio de codigos</h1>
					<h2>-- edite aqui o curso/disciplina --</h2>
					<p><b>Clique <a href="#" style="color: red" onClick="popup_abrir()">aqui</a> para ver a(s) atividade(s)</b></p>
				</div>
		</div>
		<table id="main_table">
			<tr>
				<td>
					<!--FORMULARIO DE ENVIO -->
					<form id="formulario" method='POST' action='salvar.php'>
						<h3>Nome do Aluno:</h3>
						<input id="textbox" type='text' name='txt_nome' size='40'> <br/>
						<h3>Atividade:</h3>
						<!-- COMBOBOX DAS ATIVIDADES -->
						<select name="atividade">
							<option value="1">Atividade 1</option>
							<option value="2">Atividade 2</option>
							<!-- replicar atividade 1 para outras atividades  -->
						</select> <br/>
				</td>
				<td rowspan="2">
				<!-- AQUI FICA A FRAME RESPONSAVEL POR EXIBIR O CONTEUDO DA PASTA PELO ARQUIVO RESULTS.HTML -->
					<h3>Lista de ativades enviadas</h3>
					<iframe id="lista_trabalhos" src="show_lista.php"></iframe>
				</td>
			</tr>
			<tr>
				<td>
						<!-- AREA ONDE O ALUNO IRA COPIAR O CODIGO -->
						<h3>Copie e cole o codigo no espaço abaixo:</h3><br/>
						<textarea id="codigo" name="comment" rows="20" cols="120"></textarea>
						<br/>
						<!-- SUBMIT-->
						<input id="main_table_button" type='submit' name='btnOK' value='Enviar'>
					</form>
				</td>
			</tr>
		</table>
		<!-- POPUP QUE VAI APRESENTAR AS ATIVIDADES PARA OS ALUNOS -->
		<div id="popup">
			<div id="popup_titulo">
				<b>Lista de atividades</b>
				<a id="popup_fechar" onClick="popup_fechar()">X</a>
			</div>
			<div id="popup_corpo">
				1.Aqui esta escrito o q deve ser feito na atividade 1. Aperte no "X" no canto superior direito do popup para fechar.
				<br/><br/>
				2.Aqui esta escrito o q deve ser feito na atividade 1. Aperte no "X" no canto superior direito do popup para fechar.
				<br/><br/>
			</div>		
		</div>
	</body>
</html>

