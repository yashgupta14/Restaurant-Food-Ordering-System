function validateForm(){
    let x = document.forms["myForm"]["name"].value;
    let y = document.forms["myForm"]["number"].value;

 if(x == ""){
     alert("Name required");
     return false;
 }
 if(isNaN(y)){
     alert("Enter only numeric value");
     return false;
 }
 if(y.length<10 || y.length>10){
    alert("Enter a valid contact number");
    return false;
}
}