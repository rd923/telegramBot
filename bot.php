<?php 

$update = file_get_contents('php://input');

$file = fopen('telegram.json', 'w');
fwrite($file, $update);
fclose($file);
