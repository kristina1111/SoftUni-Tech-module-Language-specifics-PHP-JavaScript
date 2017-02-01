/**
 * Created by user on 25.10.2016 г..
 */
function problemSolved(input){
    for(var num of input){
        if(num==="0")
        {
            console.log("1");
        }
        else if(num=="1")
        {
            console.log("1");
        }
        else
        {
            num = parseInt(num);
            var result = new Array(num);
            result[0] = 1;
            result[1] = 1;
            for(var i=2; i<=num; i++){
                result[i] = result[i-1]+result[i-2];
            }
            console.log(result[num]);
        }
    }
}
problemSolved(["0", "1", "2", "3", "4", "5", "6", "11", "25"]);