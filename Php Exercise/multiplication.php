<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Table</title>
    <style>
        body{
            font-family: Arial, sans-serif;
            margin: 30px;
            background-color: #f2f2f2;
        }
        form{
            margin-bottom: 20px;
        }
        input[type="number"]{
            padding: 8px;
            margin-right: 10px;
        }
        button{
            padding: 8px 15px;
            background-color: #007BFF;
            color: white;
            border: none;
            cursor: pointer;
            font-weight: bold;
        }
        button:hover{
            background-color:  #0056b3;;

        }
        .table_box{
             margin-top: 20px;
            background: #fff;
            border-radius: 6px;
            padding: 15px;
            box-shadow: 0px 0px 5px #ccc;
            width: fit-content;
        }
        .table_box p{
            margin: 5px 0;
            font-size: 18px;
        }
    </style>
</head>
<body>
   <h5>Multiplication Table</h5>
   <form method="post">
    <label for="number" id="number">Enter a number:</label>
    <input type="number" id="number" name="number" required>
    <button type="submit">Generate</button>
   </form>
   <?php
     if($_SERVER["REQUEST_METHOD"]=="POST"){
        $num=$_POST['number'];

        echo "<div class='table_box'>";
        echo "<h4>Multiplication Table of $num</h4>";

        for($i=1;$i<=10;$i++){
        $result=$num*$i;
         echo "<p>$num × $i = $result</p>";
     }
     echo "</div>";
   }
    
   ?>
</body>
</html>