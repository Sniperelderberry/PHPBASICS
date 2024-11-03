<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Call by Reference Example</title>
</head>
<body>

    <form method="post">
        <label for="number">Enter a number:</label><br>
        <input type="number" name="number" id="number" required><br><br>

        <input type="submit" value="Triple the Number">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $number = $_POST['number'];

        function tripleValue(&$num) {
            $num *= 3; // Tripling the value
        }

        tripleValue($number);
        echo "Updated number: $number"; 
    }
    ?>

</body>
</html>



