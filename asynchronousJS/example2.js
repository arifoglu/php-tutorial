////////////////////////////////// XMLHttpRequest: readyState property
//  Value	   State	                          Description
//    0	     UNSENT	                  Client has been created. open() not called yet.
//    1	     OPENED	                  open() has been called.
//    2	     HEADERS_RECEIVED	      send() has been called, and headers and status are available.
//    3	     LOADING	Downloading;   responseText holds partial data.
//    4	     DONE	                  The operation is complete.

const request = new XMLHttpRequest();
request.addEventListener('readystatechange',()=>{
     //console.log(request,request.readyState);

     if(request.readyState === 4){ // this http request
        console.log(request.responseText);
     }
});
request.open('GET','https://jsonplaceholder.typicode.com/todos/');
request.send();

