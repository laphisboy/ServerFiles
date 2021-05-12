<?php

$command = escapeshellcmd('python/print.py');
$output = shell_exec($command);
echo $output;

?>
