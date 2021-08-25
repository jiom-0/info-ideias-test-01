<html>
<body>
<h1>
<?php
	/*
		3 - Escreva um programa
		Escreva um programa que preencha um array com 20 números inteiros sorteados entre 1 e 10.
		Depois informe qual número mais se repetiu e quantas vezes ele se repetiu.
		
		Exemplo

		Array sorteado = [2,5,8,2,8,5,3,9,6,3,4,6,3,1,2,1,2,3,7,1]
		O número que mais se repete é o 2. 
		Ele se repete 4 vezes
	*/
	function ArrayRandomCount($arr){
		asort($arr);
		$num=0;
		$a=0;
		$atual=0;
		$b=0;
		foreach($arr as $x){
			if($x==$atual){
				$b++;
				if($b>$a){
					$a=$b;
					$num=array($x);				
				}elseif($b==$a){
					array_push($num,$x);
				}			
			}else{
				$b=1;
				$atual=$x;			
			}
		}
		return array($num,$a);
	}
		
	$arr=array();		
		for($x=0;$x<20;$x++){
			array_push($arr,rand(1,10));
		}
	$resul=ArrayRandomCount($arr);
	echo "Array sorteado = [";
	for($x=0;$x<19;$x++){echo $arr[$x].", ";};
	echo $arr[19]."]</br>";
	if(count($resul[0])==1){
		echo "O número que mais se repete é o ".$resul[0][0].".</br>";
		echo "Ele se repete ".$resul[1]." vezes.";
	}else{
		echo "Os número que mais se repetem são ";
		for($x=count($resul[0])-1;$x>0;$x--){
			echo $resul[0][$x].", ";
		}
		echo $resul[0][0]."</br>";

		echo "Eles se repetem ".$resul[1]." vezes.";
	}
?></h1>
</body>
<html>