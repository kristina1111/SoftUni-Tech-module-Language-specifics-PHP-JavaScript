//function extractSent(input) {
//    var quer = input[0];
//    let text = input[1];
//    var pattern1 = "(?:^|(\\. )|(! )|(\\? ))(\\w[^.!?]*)?";
//    var pattern2 = "[^.!?]*(?=\\.|!|\\?)";
//    //const pattern = /(\w[^.!?]*)?\b/q+quer+/\b[^.!?]*[^.!?]/g;
//    var pat = new RegExp(pattern1+ "\\b" + quer + "\\b" + pattern2, 'g');
//
//    let matches = text.match(pat);
//    if(matches!=null){
//        for(var i=0; i<matches.length; i++){
//            //console.log(matches[i]);
//            console.log(matches[i].replace(/(\. |\? |! )/g, ""));
//        }
//    }
//
//}

function extractSent(input) {
    let quer = input[0];
    let text = input[1];
    //let pat = new RegExp("/(\w[^.!?]*)?\b"+quer+"\b[^.!?]*[^.!?]/g"); // the wrong one without escaping
    let pat = new RegExp("(\\w[^.!?]*)?\\b"+quer+"\\b[^.!?]*[^.!?]");
    let matches = text.match(pat);
    if(matches!=null){
        for(let m of matches){
            console.log(m.trim());
        }
    }
}
extractSent(["to", "TODO. TO DO. To Do. Welcome to SoftUni! You will learn programming, algorithms, problem solving and software technologies. You need to allocate for study 20-30 hours weekly. What to do? Good luck! Tell me what to do! I am fan of Motorhead. To be or not to be - that is the question. TO DO OR NOT? Tell me what TO do! Make a TODO list (todo list). Make a todo. Come today. I like computers (to play). Can I have a TODO list /to do list/?"]);