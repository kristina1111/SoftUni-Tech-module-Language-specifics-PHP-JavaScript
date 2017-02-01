/**
 * Created by user on 30.10.2016 г..
 */
function problemSolved(input){
    var stringToCheck = input[0];
    var regex = /(?:^| )([a-zA-Z0-9]+([\.\-_][a-zA-Z0-9]+)?@[a-zA-Z0-9]+([\-_][a-zA-Z0-9]+)?(\.[a-zA-Z]+([\-][a-zA-Z]+)?){1,})(?= |\.|!|\?|,|:|;|$)/g;
    var matches = stringToCheck.match(regex);
    if(matches!=null){
        for(var m of matches){
            console.log(m.trim());
        }
    }
}
problemSolved(["bla"]);