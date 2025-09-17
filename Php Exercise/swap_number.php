<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Swap Number</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        h5 {
            color: #333;
        }
        form {
            margin-bottom: 20px;
            padding: 20px;
        }
        label {
            margin-right: 10px;
        }
        input {
            margin-bottom: 10px;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button{
            padding: 5px 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
            font-weight: bold;
        }
        button:hover {
            background-color: #45a049;
        }
        .result {
            margin-top: 20px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            background-color: #f9f9f9;
        }   
        .highlight {
            font-weight: bold;
            color: #4CAF50;
        }
        
    </style>
</head>
<body>
    <h5>Swap Number</h5>
    <form method="post">
        <label for="a">First Number:</label>
        <input type="number" id="a" name="a" required>
        <br><br>
        <label for="b">Second Number:</label>
        <input type="number" id="b" name="b" required>
        <br><br>
        <button type="submit">Swap</button>
    </form>
    <?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $a=$_POST['a'];
        $b=$_POST['b'];

         echo "<div class='result'>";
        echo "Before Swapping:<br>";
        echo "A = <span class='highlight'>$a</span><br>";
        echo "B = <span class='highlight'>$b</span><br><br>";

        // Swap logic
        $temp=$a;
        $a=$b;
        $b=$temp;

        echo "After Swapping:<br>";
        echo "A = <span class='highlight'>$a</span><br>";   
        echo "B = <span class='highlight'>$b</span><br>";
        echo "</div>";

       
    }
    ?>
</body>
</html>