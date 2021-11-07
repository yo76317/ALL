// let i=1;
// while(i<=9){
//     let b = 1;
//     while (b<=9){
//         console.log( i + "*" + b + "=" + i*b);
//         b = b + 1;
//     }
//     i = i + 1;
// }


let i=1;
while(i<=9){
    let b = 1;
    while (b<=9){
        document.write( i + "*" + b + "=" + i*b + '<br>');
        b = b + 1;  // b+=1
    }
    document.write("<br>")
    i = i + 1; // i+=1
}


