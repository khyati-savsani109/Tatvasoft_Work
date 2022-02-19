
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


function show1(){
  document.getElementById("tab1").style.backgroundColor="#1d7a8c";
  document.getElementById("tab1").style.color="#fff";
  document.getElementById("tab-img1").src="../assets/images/setup-service-white.png";
  document.getElementById("tab2").style.backgroundColor="#f3f3f3";
  document.getElementById("tab2").style.color="#4f4f4f";
  document.getElementById("tab-img2").src="../assets/images/schedule.png";
  document.getElementById("tab3").style.backgroundColor="#f3f3f3";
  document.getElementById("tab3").style.color="#4f4f4f";
  document.getElementById("tab-img3").src="../assets/images/details.png";
  document.getElementById("tab4").style.backgroundColor="#f3f3f3";
  document.getElementById("tab4").style.color="#4f4f4f";
  document.getElementById("tab-img4").src="../assets/images/payment.png";
  document.getElementById("body1").style.display="block";
  document.getElementById("body2").style.display="none";
  document.getElementById("body3").style.display="none";
  document.getElementById("body4").style.display="none";
}

function show2(){
  document.getElementById("tab1").style.backgroundColor="#f3f3f3";
  document.getElementById("tab1").style.color="#4f4f4f";
  document.getElementById("tab-img1").src="../assets/images/setup-service.png";
  document.getElementById("tab2").style.backgroundColor="#1d7a8c";
  document.getElementById("tab2").style.color="#fff";
  document.getElementById("tab-img2").src="../assets/images/schedule-white.png";
  document.getElementById("tab3").style.backgroundColor="#f3f3f3";
  document.getElementById("tab3").style.color="#4f4f4f";
  document.getElementById("tab-img3").src="../assets/images/details.png";
  document.getElementById("tab4").style.backgroundColor="#f3f3f3";
  document.getElementById("tab4").style.color="#4f4f4f";
  document.getElementById("tab-img4").src="../assets/images/payment.png";
  document.getElementById("body1").style.display="none";
  document.getElementById("body2").style.display="block";
  document.getElementById("body3").style.display="none";
  document.getElementById("body4").style.display="none";
}

function show3(){
  document.getElementById("tab1").style.backgroundColor="#f3f3f3";
  document.getElementById("tab1").style.color="#4f4f4f";
  document.getElementById("tab-img1").src="../assets/images/setup-service.png";
  document.getElementById("tab2").style.backgroundColor="#f3f3f3";
  document.getElementById("tab2").style.color="#4f4f4f";
  document.getElementById("tab-img2").src="../assets/images/schedule.png";
  document.getElementById("tab3").style.backgroundColor="#1d7a8c";
  document.getElementById("tab3").style.color="#fff";
  document.getElementById("tab-img3").src="../assets/images/details-white.png";
  document.getElementById("tab4").style.backgroundColor="#f3f3f3";
  document.getElementById("tab4").style.color="#4f4f4f";
  document.getElementById("tab-img4").src="../assets/images/payment.png";
  document.getElementById("body1").style.display="none";
  document.getElementById("body2").style.display="none";
  document.getElementById("body3").style.display="block";
  document.getElementById("body4").style.display="none";
}

function show4(){
  document.getElementById("tab1").style.backgroundColor="#f3f3f3";
  document.getElementById("tab1").style.color="#4f4f4f";
  document.getElementById("tab-img1").src="../assets/images/setup-service.png";
  document.getElementById("tab2").style.backgroundColor="#f3f3f3";
  document.getElementById("tab2").style.color="#4f4f4f";
  document.getElementById("tab-img2").src="../assets/images/schedule.png";
  document.getElementById("tab3").style.backgroundColor="#f3f3f3";
  document.getElementById("tab3").style.color="#4f4f4f";
  document.getElementById("tab-img3").src="../assets/images/details.png";
  document.getElementById("tab4").style.backgroundColor="#1d7a8c";
  document.getElementById("tab4").style.color="#fff";
  document.getElementById("tab-img4").src="../assets/images/payment-white.png";
  document.getElementById("body1").style.display="none";
  document.getElementById("body2").style.display="none";
  document.getElementById("body3").style.display="none";
  document.getElementById("body4").style.display="block";
}
