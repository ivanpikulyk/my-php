<html>
<body>
	<?php
		//echo $_GET["user-input"];
		$domain = $_GET["domain"];
		$output = shell_exec("whois ".$domain);
		echo "<pre>". $output . "</pre>";
	?>

</body>
</html>
