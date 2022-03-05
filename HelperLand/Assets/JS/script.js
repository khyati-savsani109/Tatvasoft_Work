
function validation(){

  //mobile number validation
  var a = document.getElementById("mobile").value;
  if(isNaN(a)){
    document.getElementById("msg").innerHTML = "** only numeric value is allowed.";
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

   //street name validation
   var correct_way2 = /^[A-Za-z]+$/;
   var k = document.getElementById("streetname").value;
   if(k.length<3){
     document.getElementById("msg4").innerHTML = "** streetname must be 3 characters.";
     return false;
   }

   if(k.match(correct_way2))
     true;
     else{
       document.getElementById("msg4").innerHTML = "** only alpabets are allowed.";
     return false;
    }

    //city validation
    var correct_way3 = /^[A-Za-z]+$/;
    var j = document.getElementById("city").value;
    if(j.length<3){
      document.getElementById("msg5").innerHTML = "** city must be 3 characters.";
      return false;
    }

    if(j.match(correct_way3))
      true;
      else{
        document.getElementById("msg5").innerHTML = "** only alpabets are allowed.";
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


function e1(){
 var c1 = document.getElementById("Check1");
 var i1 = document.getElementById("CheckImg1");
 if(!c1.checked){
  var l1 = document.getElementById("left-entry");
  var r1 = document.getElementById("right-entry");
  i1.src="../assets/images/3-green.png";
  l1.innerHTML="Inside cabinets";
  r1.innerHTML="30 minutes";
}else{
  var l1 = document.getElementById("left-entry");
  var r1 = document.getElementById("right-entry");
  i1.src="../assets/images/3.png";
  l1.innerHTML="";
  r1.innerHTML="";
}
}

function e2(){
 var c2 = document.getElementById("Check2");
 var i2 = document.getElementById("CheckImg2");
 if(!c2.checked){
  var l2 = document.getElementById("left-entry");
  var r2 = document.getElementById("right-entry");
  i2.src="../assets/images/5-green.png";
  l2.innerHTML="Inside fridge";
  r2.innerHTML="30 minutes";
}else{
  var l2 = document.getElementById("left-entry");
  var r2 = document.getElementById("right-entry");
  i2.src="../assets/images/5.png";
  l2.innerHTML="";
  r2.innerHTML="";
}
}

function e3(){
 var c3 = document.getElementById("Check3");
 var i3 = document.getElementById("CheckImg3");
 if(!c3.checked){
  var l3 = document.getElementById("left-entry");
  var r3 = document.getElementById("right-entry");
  i3.src="../assets/images/4-green.png";
  l3.innerHTML="Inside oven";
  r3.innerHTML="30 minutes";
}else{
  var l3 = document.getElementById("left-entry");
  var r3 = document.getElementById("right-entry");
  i3.src="../assets/images/4.png";
  l3.innerHTML="";
  r3.innerHTML="";
}
}

function e4(){
 var c4 = document.getElementById("Check4");
 var i4 = document.getElementById("CheckImg4");
 if(!c4.checked){
  var l4 = document.getElementById("left-entry");
  var r4 = document.getElementById("right-entry");
  i4.src="../assets/images/2-green.png";
  l4.innerHTML="Laundry wash & dry";
  r4.innerHTML="30 minutes";
}else{
  var l4 = document.getElementById("left-entry");
  var r4 = document.getElementById("right-entry");
  i4.src="../assets/images/2.png";
  l4.innerHTML="";
  r4.innerHTML="";
}
}

function e5(){
 var c5 = document.getElementById("Check5");
 var i5 = document.getElementById("CheckImg5");
 if(!c5.checked){
  var l5 = document.getElementById("left-entry");
  var r5 = document.getElementById("right-entry");
  i5.src="../assets/images/1-green.png";
  l5.innerHTML="Interior windows";
  r5.innerHTML="30 minutes";
}else{
  var l5 = document.getElementById("left-entry");
  var r5 = document.getElementById("right-entry");
  i5.src="../assets/images/1.png";
  l5.innerHTML="";
  r5.innerHTML="";
}
}


function d1(){
  document.getElementById("sub-1").style.backgroundColor="#29626d";
  document.getElementById("sub-1").style.color="#fff";
  document.getElementById("sub-2").style.backgroundColor="#1d7a8c";
  document.getElementById("sub-2").style.color="#fff";
  document.getElementById("sub-3").style.backgroundColor="#1d7a8c";
  document.getElementById("sub-3").style.color="#fff";
  document.getElementById("sub-4").style.backgroundColor="#1d7a8c";
  document.getElementById("sub-4").style.color="#fff";
  document.getElementById("sub-5").style.backgroundColor="#1d7a8c";
  document.getElementById("sub-5").style.color="#fff";
  document.getElementById("sub-6").style.backgroundColor="#1d7a8c";
  document.getElementById("sub-6").style.color="#fff";
  document.getElementById("dash-body").style.display="block";
  document.getElementById("history-body").style.display="none";
  document.getElementById("fav-pros").style.display="none";
}

function d2(){
  document.getElementById("sub-1").style.backgroundColor="#1d7a8c";
  document.getElementById("sub-1").style.color="#fff";
  document.getElementById("sub-2").style.backgroundColor="#29626d";
  document.getElementById("sub-2").style.color="#fff";
  document.getElementById("sub-3").style.backgroundColor="#1d7a8c";
  document.getElementById("sub-3").style.color="#fff";
  document.getElementById("sub-4").style.backgroundColor="#1d7a8c";
  document.getElementById("sub-4").style.color="#fff";
  document.getElementById("sub-5").style.backgroundColor="#1d7a8c";
  document.getElementById("sub-5").style.color="#fff";
  document.getElementById("sub-6").style.backgroundColor="#1d7a8c";
  document.getElementById("sub-6").style.color="#fff";
  document.getElementById("dash-body").style.display="none";
  document.getElementById("history-body").style.display="block";
  document.getElementById("fav-pros").style.display="none";
}

function d4(){
  document.getElementById("sub-1").style.backgroundColor="#1d7a8c";
  document.getElementById("sub-1").style.color="#fff";
  document.getElementById("sub-2").style.backgroundColor="#1d7a8c";
  document.getElementById("sub-2").style.color="#fff";
  document.getElementById("sub-3").style.backgroundColor="#1d7a8c";
  document.getElementById("sub-3").style.color="#fff";
  document.getElementById("sub-4").style.backgroundColor="#29626d";
  document.getElementById("sub-4").style.color="#fff";
  document.getElementById("sub-5").style.backgroundColor="#1d7a8c";
  document.getElementById("sub-5").style.color="#fff";
  document.getElementById("sub-6").style.backgroundColor="#1d7a8c";
  document.getElementById("sub-6").style.color="#fff";
  document.getElementById("dash-body").style.display="none";
  document.getElementById("history-body").style.display="none";
  document.getElementById("fav-pros").style.display="block";
}

function d7(){
  document.getElementById("sub-1").style.backgroundColor="#1d7a8c";
  document.getElementById("sub-1").style.color="#fff";
  document.getElementById("sub-2").style.backgroundColor="#1d7a8c";
  document.getElementById("sub-2").style.color="#fff";
  document.getElementById("sub-3").style.backgroundColor="#1d7a8c";
  document.getElementById("sub-3").style.color="#fff";
  document.getElementById("sub-4").style.backgroundColor="#1d7a8c";
  document.getElementById("sub-4").style.color="#fff";
  document.getElementById("sub-5").style.backgroundColor="#1d7a8c";
  document.getElementById("sub-5").style.color="#fff";
  document.getElementById("sub-6").style.backgroundColor="#1d7a8c";
  document.getElementById("sub-6").style.color="#fff";
  document.getElementById("dash-body").style.display="none";
  document.getElementById("history-body").style.display="none";
  document.getElementById("fav-pros").style.display="none";
  document.getElementById("second-body").style.display="block";
}

function butt1(){
  document.getElementById("details-btn-1").style.backgroundColor="#009999";
  document.getElementById("details-btn-1").style.color="#fff";
  document.getElementById("address-btn-2").style.backgroundColor="lightgray";
  document.getElementById("address-btn-2").style.color="#111";
  document.getElementById("password-btn-3").style.backgroundColor="#lightgray";
  document.getElementById("password-btn-3").style.color="#111";
  document.getElementById("details-body").style.display="block";
  document.getElementById("address-body").style.display="none";
  document.getElementById("password-body").style.display="none";
}

function butt2(){
  document.getElementById("details-btn-1").style.backgroundColor="lightgray";
  document.getElementById("details-btn-1").style.color="#111";
  document.getElementById("address-btn-2").style.backgroundColor="#009999";
  document.getElementById("address-btn-2").style.color="#fff";
  document.getElementById("password-btn-3").style.backgroundColor="lightgray";
  document.getElementById("password-btn-3").style.color="#111";
  document.getElementById("details-body").style.display="none";
  document.getElementById("address-body").style.display="block";
  document.getElementById("password-body").style.display="none";
}

function butt3(){
  document.getElementById("details-btn-1").style.backgroundColor="lightgray";
  document.getElementById("details-btn-1").style.color="#111";
  document.getElementById("address-btn-2").style.backgroundColor="lightgray";
  document.getElementById("address-btn-2").style.color="#111";
  document.getElementById("password-btn-3").style.backgroundColor="#009999";
  document.getElementById("password-btn-3").style.color="#fff";
  document.getElementById("details-body").style.display="none";
  document.getElementById("address-body").style.display="none";
  document.getElementById("password-body").style.display="block";
}
