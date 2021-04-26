<?php
require_once "simple_html_dom.php";
	$html = file_get_html("https://www.ballzaa.com/linkdooball.php");
	$table = $html->find(".linkball",-1)->outertext; 
	$table = str_replace('https://www.ballzaa.com/linkdooball.php', '', $table);    
	
?>
<link href="style.css" rel="stylesheet">

<script type="text/javascript" src="jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="custom.js"></script>
<?php echo $table; ?>