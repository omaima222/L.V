



let age = 2;

try{

   if( age < 13 )    throw "you cant have an account !";
    
   if(isNaN(age ))    throw "This is not a number!";

   
   console.log("welcome");

}catch(Exception){
    
    console.log(Exception);
    
}finally{
    console.log("process done");
}