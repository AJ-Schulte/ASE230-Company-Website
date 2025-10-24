<?php 
    function readCSV($file, $startRow)
    {
        $f = fopen($file, "r");
        $output = "";
        $indent = false;
        for ($j=0;$j<$startRow;$j++)
        {
            fgetcsv($f);
        }

        while (($record = fgetcsv($f))) {
            foreach($record as $field) {
                echo $field . "|";
            }
            echo "<br/>";
        }
        fclose($f);
    }
?>