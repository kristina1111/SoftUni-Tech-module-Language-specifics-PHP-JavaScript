/**
 * Created by user on 25.10.2016 г..
 */
function problemSolved(input){
    for(var num of input){
        var hexNum = parseInt(num).toString(16).toUpperCase();

        var binNum =  parseInt(num).toString(2);
        console.log(hexNum);
        console.log(binNum);
    }
}
problemSolved(["10", "420"]);