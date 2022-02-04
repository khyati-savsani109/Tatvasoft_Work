
function validation(){

  //mobile number validation
  var a = document.getElementById("mobile").value;
  if(isNaN(a)){
    document.getElementById("msg").innerHTML = "** only numeric value is allowed.";
    return false;
  }
  if(a.length<10){
    document.getElementById("msg").innerHTML = "** mobile no must be of 10 digits.";
    return false;
  }
  if(a.length>10){
    document.getElementById("msg").innerHTML = "** mobile no must be of 10 digits.";
    return false;
  }
  if((a.charAt(0) == 0)){
    document.getElementById("msg").innerHTML = "** mobile no must start between 1-9.";
    return false;
  }

  //firstname validation
  var correct_way = /^[A-Za-z]+$/;
  var b = document.getElementById("fname").value;
  if(b.length<3){
    document.getElementById("msg1").innerHTML = "** firstname must be 3 characters.";
    return false;
  }

  if(b.match(correct_way))
    true;
    else{
      document.getElementById("msg1").innerHTML = "** only alpabets are allowed.";
    return false;
   }

  //lastname validation
  var correct_ways = /^[A-Za-z]+$/;
  var c = document.getElementById("lname").value;
  if(c.length<4){
    document.getElementById("msg2").innerHTML = "** lastname must be 4 characters.";
    return false;
  }

  if(c.match(correct_ways))
    true;
    else{
      document.getElementById("msg2").innerHTML = "** only alpabets are allowed.";
    return false;
   }

   //email validation
   var d = document.myform.email.value;
   if(d.indexOf('@')<=0){
     document.getElementById("msg3").innerHTML = "** invalid @ position.";
     return false;
   }
   if((d.charAt(d.length-4)!='.') && (d.charAt(d.length-3)!='.')){
     document.getElementById("msg3").innerHTML = "** invalid . position.";
     return false;
   }


}
