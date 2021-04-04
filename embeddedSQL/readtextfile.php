<?php

$file = "./sql.txt";

$document = file_get_contents ($file);

echo $document;

$lines = explode("\n",$document);

foreach($lines as $newline)
{
    echo $newline . '<br>';
}

?>

