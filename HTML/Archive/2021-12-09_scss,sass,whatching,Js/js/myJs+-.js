// alert('')

// form submit
    // myForm 的 submit click
// get form
// get num1
// get num2
// get option
    // option +
    // option -
    // option *
    // option /
    //switch






//宣告
const form = document.getElementById('myForm');
const num1 = document.getElementById('num1');
const num2 = document.getElementById('num2');
const option = document.getElementById('option');


// get form
form.addEventListener("submit",function(e){
    console.log(e);
    
    //預防重新整理的預設行為
    e.preventDefault();
    
    // alert("myForm submit");
    // alert(num1.value);
    console.log(num1.value);
    console.log(num2.value);
    console.log(option.value);
    parseIntNum1 = parseInt(num1.value);
    parseIntNum2 = parseInt(num2.value);

    // 如果這樣輸出會變字串+字串
    // alert(num1.value+num2.value);
    // 所以用parseInt來變值後相運算
    // alert(parseIntNum1 + parseIntNum2);

    // 判斷+-*/
    console.log(typeof(option.value));
    switch(option.value){
        case "+" :
            alert(parseIntNum1 + parseIntNum2);
            break;
        case "-" :
            alert(parseIntNum1 - parseIntNum2);
            break;
        case "*" :
            alert(parseIntNum1 * parseIntNum2);
            break;
        case "/" :
            alert(parseIntNum1 / parseIntNum2);
            break;

        default :
        alert("default");
        break;
    }
});
