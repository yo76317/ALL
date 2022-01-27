// 宣告
const form = document.getElementById('myForm');
const coffee = document.getElementById('coffee');
const scentedTea = document.getElementById('scentedTea');
const PreciousMilk = document.getElementById('PreciousMilk');

const resulta1 = document.getElementById('resulta1');

const submit1 = document.getElementById('submit1');

const coffeeErr = document.getElementById('coffeeErr');
const scentedTeaErr = document.getElementById('scentedTeaErr');
const PreciousMilkErr = document.getElementById('PreciousMilk');


// get form
form.addEventListener("submit", function (e) {
    // 測試事件是否有觸發
    // console.log(e);

    // 預防重整
    e.preventDefault();
    // 確認窗
    // confirm("是否要送出表單?");

    // 測試有無抓取到欄位值
    // console.log(coffee.value);
    // console.log(scentedTea.value);
    // console.log(PreciousMilk.value);

    // 使用parseInt,將輸入的字串轉成整數
    const parseIntcoffee = parseInt(coffee.value);
    const parseIntscentedTea = parseInt(scentedTea.value);
    const parseIntPreciousMilk = parseInt(PreciousMilk.value);
    if (isNaN(PreciousMilk)) {
        PreciousMilkErr.innertext = "請輸入數字"
    }

    // 第一項
    let money1 = (parseIntcoffee * 10);
    console.log(money1);

    // 第二項
    let money2 = (parseIntscentedTea * 50);
    console.log(money2);

    // 第三項
    let money3 = (parseIntPreciousMilk * 100);
    console.log(money3);

    // 三項加總
    let moneyTotal = money1 + money2 + money3;
    console.log(moneyTotal);

    // 三項平均
    let all3 = Math.round(moneyTotal / 3 * 1) / 1;

    // 輸出分數欄位2
    const result1 =
        `<div class="alert alert-danger" role="alert" id="result1">
    咖啡:${parseIntcoffee}<br> 
    花茶:${parseIntscentedTea}<br> 
    珍奶:${parseIntPreciousMilk}<br>   
    總價:${moneyTotal}<br>
    平均:${all3}<br> 
    </div>`;

    // 指定顯示ID欄位innerHTML會把輸出分數2覆蓋過指定ID欄位
    result2.innerHTML = result1;

    // -------------------------------------------------------------------

    const form2 = document.getElementById('myForm2');
    const coffee2 = document.getElementById('coffee2');
    const scentedTea2 = document.getElementById('scentedTea2');
    const PreciousMilk2 = document.getElementById('PreciousMilk2');

    

});