<html>
<body>

	<?php
	const SITE_NAME ="https://www.tni.mil.id";
	echo "URL Situs : ". SITE_NAME;

	?>

	<br>

	<?php
//membuat konstanta dengan fungsi define()
	define('DB_SERVER','localhost');
	define('DB_USER','root');
	define('DB_PASS','rahasia');
	define('DB_NAME','belajar');

	echo DB_SERVER;
	echo "<br>";
	echo DB_USER;
	echo "<br>";
	echo DB_PASS;
	echo "<br>";
	echo DB_NAME;
	
//membuat konstanta dengan kata kunci const
	const API_KEY ="1234";
	?>
	<br>
	<?php // file:belajar-konstanta.php

	//membuat konstanta
	define('VERSION','1.0.0');

	const SITE_NAME1 = "Mabes TNI";
	const BASE_URL	= "https://www.tni.mil.id/";

	//cetak nilai konstanta
	echo "site name:" . SITE_NAME1 . "<br/>";
	echo "URL:" . BASE_URL . "<br/>";
	echo "Version:" . VERSION . "<br/>";
	?>
</body>

</html>


