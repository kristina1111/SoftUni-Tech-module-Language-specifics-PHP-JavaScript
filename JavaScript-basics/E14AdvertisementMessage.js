/**
 * Created by user on 27.10.2016 г..
 */
function problemSolved(input){
    var arrPhrases = ["Excellent product.",
        "Such a great product.",
        "I always use that product.",
        "Best product of its category.",
        "Exceptional product.",
        "I can’t live without this product."];
    var arrEvents = ["Now I feel good.",
        "I have succeeded with this product.",
        "Makes miracles. I am happy of the results!",
        "I cannot believe but now I feel awesome.",
        "Try it yourself, I am very satisfied.",
        "I feel great!"];
    var arrAuthors = ["Diana", "Petya", "Stella", "Elena", "Katya", "Iva", "Annie", "Eva"];
    var arrCities = ["Burgas", "Sofia", "Plovdiv", "Varna", "Ruse"];
    var randomNum = Math.round(Math.random()*100);
    for(var i =0;i<parseInt(input);i++){
        console.log(arrPhrases[randomNum%arrPhrases.length]+
        " "+arrEvents[randomNum%arrEvents.length]+
        " "+arrAuthors[randomNum%arrAuthors.length]+
        " - "+arrCities[randomNum%arrCities.length]);
        randomNum = Math.round(Math.random()*100);

    };

}
problemSolved(3);
