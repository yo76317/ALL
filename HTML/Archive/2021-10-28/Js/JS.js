//alert('hello js');


// function helloFun(){
//     console.log('helloFun1');
//     console.log('helloFun2');
//     console.log('helloFun3');
// }

// function helloFun(){
//     let spanObj = window.document.getElementById("spanID");
//     spanObj.innerHTML = "Hello";
//     spanObj.style.color = "lightpink";
// }

// function helloFun(){
// let spanObj = window.document.getElementById("spanEndID");
// spanObj.style.color = "back";
// }

function toggleMenu(){
    console.log('loggleMenu');
    let menuObj=document.getElementById("menu");
    if(menuObj.style.display=="none"){
        menuObj.style.display="blcok";
    }else{menuObj.style.display="none";
    }
}

// function toggleMenu(){
//     console.log('loggleMenu');
//     let menuObj=document.getElementById("menu");
//     menuObj.classList.toggle("hide");
// }