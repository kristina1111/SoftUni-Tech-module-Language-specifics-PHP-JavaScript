/**
 * Created by user on 27.10.2016 г..
 */
function problemSolved(input){
    let cnt = 0;
    let stringToCheck = input[0].toLowerCase();
    let pattern = input[1] !== undefined ? input[1].toLowerCase() : ' ';
    while(stringToCheck.indexOf(pattern)!=-1){
        cnt++;
        var index = stringToCheck.indexOf(pattern)+1;
        stringToCheck = stringToCheck.substring(index);
        }
    console.log(cnt);
}
problemSolved(["Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.",
    " "]);