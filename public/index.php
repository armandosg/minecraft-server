<html>
<head>
	<title>Minecraft Server</title>
	<link rel="stylesheet" type="text/css"href="index.css">
</head>
<body>
	<?php
        $path = "/srv/app/storage/status.log";
        $file = fopen($path, "r") or die("Unable to open file!");
        $status = trim(fread($file, filesize($path)));
        fclose($file);
		if ($status == "exited") {
			echo '<a href="powerup.php">Encender</a>';
		} else {
            echo '<a href="poweroff.php">Apagar</a>';
        }
	?>
</body>
</html>
