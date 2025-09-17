<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Max Number</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 30px;
            background-color: #f2f2f2;
        }
        form {
            margin-bottom: 20px;
        }
        label {
            font-weight: bold;
        }
        input[type="number"] {
            padding: 8px;
            margin-left: 10px;
            margin-bottom: 15px;
        }
        button {
            padding: 8px 15px;
            background-color: #28a745;
            color: white;
            border: none;
            cursor: pointer;
            font-weight: bold;
            border-radius: 4px;
        }
        button:hover {
            background-color: #218838;
        }
        .result {
            margin-top: 20px;
            background: #fff;
            border-radius: 6px;
            padding: 15px;
            box-shadow: 0px 0px 5px #ccc;
            width: fit-content;
            font-size: 18px;
            color: #333;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h3>Find the Largest of Three Numbers</h3>
    <form method="post">
        <label for="num1">Enter 1st Number: </label>
        <input type="number" id="num1" name="num1" required><br><br>

        <label for="num2">Enter 2nd Number: </label>
        <input type="number" id="num2" name="num2" required><br><br>

        <label for="num3">Enter 3rd Number: </label>
        <input type="number" id="num3" name="num3" required><br><br>

        <button type="submit">Find Max</button>
    </form>

    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $num3 = $_POST['num3'];

        // Nested if-else to find largest number
        if($num1 >= $num2){
            if($num1 >= $num3){
                echo "<div class='result'>The Largest Number is: $num1</div>";
            } else {
                echo "<div class='result'>The Largest Number is: $num3</div>";
            }
        } else {
            if($num2 >= $num3){
                echo "<div class='result'>The Largest Number is: $num2</div>";
            } else {
                echo "<div class='result'>The Largest Number is: $num3</div>";
            }
        }
    }
    ?>
</body>
</html>
