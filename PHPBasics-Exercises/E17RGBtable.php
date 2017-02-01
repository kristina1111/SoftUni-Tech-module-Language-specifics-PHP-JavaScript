<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>RGB table</title>
    <style>
        th, td {
            border: 1px solid black;
            border-collapse: collapse;
            height: 60px;
            width: 60px;
        }
    </style>
</head>
<body>
<table>
    <caption>RGB table</caption>
    <tr>
        <th>Red</th>
        <th>Green</th>
        <th>Blue</th>
    </tr>
    <?php
    for($row=51; $row<=255; $row+=51){
        echo "<tr>";
        for($col=0; $col<3; $col++){
            if($col==0){
                echo "<td style='background-color: rgb($row, 0, 0)'></td>";
            }
            else if($col==1){
                echo "<td style='background-color: rgb(0, $row, 0)'></td>";
            }
            else{
                echo "<td style='background-color: rgb(0, 0, $row)'></td>";
            }
        }
        echo "</tr>";
    }
    ?>

</table>

</body>
</html>