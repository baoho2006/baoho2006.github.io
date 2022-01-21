<?php
if($_GET['id'])
{
$id = $_GET['id'];
echo $id;
///code	
$handle = fopen("data.txt", "a");
fwrite($handle, $id);
fwrite($handle, "\r\n");
fwrite($handle, "\r\n");
fclose($handle);
}
?>