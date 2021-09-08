
var today = new Date();
var dd = today.getDate(); 
var mm = today.getMonth()+1; 
var yyyy = today.getFullYear();

today = dd+'-'+mm+'-'+yyyy;
document.getElementById("h").innerHTML = today; 
