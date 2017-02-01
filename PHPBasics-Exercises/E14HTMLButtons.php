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
if(isset($_GET['num'])){
    $num = $_GET['num'];
    for($i=1; $i<=$num; $i++){
        echo "<button>$i</button>";
    }

}

else{ ?>
    <form>
        Number: <input type="text" name="num"/>
        <input type="submit"/>
    </form>
<?php  }   ?>
</body>
</html>