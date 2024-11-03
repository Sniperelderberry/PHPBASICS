<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Manipulation</title>
</head>
<body>

    <form method="post">
        <label for="inputString">Enter a string:</label><br>
        <input type="text" name="inputString" id="inputString" required><br><br>

        <input type="submit" value="Manipulate String">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $inputString = $_POST['inputString'];

        echo "Original String: " . $inputString . "<br>";
        echo "Reversed String: " . strrev($inputString) . "<br>";
        echo "Uppercase String: " . strtoupper($inputString) . "<br>";
        echo "Lowercase String: " . strtolower($inputString) . "<br>";
        echo "String Length: " . strlen($inputString) . "<br>";
    }
    ?>

</body>
</html>

