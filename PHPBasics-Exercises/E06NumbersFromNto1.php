<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Numbers Form Num to 1</title>
</head>
<body>
    <?php
    if(isset($_GET['num'])){
        $num = $_GET['num'];
        for($i=$num; $i>=1; $i--){
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