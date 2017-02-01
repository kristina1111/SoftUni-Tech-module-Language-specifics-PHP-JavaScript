<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>HTML Buttons</title>
    <style>
        button {
            display: block;
        }
    </style>
</head>
<body>
<?php
if(isset($_GET['num1']) && isset($_GET['num1'])){
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    echo "<ul>";
    for($i=1; $i<=$num1; $i++){
        echo "<li>";
        echo "List $i";
        echo "<ul>";
        for($k=1; $k<=$num2; $k++){
            echo "<li>Element $i.$k</li>";
        }
        echo "</li>";
        echo "</ul>";
    }
    echo "</ul>";

}

else{ ?>
    <form>
        Number 1: <input type="text" name="num1"/>
        Number 2: <input type="text" name="num2"/>
        <input type="submit"/>
    </form>
<?php  }   ?>
</body>
</html>