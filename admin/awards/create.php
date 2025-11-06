<?php
    function createCSV($file, $year, $award)
    {
        $f = fopen($file, "a");

        //Reaches end of CSV before writing to a new entry
        while (($record = fgetcsv($f)))
        {
            fgetcsv($f);
        }
        fputcsv($f,[$year, $award]);
        fclose($f);
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Create New Entry</title>
    </head>

    <body>
        <h2>Add an entry to the awards CSV</h2>

        <form method="POST">
            "Year, Award" format<br>
            <input type="number" name="year"/>
            <input type="text" name="award"/>
            <br>
            <input type="submit"/>

            <?php 
                if ($_POST['year'] != NULL && $_POST['award'] != NULL)
                createCSV("./awards.csv", $_POST['year'], $_POST['award']); 
            ?>
        </form>
    </body>
</html>