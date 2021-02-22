<!DOCTYPE HTML>
<html>
	<?php
		include '/srv/http/struc/head.html';
	?>
	<body>
		<?php	
			try{
				include('/srv/http/struc/connect.php');
				$ids=array(0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17);			
				$inQuery = implode(',', array_fill(0, count($ids), '?'));
				$stmt=$pdo->prepare('SELECT id,nome,preco,dorm,vaga,regiao,size FROM IMOVEL WHERE id IN('.$inQuery.')');
				foreach ($ids as $k => $id)$stmt->bindValue(($k+1), $id);
				$stmt->execute();
				$grid=$stmt->fetchAll();
			}catch(Exception $e){
				http_response_code(500);
				include '/srv/http/struc/500.php';
				die();
			}
			include '/srv/http/struc/header.html';
			include '/srv/http/struc/card.php';
			include '/srv/http/struc/main.html';
				
			echo '<section class="grid-cards cards2">';
			echo_card();
			echo_card();
			echo_card();
			echo_card();
			echo_card();
			echo_card();
			echo '</section>';
			echo '<section class="grid-cards cards1">';
			echo_card();
			echo_card();
			echo_card();
			echo_card();
			echo_card();
			echo_card();
			echo '</section>';
			echo '<section class="grid-cards cards2">';
			echo_card();
			echo_card();
			echo_card();
			echo_card();
			echo_card();
			echo_card();
			echo '</section>';
			include '/srv/http/struc/footer.html';
			include '/srv/http/struc/scripts.php';
			echo_scripts($_GET['imovel']);
		?>		
	</body>
</html>
