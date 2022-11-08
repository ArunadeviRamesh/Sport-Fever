<?php
$to = "arunadevi@student.tce.edu";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: arunadeviramesh1011@gmail.com" . "\r\n" .
"CC: somebodyelse@example.com";
mail($to,$subject,$txt,$headers);
echo "sucess"
?>