/**
 * Created by user on 26.10.2016 г..
 */
function problemSolved(input){
    var arrDict = {};
    for(var ar of input){
        var infoArr = ar.split(' ').filter(function(n){return n!=""});
        if(infoArr[0]=="A"){
            arrDict[infoArr[1]] = infoArr[2];
        }
        else if(infoArr[0] == "S"){
            if(arrDict[infoArr[1]]===undefined){
                console.log("Contact "+infoArr[1]+" does not exist.");
            }
            else{
                console.log(infoArr[1]+" -> "+arrDict[infoArr[1]]);
            }
        }
        else{
            break;
        }
    }
}
problemSolved(["A Nakov +359888001122",
    "A RoYaL(Ivan) 666",
    "A Gero 5559393",
    "A Simo 02/987665544",
    "S Simo",
    "S simo",
    "S RoYaL",
    "S RoYaL(Ivan)",
    "END"]);