window.onload = initPage;

function initPage()
{
    document.getElementById("convertButton").onclick = calcAnswer;
    document.getElementById("conversionType").onchange = calcAnswer;
    document.getElementById("conversionTo").onchange = calcAnswer;
}

function calcAnswer()
{
    var value1 = document.getElementById("amount").value;
    var conversionType = document.getElementById("conversionType").value;
    var conversionTo = document.getElementById("conversionTo").value;

    var dollar2yuan = 6.20;
    var dollar2yen = 119.39;
    var dollar2won = 1091.47;

    var yuan2yen = 19.25;
    var yuan2won = 176.18;
    var yuan2dollar = 1 / dollar2yuan;

    var yen2yuan = 1 / yuan2yen;
    var yen2won = 18.29;
    var yen2dollar = 1 / dollar2yen;

    var won2yuan = 1 / yuan2won;
    var won2dollar = 1 / dollar2won;
    var won2yen = 1 / yen2won;

    value1 -= 1;
    if (conversionType == "dollar") {
        if (conversionTo == "yuan") {
            value2 = value1 * dollar2yuan;
        } else if (conversionTo == "yen") {
            value2 = value1 * dollar2yen;
        } else if (conversionTo == "won") {
            value2 = value1 * dollar2won;
        } else {
            value2 = value1;
        }        
    } else if (conversionType == "yuan") {
        if (conversionTo == "yen") {
            value2 = value1 * yuan2yen;
        } else if (conversionTo == "dollar") {
            value2 = value1 * yuan2dollar;
        } else if (conversionTo == "won") {
            value2 = value1 * yuan2won;
        } else {
            value2 = value1;
        }        
    } else if (conversionType == "yen") {
        if (conversionTo == "yuan") {
            value2 = value1 * yen2yuan;
        } else if (conversionTo == "dollar") {
            value2 = value1 * yen2dollar;
        } else if (conversionTo == "won") {
            value2 = value1 * yen2won;
        } else {
            value2 = value1;
        }        
    } else if (conversionType == "won") {
        if (conversionTo == "yuan") {
            value2 = value1 * won2yuan;
        } else if (conversionTo == "dollar") {
            value2 = value1 * won2dollar;
        } else if (conversionTo == "yen") {
            value2 = value1 * won2yen;
        } else {
            value2 = value1;
        }        
    } 
    if (value2 < 1) {
        value2 = 0;
    }
    document.getElementById("answer").value = value2.toFixed(2);


}