<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Multiply/Divide Numbers</title>
</head>
<body>

        <form>
            N1: <input type="text" name="num1"/>
            N2: <input type="text" name="num2"/>
            N3: <input type="text" name="num3"/>
            <input type="submit"/>
        </form>
        <?php
            if(isset($_GET['num1']) && isset($_GET['num2']) && isset($_GET['num3']))
            {
                if($_GET['num1']!=0 && $_GET['num2']!=0 && $_GET['num3']!=0){
                    $arrNums = [$_GET['num1'], $_GET['num2'], $_GET['num3']];
                    $count = 0;
                    foreach ($arrNums as $num){
                        if($num<0){
                            $count++;
                        }
                    }
                    if($count%2==0){
                        echo "Positive";
                    }
                    else{
                        echo "Negative";
                    }
                }
                else{
                    echo "Positive";
                }

            }

        ?>

<!--    <form>-->
<!--        N1: <input type="text" name="nums[]"/>-->
<!--        N2: <input type="text" name="nums[]"/>-->
<!--        N3: <input type="text" name="nums[]"/>-->
<!--        <input type="submit"/>-->
<!--    </form>-->
<!--    --><?php
//    if(isset($_GET['nums'])){
//        $count = 0;
//        foreach ($_GET['nums'] as $num) {
//            if($num<0){
//                $count++;
//            }
//        }
//        if($count%2==0){
//            echo "Positive";
//        }
//        else{
//            echo "Negative";
//        }
//    }
//    ?>
</body>
</html>


