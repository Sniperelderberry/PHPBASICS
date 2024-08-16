
<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Registration</title>
      <style>
         body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #71b7e6, #9b59b6);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
         }
         h1 {
            text-align: center;
            color: #fff;
            margin-bottom: 20px;
            font-size: 28px;
            font-weight: bold;
         }
         form {
            background-color: #fff;
            padding: 25px;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
         }
         p {
            margin-bottom: 20px;
         }
         label {
            font-weight: bold;
            display: block;
            margin-bottom: 8px;
            color: #333;
            font-size: 14px;
         }
         input[type="text"] {
            width: calc(100% - 20px);
            padding: 12px 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 8px;
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
         }
         input[type="text"]:focus {
            border-color: #9b59b6;
            box-shadow: 0 0 5px rgba(155, 89, 182, 0.5);
            outline: none;
         }
         input[type="submit"] {
            width: 100%;
            padding: 12px;
            background: linear-gradient(135deg, #9b59b6, #71b7e6);
            color: #fff;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
            transition: background 0.3s ease, transform 0.2s ease;
         }
         input[type="submit"]:hover {
            background: linear-gradient(135deg, #71b7e6, #9b59b6);
            transform: translateY(-2px);
         }
      </style>
   </head>
   <body>
      <h1>Register for Trip</h1>
      <form action="connection.php" method="post">
         <p>
            <label for="name">Enter your Name:</label>
            <input type="text" name="name" id="name" required>
         </p>
         <p>
            <label for="Gender">Gender:</label>
            <input type="text" name="gender" id="Gender">
         </p>
         <p>
            <label for="Address">Address:</label>
            <input type="text" name="address" id="Address">
         </p>
         <p>
            <label for="emailAddress">Email Address:</label>
            <input type="text" name="email" id="emailAddress">
         </p>
         <p>
            <label for="class">Enter your class:</label>
            <input type="text" name="class" id="class">
         </p>
         <input type="submit" value="Register">
      </form>
   </body>
</html>
