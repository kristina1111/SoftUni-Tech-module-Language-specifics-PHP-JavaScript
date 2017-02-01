/**
 * Created by user on 26.10.2016 г..
 */
function problemSolved(input){
    var arrNames = [];
    for(var n in input){
        //console.log(input[n]);
        var names = input[n].split(" ").filter(function(n){return n!=""});
        var names = names.join("");
        arrNames.push(names);
    }
    arrNames.sort();
    //console.log(arrNames);
    var toPrint = arrNames[0];
    console.log(arrNames[0]);
    console.log(arrNames[1]);
}
problemSolved(['a b b b', 'a b b b b']);