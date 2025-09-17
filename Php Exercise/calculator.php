<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>

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
        input, select {
            margin-bottom: 10px;
        }
        button{
            padding: 5px 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
            font-weight: bold;
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

      <h5>Simple calculator</h5>

      <form method="post">
        <label for="num1">First Number:</label>
        <input type="number" id="num1" name="num1" required>
        <br><br>
        <select name="operator" id="operator">
            <option value="add">+</option>
            <option value="subtract">-</option>
            <option value="multiply">*</option>
            <option value="divide">/</option>

        </select>
        <br><br>
        <label for="num2">Second Number:</label>
        <input type="number" id="num2" name="num2" required>

        <br><br>
        <button type="submit">Calculate</button>

      </form>

      <?php
         if($_SERVER["REQUEST_METHOD"] == "POST") {
              $a=$_POST['num1'];
              $b=$_POST['num2'];
              $operator=$_POST['operator'];
              switch($operator) { 
                case"add": 
                    echo "<div class='result'>Addition: ".($a+$b)."</div>";
                    break;
                case"subtract":
                    echo "<div class='result'>Subtraction: ".($a-$b)."</div>";
                    break;
                case"multiply":
                    echo "<div class='result'>Multiplication: ".($a*$b)."</div>";
                    break;
                case"divide":
                    if($b != 0) {
                        echo "<div class='result'>Division: ".($a/$b)."</div>";
                    } else {
                        echo "<div class='result'>Division by zero error.</div>";
                    }
                    break;
                default:
                    echo "<div class='result'>Invalid operator.</div>";
                  }
                }
      ?>
</body>
</html>