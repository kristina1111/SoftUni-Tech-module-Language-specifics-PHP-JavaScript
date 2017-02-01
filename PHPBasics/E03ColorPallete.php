<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        div {
            float: left;
            width: 150px;
            padding: 10px;
            margin: 5px;
            text-align: center
        }
    </style>
</head>
<body>
    <?php
        for($i=0;$i<=255; $i+=51){
            for($k=0; $k<=255; $k+=51){
                for($l=0; $l<=255; $l+=51){

                    echo "<div style='background: rgb($i, $k, $l); '>rgb($i, $k, $l)</div >";
                }
            }
        }
    ?>
</body>
</html>