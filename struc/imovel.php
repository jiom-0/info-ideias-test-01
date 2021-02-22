<?php
	$num_imagens=array_reverse(scandir("/srv/http/imoveis/".$_GET['imovel']));
	array_pop($num_imagens);
	array_pop($num_imagens);
	$n=count($num_imagens);
	$data_slide="";
	for($i=1; $i <= $n-1; $i++){
		 $data_slide.="<li data-target=\"".$_GET['imovel']."\" data-slide-to=\"".$i."\" class=\"active\"></li>";
	}
	$img_slide="";
	for($i=1; $i <= $n-1; $i++){
		$img_slide.="<div class=\"carousel-item item-imovel-carousel\"><img class=\"d-block image-imovel-carousel\" src=\"imoveis/".$_GET['imovel']."/".$i.".jpg\" alt=\"First slide\"></div>";	
	}
	echo "<div id=\"".$_GET['imovel']."\" class=\"carousel slide \" data-ride=\"carousel\">
		  <ol class=\"carousel-indicators\">
			<li data-target=\"".$_GET['imovel']."0.jpg\" data-slide-to=\"0\" class=\"active\"></li>".$data_slide."
			</ol>
		  <div class=\"carousel-inner\">
		    <div class=\"carousel-item item-imovel-carousel active\">
		      <img class=\"d-block image-imovel-carousel \" src=\"imoveis/".$_GET['imovel']."/0.jpg\" alt=\"First slide\">
		    </div>".$img_slide."</div>
		  <a class=\"carousel-control-prev\" role=\"button\" data-slide=\"prev\">
		    <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
		    <span class=\"sr-only\"></span>
		  </a>
		  <a class=\"carousel-control-next\" role=\"button\" data-slide=\"next\">
		    <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
		    <span class=\"sr-only\"></span>
		  </a>
		</div>";

	echo "<section id=\"info\">
		<article id=\"more\">".$grid[''].
			
		"</article>
		<article id=\"sobre\">
			
		</article id=\"\">
		<article>
			
		</article>
	     </section>";	
?>
