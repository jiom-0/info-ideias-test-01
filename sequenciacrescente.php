<html>
</body>
<?php
	/*4 - Função SequenciaCrescente($array)
	Receba como parametro um array de números inteiros e responda TRUE or FALSE.
	Se é possível obter uma sequencia crescente removendo apenas um elemento do array.
	Obs.:-  É Importante  realizar todos os testes abaixo para garantir o funcionamento correto.
         -  Sequencias com apenas um elemento são consideradas como TRUE

		[1, 3, 2, 1]  false
		[1, 3, 2]  true
		[1, 2, 1, 2]  false
		[3, 6, 5, 8, 10, 20, 15] false
		[1, 1, 2, 3, 4, 4] false
		[1, 4, 10, 4, 2] false
		[10, 1, 2, 3, 4, 5] true
		[1, 1, 1, 2, 3] false
		[0, -2, 5, 6] true
		[1, 2, 3, 4, 5, 3, 5, 6] false
		[40, 50, 60, 10, 20, 30] false
		[1, 1] true
		[1, 2, 5, 3, 5] true
		[1, 2, 5, 5, 5] false
		[10, 1, 2, 3, 4, 5, 6, 1] false
		[1, 2, 3, 4, 3, 6] true
		[1, 2, 3, 4, 99, 5, 6] true
		[123, -17, -5, 1, 2, 3, 12, 43, 45] true
		[3, 5, 67, 98, 3] true
				
	*/

	function SequenciaCrescente($array){
		$flag=False;
		$n=count($array);
		$copy=null;
		for($x=0;$x<$n;$x++){
			$flag=True;
			$copy=array();
			for($j=0;$j<$n;$j++){
				if($x!==$j){
					array_push($copy,$array[$j]);
				}	
			}
			for($k=0;$k<count($copy)-1;$k++){	
				if($copy[$k]<$copy[$k+1]){
					continue;
				}else{$flag=False;break;}
			}
			if($flag==True){
				return True;
			}
		}
		return False;
	}
	
	// !!!!! A função retorna apenas valores booleanos True/False, para mostrar os exemplos na tela
	// sem adaptar a função foi preciso repetir o processo varias vezes, pode parecer meio confuso
	// mas a função em si se resume ao código acima, o código abaixo resume os exemplos.




	$array=array(1,3,2,1);
	echo "[";
	for($x=0;$x<count($array)-1;$x++){
		echo $array[$x].", ";	
	}
	echo $array[count($array)-1]."] ";
	if(SequenciaCrescente($array)==True){
		echo " true"."</br>";		
	}else{ echo " false"."</br>";}

	$array=array(1,2,3);
	echo "[";
	for($x=0;$x<count($array)-1;$x++){
		echo $array[$x].", ";	
	}
	echo $array[count($array)-1]."] ";
	if(SequenciaCrescente($array)==True){
		echo " true"."</br>";		
	}else{ echo " false"."</br>";}

	$array=array(1,2,1,2);
	echo "[";
	for($x=0;$x<count($array)-1;$x++){
		echo $array[$x].", ";	
	}
	echo $array[count($array)-1]."] ";
	if(SequenciaCrescente($array)==True){
		echo " true"."</br>";		
	}else{ echo " false"."</br>";}

	$array=array(3,6,5,8,10,20,15);
	echo "[";
	for($x=0;$x<count($array)-1;$x++){
		echo $array[$x].", ";	
	}
	echo $array[count($array)-1]."] ";
	if(SequenciaCrescente($array)==True){
		echo " true"."</br>";		
	}else{ echo " false"."</br>";}

	$array=array(1,1,2,3,4,4);
	echo "[";
	for($x=0;$x<count($array)-1;$x++){
		echo $array[$x].", ";	
	}
	echo $array[count($array)-1]."] ";
	if(SequenciaCrescente($array)==True){
		echo " true"."</br>";		
	}else{ echo " false"."</br>";}

	$array=array(1,4,10,4,2);
	echo "[";
	for($x=0;$x<count($array)-1;$x++){
		echo $array[$x].", ";	
	}
	echo $array[count($array)-1]."] ";
	if(SequenciaCrescente($array)==True){
		echo " true"."</br>";		
	}else{ echo " false"."</br>";}

	$array=array(10,1,2,3,4,5);
	echo "[";
	for($x=0;$x<count($array)-1;$x++){
		echo $array[$x].", ";	
	}
	echo $array[count($array)-1]."] ";
	if(SequenciaCrescente($array)==True){
		echo " true"."</br>";		
	}else{ echo " false"."</br>";}

	$array=array(1,1,1,2,3);
	echo "[";
	for($x=0;$x<count($array)-1;$x++){
		echo $array[$x].", ";	
	}
	echo $array[count($array)-1]."] ";
	if(SequenciaCrescente($array)==True){
		echo " true"."</br>";		
	}else{ echo " false"."</br>";}

	$array=array(0,-2,5,6);
	echo "[";
	for($x=0;$x<count($array)-1;$x++){
		echo $array[$x].", ";	
	}
	echo $array[count($array)-1]."] ";
	if(SequenciaCrescente($array)==True){
		echo " true"."</br>";		
	}else{ echo " false"."</br>";}

	$array=array(1,2,3,4,5,3,5,6);
	echo "[";
	for($x=0;$x<count($array)-1;$x++){
		echo $array[$x].", ";	
	}
	echo $array[count($array)-1]."] ";
	if(SequenciaCrescente($array)==True){
		echo " true"."</br>";		
	}else{ echo " false"."</br>";}

	$array=array(40,50,60,10,20,30);
	echo "[";
	for($x=0;$x<count($array)-1;$x++){
		echo $array[$x].", ";	
	}
	echo $array[count($array)-1]."] ";
	if(SequenciaCrescente($array)==True){
		echo " true"."</br>";		
	}else{ echo " false"."</br>";}

	$array=array(1,1);
	echo "[";
	for($x=0;$x<count($array)-1;$x++){
		echo $array[$x].", ";	
	}
	echo $array[count($array)-1]."] ";
	if(SequenciaCrescente($array)==True){
		echo " true"."</br>";		
	}else{ echo " false"."</br>";}

	$array=array(1,2,5,5,5);
	echo "[";
	for($x=0;$x<count($array)-1;$x++){
		echo $array[$x].", ";	
	}
	echo $array[count($array)-1]."] ";
	if(SequenciaCrescente($array)==True){
		echo " true"."</br>";		
	}else{ echo " false"."</br>";}

	$array=array(10,1,2,3,4,5,6,1);
	echo "[";
	for($x=0;$x<count($array)-1;$x++){
		echo $array[$x].", ";	
	}
	echo $array[count($array)-1]."] ";
	if(SequenciaCrescente($array)==True){
		echo " true"."</br>";		
	}else{ echo " false"."</br>";}

	$array=array(1,2,3,4,99,5,6);
	echo "[";
	for($x=0;$x<count($array)-1;$x++){
		echo $array[$x].", ";	
	}
	echo $array[count($array)-1]."] ";
	if(SequenciaCrescente($array)==True){
		echo " true"."</br>";		
	}else{ echo " false"."</br>";}

	$array=array(123,-17,-5,1,2,3,12,43,45);
	echo "[";
	for($x=0;$x<count($array)-1;$x++){
		echo $array[$x].", ";	
	}
	echo $array[count($array)-1]."] ";
	if(SequenciaCrescente($array)==True){
		echo " true"."</br>";		
	}else{ echo " false"."</br>";}

	$array=array(3,5,67,98,3);
		echo "[";
	for($x=0;$x<count($array)-1;$x++){
		echo $array[$x].", ";	
	}
	echo $array[count($array)-1]."] ";
	if(SequenciaCrescente($array)==True){
		echo " true"."</br>";		
	}else{ echo " false"."</br>";}

?>
</body>
</html>