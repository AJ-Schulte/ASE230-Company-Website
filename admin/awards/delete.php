<?php
    function deleteCSV($file)
    {
        if (file_exists($file))
        {
            unlink($file);
            echo "File deleted";
        }
    }
?>


<!DOCTYPE html>

<html>
    <head>
    </head>

    <body>
        <h2>Enter the name of the file you want to delete:</h2>
        <form method="POST">
            <input type="file"/><br>
            <input type="submit" value="Delete file">
        </form>
    </body>
</html>