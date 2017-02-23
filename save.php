<html>
<head>
<title>go back</title>
<body>
<?php
$file = fopen("sv.txt","a+");
$current=$_GET["c"]."\n\n";
fwrite($file,$current);
fclose($file);
?>
</body>
</html>
