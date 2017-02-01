<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Fifty Shades of Grey</title>
    <style>
        .innerDiv {
            display: inline-block;
            height: 50px;
            width: 50px;
            margin: 15px;
        }
    </style>
</head>
<body>
    <?php
        for($row = 0; $row<=255; $row+=51){
            echo "<div>";
            for($col=$row; $col<=$row+51; $col+=5){
                echo "<div class='innerDiv' style='background-color: rgb($col, $col, $col)'></div>";
            }
            echo "</div>";
        }

    ?>
</body>
</html>