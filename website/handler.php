<?php

$fi = new FilesystemIterator(__DIR__, FilesystemIterator::SKIP_DOTS);
$s=iterator_count($fi);
$n=$s-8;
$myfile = fopen("$n.txt" , "w");
fwrite($myfile, $_POST["fname"]);
fwrite($myfile,"\n");
fwrite($myfile, $_POST["lname"]);
fwrite($myfile,"\n");
fwrite($myfile, $_POST["email"]);
fwrite($myfile,"\n");
fwrite($myfile, $_POST["texts"]);

fclose($myfile);
?>
<html>
    <head>
        <h1>Your response has been recieved!</h1>
</head>
</html>