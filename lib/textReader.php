<?php 

function readText($file) {

    $content = file_get_contents($file);

    return $content;
}

?>