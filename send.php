<?php
$filename = "posts.txt"
$textToSend = "$name: $text";
file_put_contents($filename, $textToSend);
?>