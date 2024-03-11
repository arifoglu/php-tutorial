const getTodos = async () => {
   const response = await fetch("todos/aa.json");
   const data = await response.json();
   return data;
};

getTodos()
   .then(data => console.log("resolved",data))
   .catch(err => console.log("rejected",err.message));