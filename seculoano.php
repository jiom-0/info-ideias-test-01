<html>
<body>
<h1>
<?php	
	/*
	1 - Função SeculoAno($ano)
	Desenvolva uma função que receba como parametro o ano e retorne o século ao qual este ano faz parte.
	O primeiro século começa no ano 1 e termina no ano 100, o segundo século começa no ano 101 e termina no 200.
	*/
	function SeculoAno($ano){
		$seculo=ceil($ano/100);
		echo "Ano ".$ano." = Século ".$seculo;
	}
	SeculoAno(101);
?></h1>
</body>
</html>