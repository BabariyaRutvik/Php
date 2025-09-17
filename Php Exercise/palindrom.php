<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palindrome Checker</title>
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
        }
        label {
            margin-right: 10px;
        }
        input {
            margin-bottom: 10px;
            padding: 5px;
        }
        button {
            padding: 5px 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
            font-weight: bold;
        }
        .result {
            margin-top: 20px;
            padding: 12px;
            border-radius: 6px;
            font-weight: bold;
            width: fit-content;
        }
        .palindrome {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }
        .not-palindrome {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }
    </style>
</head>
<body>
    <h5>Palindrome Number Checker</h5>
    <form method="post">
        <label for="number">Enter Any Number:</label>
        <input type="number" id="number" name="number" required>
        <br><br>
        <button type="submit">Check</button>
    </form>
    <?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $number = $_POST['number'];
        $reverse = 0;
        $temp = $number;

        // Reverse logic
        while($temp > 0){
            $digit = $temp % 10;
            $reverse = $reverse * 10 + $digit;
            $temp = (int)($temp / 10);
        }

        // check palindrome
        if($number == $reverse){
            echo "<div class='result palindrome'>$number is a Palindrome </div>";
        } else {
            echo "<div class='result not-palindrome'>$number is NOT a Palindrome </div>";
        }
    }
    ?>
</body>
</html>
