<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>  
 <!---font Link---->
 <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;700&display=swap" rel="stylesheet">
    <!---font link end---->  
</head>
  <body>

  <nav class="navbar navbar-expand-md  fixed-top" id="navbar">
  <!-- Brand -->
  <a class="navbar-brand" href="#" id="logo"><img src="images/logo.jpeg" alt="" width="80px">Online Shopping Cart</a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
  <span><img src="images/menulogo.png" alt="" width="30px"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="d.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="item.php">Item</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact</a>
      </li>
    </ul>
  </div>
  <div class="icons">
  <a href="logout.php">Logout</a>
     <a href="login.php"><img src="images/user.png" alt="" width="20px"></a>  
  </div>
</nav>

<!-- navbar end -->


  <!-- Modal -->
  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content bg-info text-white">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Your Order</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <hr class="">
            <div class="d-flex justify-content-between">
           <p class="mb-2">price</p>
           <p class="mb-2">$80.00</p>
         </div>
            <div class="d-flex justify-content-between">
           <p class="mb-2">Shipping</p>
           <p class="mb-2">$120.00</p>
         </div>
            <div class="d-flex justify-content-between mb-4">
           <p class="mb-2">Total(Incl. taxes)</p>
           <p class="mb-2">$200.00</p>
         </div>
              </div>

              <h4 class="ml-3">Your order is received.</h4>
            <div class="modal-footer">
                <a href="essential.html"><button type="button" class="btn btn-outline-light">Okay</button>
                </a>
        </div>
      </div>
    </div>
  </div>

   <!-- Footer -->
   <footer class="text-center text-lg-start mt-3 text-dark"style="background-color: #ffffff">
      <!-- Section: Social media -->
      <section class="d-flex justify-content-between p-4 text-white ftxt">
        <!-- Left -->
        <div>
          <center><b>Get connected with us on social networks:</b></center>
        </div>
        <!-- Left -->
      </section>
      <!-- Section: Social media -->

      <!-- Section: Links  -->
      <section class="">
        <div class="container text-center text-md-start mt-5">
          <!-- Grid row -->
          <div class="row mt-3">
            <!-- Grid column -->
            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
              <!-- Content -->
              <h6 class="text-uppercase fw-bold "><b>Shopping cart</b></h6>
              <hr class="mb-4 mt-0 d-inline-block mx-auto  ftxt"  style="width: 60px;  height: 2px"
                back />
              <p>
                Our motto is water off a duck's back.Meaning:don't let negativity weigh you down,perpetuate positive thinking.
              </p>
              </div>
    
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
              <!-- Links -->
              <h6 class="text-uppercase fw-bold"><b>Where We are</b></h6>
              <hr class="mb-4 mt-0 d-inline-block mx-auto ftxt"
                style="width: 60px; height: 2px" />
              <p>
                <a href="#!" class="text-dark">Karachi</a>
              </p>
              <p>
                <a href="#!" class="text-dark">Lahore</a>
              </p>
              <p>
                <a href="#!" class="text-dark">IslamAbad</a>
              </p>
              <p>
                <a href="#!" class="text-dark">Quetta</a>
              </p>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
              <!-- Links -->
              <h6 class="text-uppercase fw-bold bg.dark"><b>Useful links</b></h6>
              <hr class="mb-4 mt-0 d-inline-block mx-auto ftxt" 
                style="width: 60px; height: 2px" />
              <p>
                <a href="#!" class="text-dark">Your Account</a>
              </p>
              <p>
                <a href="#!" class="text-dark">Become an Affiliate</a>
              </p>
              <p>
                <a href="#!" class="text-dark">Shipping Rates</a>
              </p>
              <p>
                <a href="#!" class="text-dark">Help</a>
              </p>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
              <!-- Links -->
              <h6 class="text-uppercase fw-bold" id="cont"><b>Contact</b></h6>
              <hr class="mb-4 mt-0 d-inline-block mx-auto ftxt"
                style="width: 60px; height: 2px" />
              <p><i class="fas fa-home mr-5 mt-2"></i> B13 Gulshan-e-Iqbal, <br> Karachi City</p>
              <p><i class="fas fa-envelope mr-5"></i>Shopping cart.pk@gmail.com</p>
              <p><i class="fas fa-phone mr-5"></i> + 92 337 8071580</p>
              <p><i class="fas fa-print mr-5"></i> + 92 337 8071580</p>

            </div>
            <!-- Grid column -->
          </div>
          <!-- Grid row -->
        </div>
      </section>
      <!-- Section: Links  -->

      <!-- Copyright -->
      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
        © 2020 Copyright:
        <a class="text-dark" href="#">Shopping cart.com</a>
      
    </footer>

    <!-- Footer End-->



    <style>

 /* navbar */
 #navbar{
     /* fallback for old browsers */
background: #fccb90;

/* Chrome 10-25, Safari 5.1-6 */
background: -webkit-linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background: linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);


@media (min-width: 768px) {
.gradient-form {
height: 100vh !important;
}
}
@media (min-width: 769px) {
.gradient-custom-2 {
border-top-right-radius: .3rem;
border-bottom-right-radius: .3rem;
}}
    padding-left: 20px;
    font-weight: bold;
    height:100px;
}
#logo{
    font-size: 25px;
    color: white;
}
#logo img{
    margin-bottom: 6px;
}
.navbar-nav{
    margin-left: 20px;
}
.nav-link{
    color: white;
    font-weight: bold;
    text-shadow: 1px 1px 1px black;
    margin-left: 20px;
    transition: 0.5s ease;
}
.nav-link:hover{
    background-color:black;
    color:dimgray;
    font-weight: bold;
    border-radius: 40%;

}
.icons{
    margin-left: 30px;
}
.icons img{
    margin-left: 10px;
    transition: 0.5s ease;
    cursor: pointer;
}
.icons img:hover{
    transform: translateY(-5px);
}   
@media screen and (max-width:330px){
    
}
/* navbar end */
.btn1 button:hover{
    font-weight: bold;
    color:#C89021;
    background-color:transparent;
    border:#C89021  2px solid;}	
    .search-hover {
      background: url(http://www.iconsdb.com/icons/preview/white/search-12-xxl.png) no-repeat left;
      
      outline: none;
      background-size: 22px;
      background-position: 13px;
     cursor: pointer;
      width: 50px;
      height: 50px;
      padding: 25px;
      transition: all .5s;
  }
  .search-hover:hover{
      width: 300px;
      padding-left: 50px;
  }
  .main-contant-section{
   background-size: cover;
   width: 100%;
   height: 700px;
    background-image:url(images/contactbg.jpg);
}
.bg-theme{
       /* fallback for old browsers */
background: #fccb90;

/* Chrome 10-25, Safari 5.1-6 */
background: -webkit-linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background: linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);


@media (min-width: 768px) {
.gradient-form {
height: 100vh !important;
}
}
@media (min-width: 769px) {
.gradient-custom-2 {
border-top-right-radius: .3rem;
border-bottom-right-radius: .3rem;
}}
     !important;
}
.cardd{
    margin-top:150px;
}    
.card-contact{
    margin-top:100px;
    margin-left: -140px;
}
.card-contact h1{
    color: white;
    font-size: 30px;
    position: relative;
    margin-top: 10px;
    margin-bottom: 120px;
}
.card-contact h1::before{
    content: '';
    height: 3px;
    width:80px;
    background-color: white;
    position: absolute;
    bottom: -10px;
    
}
.icon-part{
    
    height: 40px;
    width: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 24px;
    border-radius: 50%;
}
.btn{
    margin-top: 20px;
    color:white;
       /* fallback for old browsers */
background: #fccb90;

/* Chrome 10-25, Safari 5.1-6 */
background: -webkit-linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background: linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);


@media (min-width: 768px) {
.gradient-form {
height: 100vh !important;
}
}
@media (min-width: 769px) {
.gradient-custom-2 {
border-top-right-radius: .3rem;
border-bottom-right-radius: .3rem;
}}
}
  footer {
  background:black;
  color: #aaa;
  margin-top: -20px;
  height: 30%;
}
.ftxt{
        /* fallback for old browsers */
background: #fccb90;

/* Chrome 10-25, Safari 5.1-6 */
background: -webkit-linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background: linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);


@media (min-width: 768px) {
.gradient-form {
height: 100vh !important;
}
}
@media (min-width: 769px) {
.gradient-custom-2 {
border-top-right-radius: .3rem;
border-bottom-right-radius: .3rem;
}}
}

</style>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>