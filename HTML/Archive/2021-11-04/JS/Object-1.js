console.log(typeof({}));

const Object1 = {
    name:"yo",
    age:30,
    tel:"0976-375-037",
    isAdmin: false
}

const Object2 = {
    name:"qing",
    age:40,
    tel:"0933-438520",
    isAdmin: true
}

console.log(Object1);
console.log("Object2" , Object2);
console.log(Object1['tel']);
console.log(Object2['tel']);

Object1.age = 100;
console.log("修改age" , Object2);
