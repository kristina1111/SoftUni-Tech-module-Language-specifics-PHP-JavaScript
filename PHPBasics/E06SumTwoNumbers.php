<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sum Two Numbers</title>
    <style>
        span {
            display: inline-block;
            width: 110px;
        }
        input {
            width: 80px;
        }
    </style>
</head>
<body>
    <?php
        if(isset($_GET['firstNum']) && isset($_GET['secNum']))
        {
            $firstNum = htmlspecialchars($_GET['firstNum']);
            $secNum = htmlspecialchars($_GET['secNum']);
            echo $firstNum . " + " .  $secNum . " = ";
            echo $firstNum + $secNum;
        }
    ?>
    <form>
        <span>First Number</span>
        <input type="text" name="firstNum"/>
        <br><br>
        <span>Second Number</span>
        <input type="text" name="secNum"/>
        <br><br>
        <input type="submit"/>
    </form>
</body>
</html>