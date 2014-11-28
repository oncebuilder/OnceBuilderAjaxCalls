<?
ob_start("ob_gzhandler");
session_start();
$home=true;

# PAGE START -------------------
echo '
<!DOCTYPE html>
<html>
	<head>
		<!-- jquery -->
		<script type="text/javascript" src="js/jquery-2.1.1.js"></script>
		
		<!-- oncebuilder -->
		<script type="text/javascript" src="js/once.core.js"></script>
	</head>
	<body id="once">
		
	</body>
</html>';
ob_end_flush(); 
?>