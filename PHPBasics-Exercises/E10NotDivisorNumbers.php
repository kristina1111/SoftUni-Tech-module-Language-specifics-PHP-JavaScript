<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Not Divisor Numbers</title>
</head>
<body>
<?php
if(isset($_GET['num'])){
    $num = $_GET['num'];
    for($i=$num-1; $i>=1; $i--){
        if(($num%$i)!=0){
            echo "$i" . " ";
        }
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