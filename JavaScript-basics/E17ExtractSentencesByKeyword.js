/**
 * Created by user on 31.10.2016 г..
 */
function problemSolved(input){
    var regex = new RegExp("\\b" + input[0] + "\\b", 'g');
    //var arrSentences = input[1].match(/(?:^|(\. )|(! )|(\? ))([\w\-,\)\(]+([\W][\w\-,\(\)]+)*)(?=\.|\!|\?)/g);
    var arrSentences = input[1].match(/(?:^|(\. )|(! )|(\? )).*?(?=\.|\!|\?)/g);
    for(var i=0; i<arrSentences.length; i++){
        if(arrSentences[i].match(regex)===null){
            continue;
        }
        console.log(arrSentences[i].replace(/(\. |\? |! )/g, ""));
    }
}
problemSolved(["to", "TODO. TO DO. To Do. Welcome to SoftUni! You will learn programming, algorithms, problem solving and software technologies. You need to allocate for study 20-30 hours weekly. What to do? Good luck! Tell me what to do! I am fan of Motorhead. To be or not to be - that is the question. TO DO OR NOT? Tell me what TO do! Make a TODO list (todo list). Make a todo. Come today. I like computers (to play). Can I have a TODO list /to do list/?"]);