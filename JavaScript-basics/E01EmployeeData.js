/**
 * Created by user on 25.10.2016 г..
 */
function mainFunc(lines) {
    var arrayInfo = ["Amanda", "Jonson", "27", "f", "8306112507", "27563571"];
    var arrayText = ["First name: ", "Last name: ", "Age: ", "Gender: ", "Personal ID: ", "Unique Employee number: "];
    for (var i = 0; i < arrayInfo.length; i++) {
    console.log(arrayText[i]+arrayInfo[i])
}
}
mainFunc();