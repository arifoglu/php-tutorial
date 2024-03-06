const request = new XMLHttpRequest();
request.addEventListener('readystatechange',()=>{
     if(request.readyState === 4 && request.status === 200)   // this status verify 
     {
        console.log(request.responseText);
     }
     else if(request.readyState === 4)
     {
      console.log("could not fetch data");
     };

});
request.open('GET','https://jsonplaceholder.typicode.com/todos/');
request.send();