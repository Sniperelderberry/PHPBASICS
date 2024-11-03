<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matrix Addition</title>
</head>
<body>

    <form method="post">
        <label for="matrix1">Enter Matrix 1 (comma-separated rows, semicolon-separated elements):</label><br>
        <input type="text" name="matrix1" id="matrix1" placeholder="e.g., 1,2;3,4" required><br><br>

        <label for="matrix2">Enter Matrix 2 (comma-separated rows, semicolon-separated elements):</label><br>
        <input type="text" name="matrix2" id="matrix2" placeholder="e.g., 5,6;7,8" required><br><br>

        <input type="submit" value="Add Matrices">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $matrix1 = $_POST['matrix1'];
        $matrix2 = $_POST['matrix2'];

        $matrix1Array = array_map(function($row) {
            return explode(',', $row);
        }, explode(';', $matrix1));

        $matrix2Array = array_map(function($row) {
            return explode(',', $row);
        }, explode(';', $matrix2));

        $rows = count($matrix1Array);
        $cols = count($matrix1Array[0]);

        $sumMatrix = [];

        for ($i = 0; $i < $rows; $i++) {
            for ($j = 0; $j < $cols; $j++) {
                $sumMatrix[$i][$j] = $matrix1Array[$i][$j] + $matrix2Array[$i][$j];
            }
        }

        echo "Matrix 1:<br>";
        foreach ($matrix1Array as $row) {
            echo implode(' ', $row) . "<br>";
        }

        echo "<br>Matrix 2:<br>";
        foreach ($matrix2Array as $row) {
            echo implode(' ', $row) . "<br>";
        }

        echo "<br>Sum of matrices:<br>";
        foreach ($sumMatrix as $row) {
            echo implode(' ', $row) . "<br>";
        }
    }
    ?>

</body>
</html>

