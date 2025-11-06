<?php
    function createCSV($file, $year, $award)
    {
        /*while (($record = fgetcsv($f))) {
            foreach($record as $field) {
                echo $field . " ";
            }
            echo "<br/>";
        }*/
    }
?>

<!DOCTYPE html>
<html>
    <head>
    </head>

    <body>
        <h2>Add an entry to the awards CSV</h2>

        <form method="POST">
            "Year, Award" format<br>
            <input type="number"/>
            <input type="text"/>
            <br>
            <input type="submit"/>
        </form>
    </body>
</html>