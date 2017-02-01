<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Prime Numbers from N to 1</title>
</head>
<body>
<?php
if(isset($_GET['num'])){
    $num = $_GET['num'];
    $arrNums=array(0=>false, 1=>false );

    for($i=2; $i<=$num; $i++){
        if($arrNums[$i]===null){
            $arrNums[$i]=true;
            for($k=$i*2; $k<=$num; $k+=$i){
                $arrNums[$k]= false;
            }
        }

    }
    for($i=count($arrNums)-1; $i>=3; $i--){
        if($arrNums[$i]==true){
            echo $i . " ";
        }
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