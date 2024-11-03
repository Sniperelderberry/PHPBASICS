<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Call by Value Example</title>
</head>
<body>

    <form method="post">
        <label for="number">Enter a number:</label><br>
        <input type="number" name="number" id="number" required><br><br>

        <input type="submit" value="Double the Number">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $number = $_POST['number'];

        function doubleValue($num) {
            $num *= 2; // Doubling the value
            return $num;
        }

        $result = doubleValue($number);
        echo "Original number: $number<br>";
        echo "Doubled value: $result";
    }
    ?>

</body>
</html>


