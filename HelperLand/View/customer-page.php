<html>

<head>
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
 <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
 <link rel="stylesheet" href="../assets/css/customer-page.css">
</head>

<body>

   <div class="container conta1">
     <header class="header">
       <div class="container cont_6">
         <div class="row align-items-center justify-content-between">
           <div class="logo"><a href=""><img src="../assets/images/logo-large.png"></a></div>
             <input type="checkbox" id="nav-check">
             <div class="ir"><img class="m1" src="../assets/images/icon-notification.png" class="display-sm display-sm-notification text-right nav-border nav-link-image"></div>
               <label for="nav-check" class="nav-toggler">
               <span></span>
               </label>
               <nav class="nav">
               <ul>
                 <li><a class="active" href="">Book now</a></li>
                 <li><a class="active1" href="http://localhost/helperland/View/prices.php">Prices & services</a></li>
                 <li><a class="active2" href="">Warranty</a></li>
                 <li><a class="active2" href="">Blog</a></li>
                 <li><a class="active2" href="http://localhost/helperland/View/contact-us.php">Contact</a></li>
                 <li class="v1"><a href=""><img class="imgs1" src="../assets/images/icon-notification.png"><sup>2</sup></a></li><a class="v2" href="">
                 <li class="dropdown"><a href="" class="dropdown-toggle" data-toggle="dropdown" id="mydrop"><img class="imgs2" src="../assets/images/admin-user.png">
                           <div class="dropdown-menu dropm" aria-labelledby="mydrop">
   													<a class="dropdown-item" href=""><font color="black">My Dashboard</font></a>
   													<a class="dropdown-item" href="#second-body" onclick="d7()"><font color="black">My Settings</font></</a>
                            <a class="dropdown-item" href="http://localhost/HelperLand/homepg.php"><font color="black">Logout</font></a>
   												</div></a></li>
               </ul>
               </nav>
           </div>
         </div>
       </header>

       <div class="container text-center welcome-cont">Welcome, Guarang!</div>



       <div class="customer-main d-flex flex-nowrap py-5" id="customer-main">

         <div class="customer-main-sub1 ml-5">
           <button class="sb-1" id="sub-1" onclick="d1()">Dashboard</button><br>
           <button class="sb-2" id="sub-2" onclick="d2()">Service History</button><br>
           <button class="sb-3" id="sub-3" onclick="d3()">Service Schedule</button><br>
           <button class="sb-4" id="sub-4" onclick="d4()">Favourite Pros</button><br>
           <button class="sb-5" id="sub-5" onclick="d5()">Invoices</button><br>
           <button class="sb-6" id="sub-6" onclick="d6()">Notifications</button><br>
         </div>


         <div class="customer-main-sub2 ml-5">

           <div class="sub-body-1" id="dash-body">
             <div style="width:1170px;"><p class="body-3-left"><b>Current Service Requests</b></p>
               <p class="body-3-right"><button class="new-service">Add New Service Request</button></p></div>

               <div class="table-responsive">
								<table class="table border-collapse:collapse tabular-1">
									<thead>
                    <tr align="left" >
    									<th>Service Id</th>
    									<th>Service date</th>
    									<th>Service Provider</th>
    									<th>Payment</th>
    									<th class="th1">Actions</th>
							      </tr>
                  </thead>

                  <tbody>
                    <tr align="left"  data-target="#ratemodal-1" data-toggle="modal" data-dismiss="modal">
                      <td><p class="mt-3">8485</p></td>
                      <td><p class="text-left pay2"><img src="../assets/images/calendar2.png"> 05/10/2021<br><img src="../assets/images/layer-14.png"> 08:00 - 11:30</p></td>
                      <td></td>
                      <td><p class="pay1 mt-3">87,50 &euro;</p></td>
                      <td><center><p><button class="remove-1 mt-2">Reschedule</button>&nbsp;&nbsp;<button class="add-1">Cancel</button></p></center></td>
                    </tr>

                    <tr align="left">
                      <td><p class="mt-3">8479</p></td>
                      <td><p class="text-left pay2"><img src="../assets/images/calendar2.png"> 30/09/2021<br><img src="../assets/images/layer-14.png"> 12:30 - 15:30</p></td>
                      <td><div class="d-flex">
                              <div><p class="cap-body mr-1"><img src="../assets/images/cap.png"></p></div>
                              <div><p class="text-left mt-2"><b>Sandip Patel</b>
                                <div class="d-flex"><div><img src="../assets/images/star1.png">
                                <img src="../assets/images/star1.png">
                                <img src="../assets/images/star1.png">
                                <img src="../assets/images/star1.png">
                                <img src="../assets/images/star2.png"></div><div style="padding-top:3px;">&nbsp; 4</div></div></p></div>
                          </div></td>
                      <td><p class="pay1 mt-3">75,00 &euro;</p></td>
                      <td><center><p><button class="remove-1 mt-2">Reschedule</button>&nbsp;&nbsp;<button class="add-1">Cancel</button></p></center></td>
                    </tr>
                  </tbody>
                </table>
              </div>

               <div style="width:1170px;"><p class="body-3-left">Show <select><option>10</option></select> entries Total Record: 2</p>
                 <p class="body-3-right"><button class="ri-1"><img src="../assets/images/first-page.png"></button>
                                         <button class="ri-2"><img src="../assets/images/keyboard-right-arrow-button-copy.png"></button>
                                         <button class="ri-3">1</button>
                                         <button class="ri-4"><img src="../assets/images/keyboard-right-arrow-button-copy.png"></button>
                                         <button class="ri-5"><img src="../assets/images/first-page.png"></button></p></div>
           </div>



           <div class="sub-body-2" id="history-body">
             <div style="width:1170px;"><p class="body-3-left"><b>Service History</b></p>
               <p class="body-3-right"><button class="exportbtn">Export</button></p></div>

               <div class="table-responsive">
								<table class="table border-collapse:collapse tabular-1">
									<thead>
                    <tr align="left">
    									<th>Service Id</th>
    									<th>Service date</th>
    									<th>Service Provider</th>
    									<th>Payment</th>
                      <th class="th1">Status</th>
    									<th class="th1">Rate SP</th>
							      </tr>
                  </thead>

                  <tbody>
                    <tr>
                      <td>8470</td>
                      <td><p class="text-left pay2"><img src="../assets/images/calendar2.png"> 30/09/2021<br><img src="../assets/images/layer-14.png"> 00:00 - 03:30</p></td>
                      <td></td>
                      <td><p class="pay1 mt-3">87,50 &euro;</p></td>
                      <td class="th1"><button class="cancelbtn mt-3">Cancelled</button></td>
                      <td class="th1"><button data-target="#ratemodal" data-toggle="modal" class="rate mt-2">Rate SP</button></td>
                    </tr>

                    <tr>
                      <td>8453</td>
                      <td><p class="text-left pay2"><img src="../assets/images/calendar2.png"> 30/03/2021<br><img src="../assets/images/layer-14.png"> 11:00 - 14:00</p></td>
                      <td><div class="d-flex">
                              <div><p class="cap-body mr-1"><img src="../assets/images/cap.png"></p></div>
                              <div><p class="text-left mt-2"><b>Sandip Patel</b>
                                <div class="d-flex"><div><img src="../assets/images/star1.png">
                                <img src="../assets/images/star1.png">
                                <img src="../assets/images/star1.png">
                                <img src="../assets/images/star1.png">
                                <img src="../assets/images/star2.png"></div><div style="padding-top:3px;">&nbsp; 4</div></div></p></div>
                          </div></td>
                      <td><p class="pay1 mt-3">75,00 &euro;</p></td>
                      <td class="th1"><button class="cancelbtn mt-3">Cancelled</button></td>
                      <td class="th1"><button data-target="#ratemodal" data-toggle="modal" class="rate mt-2">Rate SP</button></td>
                    </tr>

                    <tr>
                      <td>8438</td>
                      <td><p class="text-left pay2"><img src="../assets/images/calendar2.png"> 25/12/2019<br><img src="../assets/images/layer-14.png"> 08:00 - 11:00</p></td>
                      <td></td>
                      <td><p class="pay1 mt-3">75,00 &euro;</p></td>
                      <td class="th1"><button class="refund mt-3">Refunded</button></td>
                      <td class="th1"><button data-target="#ratemodal" data-toggle="modal" class="rate mt-2">Rate SP</button></td>
                    </tr>

                    <tr>
                      <td>8429</td>
                      <td><p class="text-left pay2"><img src="../assets/images/calendar2.png"> 24/12/2019<br><img src="../assets/images/layer-14.png"> 08:00 - 11:00</p></td>
                      <td></td>
                      <td><p class="pay1 mt-3">67,50 &euro;</p></td>
                      <td class="th1"><button class="cancelbtn mt-3">Cancelled</button></td>
                      <td class="th1"><button data-target="#ratemodal" data-toggle="modal" class="rate mt-2">Rate SP</button></td>
                    </tr>

                    <tr>
                      <td>8425</td>
                      <td><p class="text-left pay2"><img src="../assets/images/calendar2.png"> 11/12/2019<br><img src="../assets/images/layer-14.png"> 08:30 - 11:30</p></td>
                      <td><div class="d-flex">
                              <div><p class="cap-body mr-1"><img src="../assets/images/cap.png"></p></div>
                              <div><p class="text-left mt-2"><b>Sandip Patel</b>
                                <div class="d-flex"><div><img src="../assets/images/star1.png">
                                <img src="../assets/images/star1.png">
                                <img src="../assets/images/star1.png">
                                <img src="../assets/images/star1.png">
                                <img src="../assets/images/star2.png"></div><div style="padding-top:3px;">&nbsp; 4</div></div></p></div>
                          </div></td>
                      <td><p class="pay1 mt-3">75,00 &euro;</p></td>
                      <td class="th1"><button class="cancelbtn mt-3">Cancelled</button></td>
                      <td class="th1"><button data-target="#ratemodal" data-toggle="modal" class="rate mt-2">Rate SP</button></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div style="width:1170px;"><p class="body-3-left">Show <select><option>5</option></select> entries Total Record: 55</p>
                <p class="body-3-right"><button class="ri-1"><img src="../assets/images/first-page.png"></button>
                                        <button class="ri-2"><img src="../assets/images/keyboard-right-arrow-button-copy.png"></button>
                                        <button class="ri-3">1</button>
                                        <button class="ri-2">2</button>
                                        <button class="ri-2">3</button>
                                        <button class="ri-2">4</button>
                                        <button class="ri-4"><img src="../assets/images/keyboard-right-arrow-button-copy.png"></button>
                                        <button class="ri-5"><img src="../assets/images/first-page.png"></button></p></div>
           </div>



           <div class="sub-body-3" id="fav-pros">
             <div class="d-flex ">
               <div class="box-1 justify-content-center">
                 <p class="p-body"><img src="../assets/images/cap.png"></p>
                 <center><p class="p-body1">Kavan Patel
                   <div class="d-flex justify-content-center">
                             <div><img src="../assets/images/star2.png">
                             <img src="../assets/images/star2.png">
                             <img src="../assets/images/star2.png">
                             <img src="../assets/images/star2.png">
                             <img src="../assets/images/star2.png"></div> &nbsp;&nbsp;<div style="padding-top:3px;">0</div></div>
                           </p></center>
                  <center><p>1 cleanings</p></center>
                  <center><p><button class="remove">Remove</button>&nbsp;&nbsp;<button class="add">Block</button></p></center>
               </div>

               <div class="box-2 justify-content-center ml-5">
                 <p class="p-body"><img src="../assets/images/cap.png"></p>
                 <center><p class="p-body1">Sandip Patel
                   <div class="d-flex justify-content-center">
                             <div><img src="../assets/images/star1.png">
                             <img src="../assets/images/star1.png">
                             <img src="../assets/images/star1.png">
                             <img src="../assets/images/star1.png">
                             <img src="../assets/images/star2.png"> </div> &nbsp;&nbsp;<div style="padding-top:3px;">4</div></div>
                           </p></center>
                <center><p>16 cleanings</p></center>
                <center><p><button class="remove">Remove</button>&nbsp;&nbsp;<button class="add">Block</button></p></center>
               </div>
             </div>

             <div class="py-3" style="width:800px;"><p class="body-3-left">Show <select><option>10</option></select> entries Total Record: 2</p>
               <p class="body-3-right"><button class="ri-1"><img src="../assets/images/first-page.png"></button>
                                       <button class="ri-2"><img src="../assets/images/keyboard-right-arrow-button-copy.png"></button>
                                       <button class="ri-3">1</button>
                                       <button class="ri-4"><img src="../assets/images/keyboard-right-arrow-button-copy.png"></button>
                                       <button class="ri-5"><img src="../assets/images/first-page.png"></button></p></div>

           </div>


           <div class="sub-body-4" id="second-body">
             <div class="second-body-div d-flex flex-nowrap">
               <button class="details-btn" id="details-btn-1" onclick="butt1()">My Details</button>
               <button class="address-btn" id="address-btn-2" onclick="butt2()">My Addresses</button>
               <button class="password-btn" id="password-btn-3" onclick="butt3()">Change Password</button>
             </div>

             <div class="mt-3">
             <div class="details" id="details-body">
               <form method="post" action="">
                 <div class="row">
                   <div class="col-md-4 text-left">
                     <label class="formlab">First Name</label>
                     <input type="text" placeholder="First Name" class="form-control">
                   </div>
                   <div class="col-md-4 text-left">
                     <label class="formlab">Last Name</label>
                     <input type="text" placeholder="Last Name" class="form-control">
                   </div>
                   <div class="col-md-4 text-left">
                     <label class="formlab">Email address</label>
                     <input type="text" placeholder="Email" class="form-control">
                   </div>
                 </div>

                 <div class="row">
                   <div class="col-md-4 text-left">
                     <label class="formlab">Mobile Number</label>
                     <div class="input-group-prepend">
                       <div class="input-group-text">+49</div>
                     <input type="text" minlength="10" maxlength="10" placeholder="Mobile number" class="form-control">
                     </div>
                   </div>
                   <div class="col-md-5 text-left">
                     <label class="formlab">Date of Birth</label>
                     <div class="d-flex">
                     <select class="form-control"><option>01</option>
                                                  <option>02</option>
                                                  <option>03</option>
                                                  <option>04</option>
                                                  <option>05</option>
                                                  <option>06</option>
                                                  <option>07</option>
                                                  <option>08</option>
                                                  <option>09</option>
                                                  <option>10</option>
                                                  <option>11</option>
                                                  <option>12</option></select>

                    <select class="form-control"><option>January</option>
                                                 <option>February</option>
                                                 <option>March</option>
                                                 <option>April</option>
                                                 <option>May</option>
                                                 <option>June</option>
                                                 <option>July</option>
                                                 <option>August</option>
                                                 <option>September</option>
                                                 <option>October</option>
                                                 <option>November</option>
                                                 <option>December</option></select>

                     <select class="form-control"><option>1980</option><option>1981</option><option>1982</option>
                                                  <option>1983</option><option>1984</option><option>1985</option>
                                                  <option>1986</option><option>1987</option><option>1988</option>
                                                  <option>1989</option><option>1990</option><option>1991</option>
                                                  <option>1992</option><option>1993</option><option>1994</option>
                                                  <option>1995</option><option>1996</option><option>1997</option>
                                                  <option>1998</option><option>1999</option><option>2000</option>
                                                  <option>2001</option><option>2002</option><option>2003</option>
                                                  <option>2004</option><option>2005</option><option>2006</option></select>
                    </div>
                   </div>
                 </div>

                 <br>
                 <hr>

                 <div class="row mt-0">
                   <div class="col-md-3 text-left">
                     <label class="formlab">Preferred Language</label>
                     <select class="form-control"><option>English</option><option>Hindi</option><option>Gujarati</option>
                                                  <option>Marathi</option><option>Tamil</option><option>Urdu</option></select>
                   </div>
                 </div>

                 <div class="row">
                   <div class="col-md-2">
                     <button type="submit" class="cpbut">Save</button>
                   </div>
                 </div>
               </form>
             </div>



             <div class="address" id="address-body">
               <div class="table-responsive">
								<table class="table border-collapse:collapse tabular-1">
									<thead>
                    <tr align="left">
    									<th>Addresses</th>
							      </tr>
                  </thead>

                  <tbody>
                    <tr><td></td></tr>
                  </tbody>
                </table>
              </div>

              <div class="row">
                <div class="col-md-4">
                  <button type="submit" data-target="#editaddress" data-toggle="modal" class="cpbut-2">Add New Address</button>
                </div>
              </div>
             </div>



             <div class="password" id="password-body">
               <form method="post" action="">
                 <div class="row">
                   <div class="col-md-6 text-left">
                     <label class="formlab">Old Password</label>
                     <input type="password" placeholder="Current Password" class="form-control">
                   </div>
                 </div>

                 <div class="row">
                   <div class="col-md-6 text-left">
                     <label class="formlab">New Password</label>
                     <input type="password" placeholder="Password" class="form-control">
                   </div>
                 </div>

                 <div class="row">
                   <div class="col-md-6 text-left">
                     <label class="formlab">Confirm Password</label>
                     <input type="password" placeholder="Confirm Password" class="form-control">
                   </div>
                 </div>

                 <div class="row">
                   <div class="col-md-2">
                     <button type="submit" class="cpbut">Save</button>
                   </div>
                 </div>
               </form>
             </div>
           </div>

           </div>

         </div>

       </div>




       <div class="container cont_3">
 				<div class="row">
 					<div class="col-md-1 offset-md-1"><img class="logo_1" src="../assets/images/footer-logo.png"></div>

 					<div class="col-md-6  offset-md-1">
 						<ul>
 						  <li><a href="http://localhost/HelperLand/homepg.php">HOME</a></li>
 						  <li><a href="http://localhost/helperland/View/about.php">ABOUT</a></li>
 						  <li><a href="">TESTIMONIALS</a></li>
 						  <li><a href="http://localhost/helperland/View/faqs.php">FAQS</a></li>
 						  <li><a href="http://localhost/helperland/view/insurance-policy.php">INSURANCE COVERAGE</a></li>
 						  <li><a href="http://localhost/helperland/view/impressum.php">IMPRESSUM</a></li>
 						</ul>
 					</div>

 					<div class="col-md-1  offset-md-1"><img class="logo_2" src="../assets/images/ic-facebook.png"><img class="logo_2" src="../assets/images/ic-instagram.png"></div>
 				</div>

        <center><hr color="#3d3c3a" width="1250px"></center>

        <br>
 				<p class="copyright">&copy;2018 Helperland All rights reserved. Terms and Conditions &nbsp; | &nbsp; Privacy Policy</p>
 			</div>
     </div>

     <script src="../assets/js/script.js"></script>


     <div class="container">
 			<div class="modal fade" id="ratemodal">
 				<div class="modal-dialog modal-dialog-centered">
 					<div class="modal-content">
 						<div class="modal-header">
              <div class="d-flex">
                      <div><p class="cap-body mr-1 mt-2"><img src="../assets/images/cap.png"></p></div>
                      <div><p class="text-left mt-2"><b>Sandip Patel</b>
                        <div class="d-flex"><div><img src="../assets/images/star1.png">
                        <img src="../assets/images/star1.png">
                        <img src="../assets/images/star1.png">
                        <img src="../assets/images/star1.png">
                        <img src="../assets/images/star2.png"></div><div style="padding-top:3px;">&nbsp; 4</div></div></p></div>
                  </div>
 							<button type="button" class="close" data-dismiss="modal"> &times; </button>
 						</div>

 						<div class="modal-body">
 							<b><font size=4>Rate your service provider</font></b>
              <hr>
              <div class="d-flex">
                <p>On time arrival</p>
                <p class="ml-3"><img src="../assets/images/star1.png">
                <img src="../assets/images/star1.png">
                <img src="../assets/images/star2.png">
                <img src="../assets/images/star2.png">
                <img src="../assets/images/star2.png"></p></div>

                <div class="d-flex">
                  <p>Friendly</p>
                  <p class="ml-3"><img src="../assets/images/star1.png">
                  <img src="../assets/images/star1.png">
                  <img src="../assets/images/star1.png">
                  <img src="../assets/images/star2.png">
                  <img src="../assets/images/star2.png"></p></div>

                  <div class="d-flex">
                    <p>Quality of service</p>
                    <p class="ml-3"><img src="../assets/images/star1.png">
                    <img src="../assets/images/star1.png">
                    <img src="../assets/images/star1.png">
                    <img src="../assets/images/star1.png">
                    <img src="../assets/images/star2.png"></p></div>

              Feedback on service Provider
              <textarea class="form-control"rows="2"></textarea>
              <button class="exportbtn mt-3">Submit</button>
 						</div>
 					</div>
 				</div>
 			</div>
 		</div>

    <div class="container">
     <div class="modal fade" id="ratemodal-1">
       <div class="modal-dialog modal-dialog-centered">
         <div class="modal-content">

           <div class="modal-body">
             Service Details <button type="button" class="close" data-dismiss="modal"> &times; </button><br>
             <font size=4 color="#646464"><b>05/10/2021 08:00 - 11:30</b></font><br>
             Duration: 3.5 Hrs
             <hr>
             Service Id: 8485<br>
             Extras: Inside cabinets
             <div class=""><p class="modl">Net Amount:</p><p class="modc">87,50 &euro;</p></div><br>
             <hr>
             <b>Service Address</b>: Koenigstrasse 112, 99897 Tambach-Dietharz<br>
             <b>Billing Address</b>: Same as cleaning address<br>
             <b>Phone</b>: +49 9955648797<br>
             <b>Email</b>: patel2128@gmail.com
             <hr>
             <b>Comments</b>
             <div class="d-flex"><p class="cross">&times;</p> I don't have pets at home</div>
             <hr>
             <p><button class="remove-2 mt-2" data-target="#reschedulemodal" data-toggle="modal" data-dismiss="modal">Reschedule</button>&nbsp;&nbsp;<button class="add-2" data-dismiss="modal" data-target="#cancelmodal" data-toggle="modal">Cancel</button></p>
           </div>
         </div>
       </div>
     </div>
   </div>


   <div class="container">
     <div class="modal fade" id="reschedulemodal">
       <div class="modal-dialog modal-dialog-centered">
         <div class="modal-content">
           <div class="modal-header">
             <h3 class="text-center text-gray">Reschedule Service Request</h3>
             <button type="button" class="close" data-dismiss="modal"> &times; </button>
           </div>

           <div class="modal-body">
             Select New Date & time
             <div class="d-flex">
               <input class="form-control" type="date"><select class="form-control"><option>1:00</option>
                                                                                     <option>2:00</option>
                                                                                     <option>3:00</option>
                                                                                     <option>4:00</option>
                                                                                     <option>5:00</option>
                                                                                     <option>6:00</option>
                                                                                     <option>7:00</option>
                                                                                     <option>8:00</option>
                                                                                     <option>9:00</option>
                                                                                     <option>10:00</option>
                                                                                     <option>11:00</option>
                                                                                     <option>12:00</option></select>
             </div>
             <center><button class="updatebtn mt-3">Update</button></center>
           </div>
         </div>
       </div>
     </div>
   </div>

   <div class="container">
     <div class="modal fade" id="cancelmodal">
       <div class="modal-dialog modal-dialog-centered">
         <div class="modal-content">
           <div class="modal-header">
             <h3 class="text-center text-gray">Cancel Service Request</h3>
             <button type="button" class="close" data-dismiss="modal"> &times; </button>
           </div>

           <div class="modal-body">
            Why you want to cancel the service request?
            <textarea class="form-control"rows="3"></textarea>

             <center><button class="updatebtn mt-3">Cancel Now</button></center>
           </div>
         </div>
       </div>
     </div>
   </div>


   <div class="container">
     <div class="modal fade" id="editaddress">
       <div class="modal-dialog modal-dialog-centered">
         <div class="modal-content">
           <div class="modal-header">
             <h3 class="text-center text-gray">Edit Address</h3>
             <button type="button" class="close" data-dismiss="modal"> &times; </button>
           </div>

           <div class="modal-body">
             <form action="" method="post">
               <div class="form-group">
                 <div class="row">
                   <div class="col-md-6 text-left">
                     <label class="formlab">Steet Name</label>
                     <input type="text" placeholder="Street name" class="form-control">
                   </div>

                   <div class="col-md-6 text-left">
                     <label class="formlab">House Number</label>
                     <input type="number" placeholder="House number" class="form-control">
                   </div>
                 </div>

                 <div class="row">
                   <div class="col-md-6 text-left">
                     <label class="formlab">Postal Code</label>
                     <input type="number" placeholder="Postal code" class="form-control">
                   </div>

                   <div class="col-md-6 text-left">
                     <label class="formlab">City</label>
                     <input type="text" placeholder="City" class="form-control">
                   </div>
                 </div>

                 <div class="row">
                   <div class="col-md-6 text-left">
                     <label class="formlab">Mobile Number</label>
                     <div class="input-group-prepend">
                       <div class="input-group-text">+49</div>
                     <input type="text" minlength="10" maxlength="10" placeholder="Mobile number" class="form-control">
                     </div>
                   </div>
                 </div>
                 <center><button class="updatebtn mt-3">Edit</button></center>
               </div>
             </form>
           </div>
         </div>
       </div>
     </div>
   </div>


</body>

</html>
