<html lang="en">
<head>
    <title>Leap Year Check</title>
</head>

<body>

    <form method="post">
        <label for="year">Enter a Year:</label>
        <input type="number" name="year" id="year" required><br><br>

        <input type="submit" value="Check Leap Year">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $year = $_POST['year'];

        // Leap year logic
        if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
            echo "$year is a leap year.";
        } else {
            echo "$year is not a leap year.";
        }
    }
    ?>

</body>
</html>






