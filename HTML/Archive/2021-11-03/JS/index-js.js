const form1 = document.getElementById("form1");
const num1 = document.getElementById("num1");
const num2 = document.getElementById("num2");
const option1 = document.getElementById("option1");
const resu1 = document.getElementById("resu1");
const presu = document.getElementById("resu2");

form1.addEventListener("submit",function(e){  
    // 讀取位置.addEventListener("什麼觸發",定義function函數(e));    語法 //
    // console.log(e); 預防表單重新整理的預設行為
    e.preventDefault();
    // console.log("submit",e);
    
    console.log(num1.value);
    console.log(num2.value);
    console.log(option1.value);

    calresult = parseInt((num1.value)*2) + parseInt(num2.value);
    console.log(calresult);
    console.log(typeof(calresult));

    presu.innerText = "結果:" + calresult;
}
)