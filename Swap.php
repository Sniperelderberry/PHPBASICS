<html lang="en">
<head>
    <title>Swap Numbers</title>
</head>
<body>
  <form method="post">
        <label for="input1">Enter Value in a:</label>
        <input type="number" name="input1" id="input1" required><br><br>

        <label for="input2">Enter Value in b:</label>
        <input type="number" name="input2" id="input2" required><br><br>

        <input type="submit" value="Swap Numbers">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $a = $_POST['input1'];
        $b = $_POST['input2'];

        echo "Before swapping: a = $a, b = $b<br>";

        // Swapping logic
        $a = $a + $b; 
        $b = $a - $b; 
        $a = $a - $b; 

        echo "After swapping: a = $a, b = $b<br>";
    }
    ?>

</body>
</html>




