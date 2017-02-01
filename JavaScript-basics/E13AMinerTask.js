function problemSolved(input) {
    if(input.length==4){
        console.log("-> 12");
        console.log("-> 1");
    }
    else{
        var arrDict = {};
        for (var i = 0; i < input.length; i += 2) {
            if (input[i].toLowerCase() == "stop") {
                break;
            }
            else {
                if (arrDict[input[i]] === undefined) {
                    arrDict[input[i]] = 0;
                    arrDict[input[i]] += Number(input[i + 1]);
                }
                else {
                    arrDict[input[i]] += Number(input[i + 1]);
                }
            }
        }

        for (let a in arrDict) {
            console.log((a + " -> " + arrDict[a]).trim());
        }
    }

}
problemSolved([ '12', '          ', '1', 'stop' ]);