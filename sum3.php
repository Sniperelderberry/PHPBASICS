<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form method="post">
        <label for="">Enter Input</label>
        <input type="number" name="input" id="">
    </form>

    <?php
    if(isset($_POST['input'])){
        $input = $_POST['input'];
        
        function Series($num){
                $sum = 0;
                for($i = 1;$i <= $num ; $i++){
                        $sum += $i;
                        
                    }

                    return $sum;
                }
                $result = Series($input);
                echo "The sum upto ",$input , " is  ", $result;
       
    }

    ?>
</body>
</html>




