<?php
    function editCSV($file, $row, $input)
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
                $field = $input;
                echo $field . "|";
            }
            echo "<br/>";
        }
        fclose($f);
    }
?>

<!DOCTYPE html>
<html>
    <head>
    </head>

    <body>
    </body>
</html>