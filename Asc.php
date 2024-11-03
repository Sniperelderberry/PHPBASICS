<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sort Array</title>
</head>
<body>

    <form method="post">
        <label for="numbers">Enter numbers separated by commas:</label><br>
        <input type="text" name="numbers" id="numbers" placeholder="e.g., 3,1,4,1,5,9" required>
        <br><br>
        <input type="submit" value="Sort Array">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $input = $_POST['numbers'];
        $numbersArray = explode(',', str_replace(' ', '', $input));
        $numbersArray = array_map('intval', $numbersArray);
        
        echo "Original array: " . implode(', ', $numbersArray) . "<br>";
        
        sort($numbersArray);
        echo "Sorted array in ascending order: " . implode(', ', $numbersArray);
    }
    ?>

</body>
</html>




