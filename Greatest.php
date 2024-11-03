<!DOCTYPE html>
<html lang="en">
<head>
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
        $input = floatval($input);

// A function break a number into array
        function single($number, $divisor = 10){
            $digits = [];
            while($number > 0){
                $digits[] = $number % $divisor;
                $number = floor($number / $divisor); 
            }
            return $digits;
        }
        
        //calling number-> array function
         $output = single($input);

         
         //great number finder function
         function GreatNumber($output){
             
            $greatest = $output[0];

             foreach($output as $num){

                if($num > $greatest){

                    $greatest = $num;
                }
             }
             return $greatest;
         }
        

         echo "The Greatest Number from ",$input ," is : ", GreatNumber($output);
}
?>
</body>
</html>








