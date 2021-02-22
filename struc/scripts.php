<?php 
function echo_script($ids){
echo "  <script type=\"text/javascript\" src=\"scripts/jquery-3.5.1.min.js\"></script>
	<script type=\"text/javascript\" src=\"bootstrap-5.0.0-beta1-dist\js\bootstrap.bundle.js\"></script>
	<script type=\"text/javascript\" src=\"bootstrap-5.0.0-beta1-dist\js\bootstrap.min.js\"></script>
	<script type=\"text/javascript\" src=\"scripts/js.js\"></script>
	<script type=\"text/javascript\">";
	foreach ($ids as $x){
		echo "\$('#".$x."-next').click(function(){\$('#".$x."').carousel('next')});";
		echo "\$('#".$x."-prev').click(function(){\$('#".$x."').carousel('prev')});";
	}
echo "</script>";}
?>
