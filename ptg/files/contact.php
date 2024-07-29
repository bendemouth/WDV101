<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Ben DeMouth">
    <title>Contact Verification</title>

    <style type="text/css">

        h1, h5 {
            font-family: Arial, Helvetica, sans-serif;
        }

        p {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 16px;
            font-weight: bold;
        }

        table {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 5px;
        }

        th, td, tr {
            font-family: Arial, Helvetica, sans-serif;
        }

        body{
            background-color: #7c99b4;
        }

    </style>


</head>
<body>
    <h1>Thank you for contacting us!</h1>
    <h5>Your response has been submitted</h5>

    <p>Somebody from Pets to Go will be in contact with you soon</p>

    <?php

    echo "<p>Please verify that your contact information is correct</p>";

    echo "<table border='1'>";

    echo "<tr><th>Field</th><th>Value</th></tr>";

    foreach($_POST as $key => $value)
    {
        echo '<tr>';
        echo '<td>',$key,'</td>';
        echo '<td>',$value,'</td>';
        echo "</tr>";
    }

    echo"</table>";

    ?>



    
</body>
</html>