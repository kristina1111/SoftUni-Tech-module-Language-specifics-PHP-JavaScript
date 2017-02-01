/**
 * Created by user on 30.10.2016 г..
 */
function problemSolved(input){
    var index = input.length-1;
    var stringToChange = input[index];
    var arrWords = input[0].split(', ');
    for(var i=0; i<arrWords.length; i++){
        var regex = new RegExp(arrWords[i], 'g');
        //var replacer = '******************************************************';
        //replacer = replacer.slice(0,arrWords[i].length);
        var replacer = new Array(arrWords[i].length+1).join('*');
        stringToChange = stringToChange.replace(regex, replacer);
    }
    console.log(stringToChange);
}
problemSolved(['Linux, Windows', 'It is not Linux, it is GNU/Linux. Linux is merely the kernel, while GNU adds the functionality. Therefore we owe it to them by calling the OS GNU/Linux! Sincerely, a Windows client']);
