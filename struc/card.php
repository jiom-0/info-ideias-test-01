<?php
function echo_card(){
global $grid;
$imovel=array_pop($grid);
$c="<div class=\"my-card\">
                <div class=\"card-left\">
                    <div id=\"".$imovel[id]."\" class=\"card-carousel carousel slide carousel-card card-slide\" data-ride=\"carousel\">
                        <div class=\"cardd carousel-inner\">
                          <div class=\"carousel-item active\">
                            <img class=\"card-slide-img d-block\" src=\"imoveis/".$imovel[id]."/00.jpg\" alt=\"Third slide\">
                          </div>
                          <div class=\"carousel-item\">
                            <img class=\"card-slide-img d-block\" src=\"imoveis/".$imovel[id]."/01.jpg\" alt=\"Third slide\">
                          </div>
                          <div class=\"carousel-item\">
                            <img class=\"card-slide-img d-block\" src=\"imoveis/".$imovel[id]."/03.jpg\" alt=\"Third slide\">
                          </div>
                        </div>
                        <a id=\"".$imovel[id]."-prev\" class=\"carousel-control-prev\" role=\"button\" data-slide=\"prev\">
                          <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                          <span class=\"sr-only\"></span>
                        </a>
                        <a id=\"".$imovel[id]."-next\" class=\"carousel-control-next\" role=\"button\" data-slide=\"next\">
                          <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                          <span class=\"sr-only\"></span>
                        </a>
                      </div>
                </div>
                <div class=\"card-right\">
                    <div class=\"card-info\">
                        <a href=\"imoveis.php?imovel=".$imovel[id]."\">
                            	Esquina do teste a 400m do teste
                        </a>
                    </div>
                    <div class=\"card-more\">
                        <div class=\"card-variable size\">
				<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" fill=\"currentColor\" class=\"bi bi-aspect-ratio-fill\" viewBox=\"0 0 16 16\">
  				<path d=\"M0 12.5v-9A1.5 1.5 0 0 1 1.5 2h13A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5zM2.5 4a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 1 0V5h2.5a.5.5 0 0 0 0-1h-3zm11 8a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-1 0V11h-2.5a.5.5 0 0 0 0 1h3z\"/>
				</svg>
                            <p>".$imovel[size]."</p>
                        </div>
                        <div class=\"card-variable price\">
				<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" fill=\"currentColor\" class=\"bi bi-cash-stack\" viewBox=\"0 0 16 16\">
  				<path d=\"M1 3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1H1zm7 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4z\"/>
 	 			<path d=\"M0 5a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V5zm3 0a2 2 0 0 1-2 2v4a2 2 0 0 1 2 2h10a2 2 0 0 1 2-2V7a2 2 0 0 1-2-2H3z\"/>
				</svg>
                            <p>R$".$imovel[preco]."</p>
                        </div>
                        <div class=\"card-variable garage\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" fill=\"currentColor\" class=\"bi bi-distribute-horizontal\" viewBox=\"0 0 16 16\">
 				 <path fill-rule=\"evenodd\" d=\"M14.5 1a.5.5 0 0 0-.5.5v13a.5.5 0 0 0 1 0v-13a.5.5 0 0 0-.5-.5zm-13 0a.5.5 0 0 0-.5.5v13a.5.5 0 0 0 1 0v-13a.5.5 0 0 0-.5-.5z\"/>
  				 <path d=\"M6 13a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1v10z\"/>
			    </svg>
                            <p>".$imovel[vaga]."</p>
                        </div>
			<div class=\"card-variable quartos\">
                            	<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" fill=\"currentColor\" class=\"bi bi-door-open-fill\" viewBox=\"0 0 16 16\">
  					<path d=\"M1.5 15a.5.5 0 0 0 0 1h13a.5.5 0 0 0 0-1H13V2.5A1.5 1.5 0 0 0 11.5 1H11V.5a.5.5 0 0 0-.57-.495l-7 1A.5.5 0 0 0 3 1.5V15H1.5zM11 2h.5a.5.5 0 0 1 .5.5V15h-1V2zm-2.5 8c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1z\"/>
			   	</svg>
                            <p>".$imovel[dorm]."</p>
                        </div>
			<div class=\"card-variable regiao\">
				<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" fill=\"currentColor\" class=\"bi bi-building\" viewBox=\"0 0 16 16\">
  					<path fill-rule=\"evenodd\" d=\"M14.763.075A.5.5 0 0 1 15 .5v15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V14h-1v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V10a.5.5 0 0 1 .342-.474L6 7.64V4.5a.5.5 0 0 1 .276-.447l8-4a.5.5 0 0 1 .487.022zM6 8.694L1 10.36V15h5V8.694zM7 15h2v-1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V15h2V1.309l-7 3.5V15z\"/>
  					<path d=\"M2 11h1v1H2v-1zm2 0h1v1H4v-1zm-2 2h1v1H2v-1zm2 0h1v1H4v-1zm4-4h1v1H8V9zm2 0h1v1h-1V9zm-2 2h1v1H8v-1zm2 0h1v1h-1v-1zm2-2h1v1h-1V9zm0 2h1v1h-1v-1zM8 7h1v1H8V7zm2 0h1v1h-1V7zm2 0h1v1h-1V7zM8 5h1v1H8V5zm2 0h1v1h-1V5zm2 0h1v1h-1V5zm0-2h1v1h-1V3z\"/>
				</svg>
				<p>São Paulo,SP</p>
			</div>
                    </div>
                </div>
            </div>
";
echo $c;
}
?>
