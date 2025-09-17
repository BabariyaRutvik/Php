<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leap Year Checker</title>
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
        .result{
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
        <label for="year">Enter a year:</label>
        <input type="number" id="year" name="year" required>
        <input type="submit" value="Check">
    </form>
    <?php
      if($_SERVER["REQUEST_METHOD"]=="POST"){
        $year=$_POST['year'];
        if($year%400==0){
            echo "<div class='result'><p>$year is a leap year.</p></div>";
        } elseif($year%100==0){
            echo "<div class='result'><p>$year is not a leap year.</p></div>";
        } elseif($year%4==0){
            echo "<div class='result'><p>$year is a leap year.</p></div>";
        } else {
            echo "<div class='result'><p>$year is not a leap year.</p></div>";
        }
      }
    ?>
</body>
</html>