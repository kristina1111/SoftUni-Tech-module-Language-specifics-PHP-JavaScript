<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Even numbers Form 1 to Num</title>
</head>
<body>
<?php
if(isset($_GET['num'])){
    $num = $_GET['num'];
    for($i=2; $i<=$num; $i+=2){
        echo "$i" . " ";
    }
}
else{
    ?>
    <form>
        N: <input type="text" name="num"/>
        <input type="submit"/>
    </form>
<?php } ?>

</body>
</html>