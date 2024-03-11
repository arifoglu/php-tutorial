const getTodos = (resource) => {

    return new Promise((resolve,reject)=>{
 
       const request = new XMLHttpRequest();
       request.addEventListener('readystatechange',()=>{
       
            if(request.readyState === 4 && request.status === 200)
            {
               const data = JSON.parse(request.responseText);
               resolve(data);
            }
            else if(request.readyState === 4)
            {
               reject("cerror getting resource");
            };
       });
       request.open('GET',resource);
       request.send();
    })
 
 };
 
 // promise chain
 getTodos("todos/aa.json").then(data =>{
    console.log("promise 1 resolved : ",data);
    return getTodos("todos/bb.json");
 }).then(data => {
    console.log("promise 2 resolved : ",data);
    return getTodos("todos/cc.json");
 }).then(()=>{
    console.log("promise 3 resolved : ",data);
 }).catch((err)=>{
    console.log("promise rejected :",err);
 });
 
 