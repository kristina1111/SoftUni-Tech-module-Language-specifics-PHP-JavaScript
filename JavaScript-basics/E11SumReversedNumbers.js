/**
 * Created by user on 26.10.2016 г..
 */
function problemSolved(input){
    var totalSum = 0;
    for(var n of input){
        var numArr = n.split(' ').filter(function(n){return n!=""});
        for(var i of numArr) {
            var num = i.split("").reverse().join("");
            totalSum += parseInt(num);
        }
    }
    console.log(totalSum);
}
problemSolved(["123 234 12"]);