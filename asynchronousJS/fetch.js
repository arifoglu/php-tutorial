// fetch api

fetch("todos/aa.json").then((response)=>{
    console.log("resolved",response);
    return response.json();
 }).then(data=>{
    console.log(data);
 }).catch((err)=>{
    console.log("rejected",err);
 })