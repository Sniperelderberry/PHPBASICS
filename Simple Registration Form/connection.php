<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body>
    <?php
   // connecting to database

      $servername= "localhost";
      $username="root";
      $password="";
      $database= "college";

      $conn= mysqli_connect($servername,$username,$password,$database);


      //echo($conn)?"connected":"not connected";
      if(!$conn){
        die("error: could not connect". mysqli_connect_error());
      }


      //taking inputs from user

      
      
      $name=$_REQUEST['name'];
      $gender=$_REQUEST['gender'];
      $address=$_REQUEST['address'];
      $emailid=$_REQUEST['email'];
      $class=$_REQUEST['class'];

      $sql= "INSERT INTO trip VALUES ('$name','$gender','$address','$emailid','$class')";

      if (mysqli_query($conn,$sql)){

        echo "You have successfully registered for trip with following details:<br>";
        echo $name." ".$address;
        
        
       
      }
       //close connection
       mysqli_close($conn);





?>
</body>
</html>