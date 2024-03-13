let user = {
    "username": "Mike",
    "password": "Mike567",
    "gender":   "male",
    "email" : "mike@gmail.com"
}

fetch("script.php",{
     "method" : "POST",
     "headers": {
        "Content-Type": "application/json; charset=utf-8"
     },
     "body": JSON.stringify(user)
}).then(function(response){
     return response.text();
    
    // return response.json();


}).then(function(data){
    console.log(data);
})
