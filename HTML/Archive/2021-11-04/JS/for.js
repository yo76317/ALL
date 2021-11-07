const myid = ['chen','yo','qing','good'];

console.log(myid[3]);   // 0.1.2.3 數字是指陣列的開始值
console.log(myid[2]);
console.log(myid[1]);
console.log(myid[0]);
// 呼叫單個陣列

for(let start = 0; start < myid.length; start++){
    console.log(myid[start]);
}
// 呼叫陣列[全]

for(let i=1 ; i<=10 ; i++){
    console.log("i = " + i );
}
// FOR i<=10

myid.push1 = "eat";
console.log(myid);
myid.push2 = "water","candy";
console.log(myid);
// 尾端加入數值push

let TestStr = '0123456789';
console.log(TestStr.length);
// length判斷數值幾個

const iphoneObj={
    "A":1000,
    "B":2000,
    "C":3000,
    "D":4000,
}
console.log(iphoneObj);
// Obj
for(const [key,value]of Object.entries(iphoneObj)){
    console.log(`${key}:${value}`);
}
// Obj 抓資料