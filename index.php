<html>
<head><title>Aspas duplas e aspas simples</title></head>
<body>
<?php
	$hoje = date("d/m/Y",time()); //você acabou de criar uma variável no PHP
	$buscador = "Google";
	
	$frase1 = "O $buscador é o meu buscador nada me faltará!";
	$frase2 = "A data de hoje é: $hoje";
	
	echo "<h4>$frase1</h4>";
	echo "<h4>$frase2</h4>";
?>
<p><strong>Trabalhando com aspas simples em PHP</strong></p>
<?php
	$palavra1 = 'teste com aspas simples';
	$aspas_simples = 'Este é um texto com aspas simples - Rafa\'s text';
	$aspas_simples2 = '<p align="right">Novo texto com aspas simples.</p>';
	$aspas_simples3 = 'Confira o $palavra1'; //o conteúdo de palavra 1 não será impresso na tela

	echo $aspas_simples.'<br />';
	echo $aspas_simples2.'<br />';
	echo $aspas_simples3.'<br />';
?>
<p><strong>Trabalhando com aspas duplas em PHP</strong></p>
<?php
	$palavra1 = 'teste com aspas simples';
	$aspas_duplas = "Este é um texto com aspas duplas - Rafa's text";
	$aspas_duplas2 = "<p align=\"right\">Novo texto com aspas duplas.</p>";
	$aspas_duplas3 = "Confira o $palavra1"; //o conteúdo de palavra 1 será impresso na tela

	echo $aspas_duplas.'<br />';
	echo $aspas_duplas2.'<br />';
	echo $aspas_duplas3.'<br />';
?>
</body>
</html>
