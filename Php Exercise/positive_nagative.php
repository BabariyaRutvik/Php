<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Positive and Negative Number</title>
    <style>
        body{
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            background-color: aliceblue;
            margin: 20px;
        }
        form{
            margin-bottom: 20px;
        }
        label{
            margin-right: 10px;
        }
        input{
            margin-bottom: 10px;
            padding: 10px;
        }
        button{
            padding: 5px 10px;
            background-color: #007BFF;
            color: white;
            border: none;
            cursor: pointer;
            font-weight: bold;
        }
        .positive{
            background-color: #d4edda; 
            color: #155724;
            border: 1px solid #c3e6cb;
            padding: 10px;
            margin-top: 15px;
        }
        .negative{
            background-color: #f8d7da; 
            color: #721c24;
            border: 1px solid #f5c6cb;
            padding: 10px;
            margin-top: 15px;
        }
        .zero{
            background-color: #fff3cd; 
            color: #856404;
            border: 1px solid #ffeeba;
            padding: 10px;
            margin-top: 15px;
        }
    </style>
</head>
<body>
    <form method="post">
       <label for="number">Enter a number:</label>
       <input type="number" id="number" name="number" required>
       <button type="submit">Check</button>
    </form>

    <?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $num = $_POST['number'];

        if($num > 0){
            echo "<div class='positive'>$num is Positive</div>";
        }
        elseif($num < 0){
            echo "<div class='negative'>$num is Negative</div>";
        }
        else{
            echo "<div class='zero'>$num is Zero</div>";
        }
    }
    ?>
</body>
</html>
