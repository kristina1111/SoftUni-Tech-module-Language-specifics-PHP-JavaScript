/**
 * Created by user on 25.10.2016 г..
 */
function problemSolved(input){
    for(var num of input){
        var isPrimeNum = parseInt(num);
        var isPrime = true;
        if(isPrimeNum === 0 || isPrimeNum=== 1)
        {
            isPrime = false;
        }
        else
        {
            for(var i = 2; i<=Math.sqrt(num); i++){
                if(isPrimeNum%i===0)
                {
                    isPrime = false;
                    break;
                }
            }
        }

        console.log(isPrime ? "True":"False");
    }
}
problemSolved(["2"]);