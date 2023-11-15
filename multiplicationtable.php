<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Table</title>
</head>
<body>

    <h2>Multiplication Table</h2>

    <table border="1">
        <thead>
            <tr>
                <th> </th>
                <?php
                for ($i = 1; $i <= 12; $i++) {
                    echo '<th>' . $i . '</th>';
                }
                ?>
            </tr>
        </thead>
        <tbody>
            <?php
            for ($i = 1; $i <= 12; $i++) {
                echo '<tr>';
                echo '<td>' . $i . '</td>';

                for ($j = 1; $j <= 12; $j++) {
                    echo '<td>' . ($i * $j) . '</td>';
                }

                echo '</tr>';
            }
            ?>
        </tbody>
    </table>

</body>
</html>
