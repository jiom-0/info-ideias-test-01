<!DOCTYPE HTML>
<html>
	<?php
		include '/srv/http/struc/head.html';
	?>
	<body>
		<?php	
			include '/srv/http/struc/header.html';
			if($_GET['imovel']!=null){
				if(!ctype_digit($_GET['imovel'])){
					http_response_code(404);
					include '/srv/http/struc/404.php';
					die();
				}
				else{
					try{
						include('/srv/http/struc/connect.php');
						$stmt=$pdo->prepare('SELECT id,nome,preco,dorm,vaga,regiao,size FROM IMOVEL WHERE id=:id');
						$stmt->bindParam(':id',$_GET['imovel'],PDO::PARAM_INT);
						$stmt->execute();
						$grid=$stmt->fetch();
						include '/srv/http/struc/imovel.php';
						include '/srv/http/struc/footer.html';
						die();
					}catch(Exception $e){
						http_response_code(500);
						include '/srv/http/struc/500.php';
						die();
					}
				}
			}else{
				include '/srv/http/struc/card.php';
			}		
			include '/srv/http/struc/footer.html';
			include '/srv/htpp/struc/scripts.php';	
		?>
	</body>
</html>
