<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 50px;
        }
        form {
            margin-bottom: 20px;
        }
        input[type="number"] {
            padding: 5px;
            margin-right: 10px;
        }
        input[type="submit"] {
            padding: 5px 10px;
        }
        p {
            font-size: 1.2em;
            color: #333;
        }
        .result {
            margin-top: 20px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            background-color: #f9f9f9;
        }
        .result p {
            margin: 0;
            font-weight: bold;
            color: #4CAF50;
        }
    </style>
</head>
<body>
    <form method="post">
        <label for="number">Enter a number:</label>
        <input type="number" id="number" name="number" required>
        <input type="submit" value="Calculate">
    </form>
    <?php
       if($_SERVER["REQUEST_METHOD"]=="POST"){
            $number=$_POST['number'];
            $factorial=1;
            for($i=1;$i<=$number;$i++){
                $factorial*=$i;
            }
            echo "<div class='result'><p>The factorial of $number is $factorial.</p></div>";
       }
    ?>
</body>
</html>