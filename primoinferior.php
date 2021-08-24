<html>
<body>
<h1>
<?php
	/*2 -Função PrimoInferior($num)
	Crie uma função que receba como parâmetro um número inteiro e retorne o maior número primo inferior ao número recebido como parâmetro.
	Se o argumento for negativo, a função deverá retornar o valor zero.
	*/
	
	function PrimoInferior($primo){
		$resp=false;
		for($x=$primo-1;$x>1;$x--){
			$resp=$x;
			for($num=$x-1;$num>1;$num--){
				if($x%$num==0){
					$resp=false;
					break;
				}
			}
			if($resp==$x){
				return $resp;			
			}
		}
	}

	echo "Número 8 = ".PrimoInferior(8)."</br>";
	echo "Número 10 = ".PrimoInferior(10)."</br>";
	echo "Número 30 = ".PrimoInferior(30)."</br>";
?>
</h1>
</body>
</html>