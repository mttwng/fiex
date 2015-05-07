    window.onload = initPage;

var euro;
var convert;

function initPage()
{
    document.getElementById("convertButton").onclick = calcAnswer;
    document.getElementById("conversionType").onchange = calcAnswer;
}

function calcAnswer()
{
    //alert(document.getElementById("conversionType").value);

    var value1 = document.getElementById("amount").value;
    var conversionType = document.getElementById("conversionType").value;
    //alert(conversionType);

    //if(var value = document.getElementById("conversionType").value=="polish");
    //  document.getElementById("answer").value=value1 * 4.4976;
    //else
    //  document.getElementById("answer").value=value1* 10.43958;


    if(conversionType == "chinese") {
        value2 = value1 * 6.27;
    } else if(conversionType == "japanese") {
        value2 = value1 * 121.38;
    } else if(conversionType == "korean"){
        value2 = value1 * 1130.74;
    }
    document.getElementById("answer").value = value2.toFixed(2);



}