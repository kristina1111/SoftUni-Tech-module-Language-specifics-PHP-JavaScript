/**
 * Created by user on 25.10.2016 г..
 */
function problemSolved(input){
    for(var ar of input){

        var mainArr = ar.replace(/[/,/s]+/g, ' ')
            .split(" ")
            .filter(function(n){
                return n!=""
            });
        var count = mainArr.length/4;
        var leftArr = mainArr.slice(0,count).reverse();
        var rightArr = mainArr.slice((count)*3).reverse();
        mainArr = mainArr.slice(count, mainArr.length-(count));
        leftArr.push.apply(leftArr, rightArr);

        for(var i =0;i<mainArr.length; i++){
            mainArr[i] = parseInt(mainArr[i])+parseInt(leftArr[i]);
        }
        console.log(mainArr.join(" "));
        //console.log(leftArr.join(" "));
        //console.log(rightArr.join(" "));
    }
}
problemSolved(["4 ,, ,  ,  3 -1 2 5 0 1 9 8 6 7 -2"]);