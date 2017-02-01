<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>N Factorial</title>
</head>
<body>
<?php
    if(isset($_GET['num'])){
        $numResult = 1;
        $num = $_GET['num'];
        for($i=1; $i<=$num; $i++){
            $numResult*=$i;
        }
        echo $numResult;
    }
    else{
        ?>
        <form>
            Number: <input type="text" name="num"/>
            <input type="submit"/>
        </form>
    <?php
    }
    ?>


</body>
</html>