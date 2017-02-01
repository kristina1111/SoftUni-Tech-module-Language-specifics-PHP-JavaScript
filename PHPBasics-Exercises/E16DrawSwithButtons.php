<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Draw Buttons</title>
    <style>
        .blue {
            background-color: blue;
        }
        input {
            width: 50px;
            height: 15px;
        }
        input:last-of-type {
            width: 60px;
            height: 25px;
        }
        select {
            width: 60px;
            height: 21px;
        }
    </style>
</head>
<body>
<?php
if(isset($_GET['num1']) && isset($_GET['num1']) && isset($_GET['taskOption'])){
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    $side = $_GET['taskOption'];
    for($row=0; $row<$num2; $row++){
        echo "<div>";
        if($row%4==0 && $row!=0){
            $side = $side=="right" ? "left":"right";
        }
        for($col=0; $col<$num1; $col++){
            if($row%4==0){
                echo "<button class='blue'>1</button>";
            }
            else if($side=="right"){
                if($col==$num1-1){
                    echo "<button class='blue'>1</button>";
                }
                else{
                    echo "<button>0</button>";
                }
            }
            else if($side=="left"){
                if($col==0){
                    echo "<button class='blue'>1</button>";
                }
                else{
                    echo "<button>0</button>";
                }
            }
        }
        echo "</div>";
    }

}

else{ ?>
    <form>
        Raws: <input type="text" name="num1"/>
        Columns: <input type="text" name="num2"/>
        Side:
        <select name="taskOption" >
            <option value="left">left</option>
            <option value="right">right</option>
        </select>
        <input type="submit"/>
    </form>
<?php  }   ?>
</body>
</html>