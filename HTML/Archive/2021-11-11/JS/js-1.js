const Form1=document.getElementById("Form1");
const num1Input=document.getElementById("num1");
const num2Input=document.getElementById("num2");
const result = document.getElementById("result");

Form1.addEventListener("submit",function(e){
    alert("55688");
});

Form1.addEventListener("submit",function(e){
    alert("55677");
});

num1Input.addEventListener("submit",function(e){
    alert("changee");
});

Form1.addEventListener("submit",function(e){
    e.preventDefault();
    calResult = parseInt(num1Input.lvalue) * parseInt(num2Input.lvalue);
    console.log(calResult);
    result.innerText="Result : " + calResult;
});

num1Input.addEventListener("change",function(e){
    num1Input=parseInt(num1Input.value);
    num2Input=parseInt(num2Input.value);
    calResult=num1Input
})
