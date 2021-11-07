const form1 = document.getElementById("form1");
const A1 = document.getElementById("A1");
const A2 = document.getElementById("A2");
const B1 = document.getElementById("B1");
const B2 = document.getElementById("B2");
const C1 = document.getElementById("C1");
const C2 = document.getElementById("C2");
const resu1 = document.getElementById("resu1");
const resu2 = document.getElementById("resu2");
const resu3 = document.getElementById("resu3");
const resu4 = document.getElementById("resu4");
const resu5 = document.getElementById("resu5");

form1.addEventListener("submit",function(e){  
    // 讀取位置.addEventListener("什麼觸發",定義function函數(a));    語法 //
    // console.log(e); 預防表單重新整理的預設行為
    e.preventDefault();
    // console.log("submit",e);
    console.log(A1.value);
    console.log(A2.value);
    console.log(B1.value);
    console.log(B2.value);
    console.log(C1.value);
    console.log(C2.value);
    console.log(resu1.value);
    console.log(resu2.value);
    console.log(resu3.value);
    console.log(resu4.value);
    console.log(resu5.value);
    
    calresult1 = parseInt(A1.value) * parseInt(A2.value);
    calresult2 = parseInt(B1.value) * parseInt(B2.value);
    calresult3 = parseInt(C1.value) * parseInt(C2.value);
    console1.log(calresult);
    console1.log(typeof(calresult));
    resu1.innerText = calresult1 + "元";
}
)