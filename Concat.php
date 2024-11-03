<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Concatenation</title>
</head>
<body>

    <form method="post">
        <label for="string1">Enter String 1:</label><br>
        <input type="text" name="string1" id="string1" required><br><br>

        <label for="string2">Enter String 2:</label><br>
        <input type="text" name="string2" id="string2" required><br><br>

        <input type="submit" value="Concatenate Strings">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $string1 = $_POST['string1'];
        $string2 = $_POST['string2'];

        function concatenateStrings($str1, $str2) {
            return $str1 . ' ' . $str2;
        }

        $result = concatenateStrings($string1, $string2);
        echo "Concatenated String: " . $result;
    }
    ?>

</body>
</html>





