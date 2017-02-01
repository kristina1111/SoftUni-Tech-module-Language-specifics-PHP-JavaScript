<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hello Person</title>
</head>
<body>
    <?php
        if(isset($_GET['person'])){
            $person = htmlspecialchars($_GET['person']);
            echo "Hello,  $person)";
        } else{
    ?>
    <form>
        Name: <input type="text" name="person"/>
        </br>
        <input type="submit"/>
    </form>
    <?php } ?>

</body>
</html>