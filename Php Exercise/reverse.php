<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reverse Number</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
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
        button{
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
            background-color: #d4edda; /* light green */
            color: #155724; /* dark green text */
            border: 1px solid #c3e6cb;
        }
    </style>
</head>
<body>
    <form method="post">
        <label for="number">Enter a number to reverse:</label>
        <input type="number" id="number" name="number" required>
        <button type="submit">Reverse</button>
    </form>
    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST") {
           $num = $_POST['number']; 
           $reverse=0;
           $temp=$num;
           while($temp>0) {
                $digit=$temp % 10;
                $reverse=$reverse*10 + $digit;
                $temp=(int)($temp/10);
           }
           echo "<div class='result'>Reversed Number: $reverse</div>";
        }
    ?>
</body>
</html>
