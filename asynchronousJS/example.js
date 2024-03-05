console.log(1);
console.log(2);
setTimeout(()=> {
    console.log("callback function  is coming after");
},3000);
console.log(3);
console.log(4);

// this kind of asynchronous 