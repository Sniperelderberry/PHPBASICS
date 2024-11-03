<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Defined Function</title>
</head>
<body>

    <form method="post">
        <label for="number">Enter a number:</label><br>
        <input type="number" name="number" id="number" required><br><br>

        <input type="submit" value="Calculate Square">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $number = $_POST['number'];

        function calculateSquare($num) {
            return $num * $num;
        }

        $result = calculateSquare($number);
        echo "The square of $number is: " . $result;
    }
    ?>

</body>
</html>


