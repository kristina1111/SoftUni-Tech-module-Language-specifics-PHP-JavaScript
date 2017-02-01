/**
 * Created by user on 25.10.2016 г..
 */
function problemSolved(input){
    for(var num of input){
        var revNum = "";
        for(var i =num.length-1; i>=0; i--)
        {
            revNum+=num[i].toString();
        }
        console.log(revNum);
    }
}
problemSolved(["256", "1.12"])