<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative Array</title>
</head>
<body>

    <form method="post">
        <label for="array">Enter key-value pairs (e.g., name:John, age:25):</label><br>
        <input type="text" name="array" id="array" placeholder="e.g., name:John, age:25" required>
        <br><br>
        <input type="submit" value="Create Associative Array">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $input = $_POST['array'];
        $pairs = explode(',', str_replace(' ', '', $input));
        $associativeArray = [];

        foreach ($pairs as $pair) {
            list($key, $value) = explode(':', $pair);
            $associativeArray[$key] = $value;
        }

        echo "Associative array:<br>";
        foreach ($associativeArray as $key => $value) {
            echo "$key => $value<br>";
        }
    }
    ?>

</body>
</html>






