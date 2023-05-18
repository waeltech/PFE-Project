<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Responsive Admin Dashboard</title>

   <!-- ========== Styles =========== -->
   <link rel="stylesheet" href="assets/css/style.css">

   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
   
   <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">


</head>
<body>
   <!-- ========= Navigation Menu ============ -->
    @include('dashboardLayout.navdash')

    {{-- <!-- ================= Main ================== -->

   <div class="main">
       <div class="topbar">
           <div class="toggle">
               <ion-icon name="menu-outline"></ion-icon> 
           </div>
           <div class="search">
               <label >
                   <input type="text" placeholder="Search here">
                   <ion-icon name="search-outline"></ion-icon>
               </label>    
           </div>
           <div class="user">
               <img src="assets/imgs/customer01.jpg" >
           </div>
       </div>

   <!-- ============= Cards ================== -->
       <div class="cardbox">
           <div class="card">
               <div>
                   <div class="numbers">1504</div>
                   <div class="cardName">Daily views</div>
               </div>
               <div class="iconBx">
                   <ion-icon name="eye-outline"></ion-icon>
               </div>
           </div>

       
           <div class="card">
               <div>
                   <div class="numbers">88</div>
                   <div class="cardName">Sales</div>
               </div>
               <div class="iconBx">
                   <ion-icon name="cart-outline"></ion-icon>
               </div>
           </div>


       
           <div class="card">
               <div>
                   <div class="numbers">1504</div>
                   <div class="cardName">Comments</div>
               </div>
               <div class="iconBx">
                   <ion-icon name="chatbubbles-outline"></ion-icon>
               </div>
           </div>

       
           <div class="card">
               <div>
                   <div class="numbers">$7842</div>
                   <div class="cardName">Earning</div>
               </div>
               <div class="iconBx">
                   <ion-icon name="cash-outline"></ion-icon>
               </div>
           </div>
       </div>

      <!-- ============ Order Details List ============  -->
      <div class="details">
       <div class="recentOrders">
           <div class ="cardHeader">
               <h2>Recent Orders</h2>
               <a href="#" class="btn">Voir tous</a>
           </div>


           <table>
               <thead>
                   <tr>
                       <td>Name</td>
                       <td>Price</td>
                       <td>Payment</td>
                       <td>Status</td>
                   </tr>
               </thead>

               <tbody>
                   <tr>
                       <td>Star Refrigerator</td>
                       <td>$1200</td>
                       <td>Paid</td>
                       <td><span class="status payed">Payé</span></td>
                   </tr>

                   <tr>
                       <td>Dell Laptop</td>
                       <td>$110</td>
                       <td>Due</td>
                       <td><span class="status inProgress">En cours</span></td>
                   </tr>

                   <tr>
                       <td>Addidas Shoes</td>
                       <td>$620</td>
                       <td>Due</td>
                       <td><span class="status inProgress">En cours</span></td>
                   </tr>

                   <tr>
                       <td>Star Refrigerator</td>
                       <td>$1200</td>
                       <td>Paid</td>
                       <td><span class="status payed">Payé</span></td>
                   </tr>

                   <tr>
                       <td>Dell Laptop</td>
                       <td>$110</td>
                       <td>Due</td>
                       <td><span class="status inProgress">En cours</span></td>
                   </tr>

                   <tr>
                       <td>Addidas Shoes</td>
                       <td>$620</td>
                       <td>Due</td>
                       <td><span class="status inProgress">En cours</span></td>
                   </tr>
               </tbody>
           </table>
       
       </div>
       <!-- ================= New Customers ================ -->
       <div class="recentCustomers">
           <div class="cardHeader">
               <h2>Recent Customers</h2>
           </div>

           <table>
               <tr>
                   <td width="60px">
                       <div class="imgBx"><img src="assets/imgs/customer02.jpg" alt=""></div>
                   </td>
                   <td>
                       <h4>David <br> <span>Italy</span></h4>
                   </td>
               </tr>

               <tr>
                   <td width="60px">
                       <div class="imgBx"><img src="assets/imgs/customer01.jpg" alt=""></div>
                   </td>
                   <td>
                       <h4>Amit <br> <span>India</span></h4>
                   </td>
               </tr>

               <tr>
                   <td width="60px">
                       <div class="imgBx"><img src="assets/imgs/customer02.jpg" alt=""></div>
                   </td>
                   <td>
                       <h4>David <br> <span>Italy</span></h4>
                   </td>
               </tr>

               <tr>
                   <td width="60px">
                       <div class="imgBx"><img src="assets/imgs/customer01.jpg" alt=""></div>
                   </td>
                   <td>
                       <h4>Amit <br> <span>India</span></h4>
                   </td>
               </tr>

               <tr>
                   <td width="60px">
                       <div class="imgBx"><img src="assets/imgs/customer02.jpg" alt=""></div>
                   </td>
                   <td>
                       <h4>David <br> <span>Italy</span></h4>
                   </td>
               </tr>

               <tr>
                   <td width="60px">
                       <div class="imgBx"><img src="assets/imgs/customer01.jpg" alt=""></div>
                   </td>
                   <td>
                       <h4>Amit <br> <span>India</span></h4>
                   </td>
               </tr>

               <tr>
                   <td width="60px">
                       <div class="imgBx"><img src="assets/imgs/customer01.jpg" alt=""></div>
                   </td>
                   <td>
                       <h4>David <br> <span>Italy</span></h4>
                   </td>
               </tr>

               <tr>
                   <td width="60px">
                       <div class="imgBx"><img src="assets/imgs/customer02.jpg" alt=""></div>
                   </td>
                   <td>
                       <h4>Amit <br> <span>India</span></h4>
                   </td>
               </tr>
           </table>
       </div>
       </div>
   </div> --}}
   
   <!-- =============  Scripts    ============= -->
   <script src="assets/js/main.js"></script>



 
</body>
</html> 
