<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Fibonacci Sequence</title>
</head>
<body>
    <?php
        if(isset($_GET['num'])){
            $num = $_GET['num'];
            for($i=0; $i<$num; $i++)
            {
                if($i==1 || $i==0){
                    $arrNums[$i] = 1;
                }
                else{
                    $arrNums[$i] = $arrNums[$i-1] + $arrNums[$i-2];
                }
                echo "$arrNums[$i]" . " ";
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