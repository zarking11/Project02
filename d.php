<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
        <a class="nav-link" href="home.html">Home</a>
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
      <a href="checkout.php"><img src="images/add.png" alt="" width="24px"></a>
      
  </div>
</nav>

<!-- navbar end -->

<div class="home">
    <div class="content">
       <h5>Best items</h5>
        <h2>Express delivery</h2> 	
        <a href="item.php" class="btn"><button type="button">Order Now </button></a>
    </div>
  </div>
</header>
<!--header end-->

<!--chat popup-->
<button class="open-button" onclick="openForm()">Chat</button>

<div class="chat-popup" id="myForm">
  <form action="#" class="form-container">
    <h1>Chat</h1>

    <label for="msg"><b>Message</b></label>
    <textarea placeholder="Type message.." name="msg" required></textarea>

    <button type="submit" class="btn">Send</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>>

<!--chat pop end-->

<!--home section-->
<div class="container" id="about">
  <h1>OUR PRODUCTS</h1>
  <div class="row a">
    <div class="col">
       <div class="d-flex align-item-center">
        <img src="images/img1.jfif"class="rounded-circle"alt=""height="120px"width="120px" /></div>
    </div>
    <div class="col">
       <div class="d-flex align-item-center">
         <img src="images/img2.jpg"class="rounded-circle"alt=""height="120px"width="120px" /></div>
    </div>
    <div class="col">
       <div class="d-flex align-item-center">
        <img src="images/img3.jpg"class="rounded-circle"alt=""height="120px"width="120px" /></div>
    </div>
    <div class="col">
       <div class="d-flex align-item-center">
        <img src="images/img4.jpg"class="rounded-circle"alt=""height="120px"width="120px" /></div>
    </div>
    <div class="col">
       <div class="d-flex align-item-center">
        <img src="images/img5.jfif"class="rounded-circle"alt=""height="120px"width="120px" /></div>
    </div>
    <div class="col">
       <div class="d-flex align-item-center">
        <img src="images/img6.jfif"class="rounded-circle"alt=""height="120px"width="120px" /></div>
    </div>
  
 </div>
 <div class="a2">
<a href="item.php" class="btn1"><button type="button" >View All items</button></a>  
</div>
</div>
<!--home section end -->
<!--last banner-->
<div class="container">
  <div class="row">
  <div class="col-lg-6 col-md-6">
    <div class="img">
  <img src="images/banner.png" width="100%" height="500px">
</div>
    </div>
    <div class="col-lg-6 col-md-6">

        <!-- Pricing Start -->
        <div class="price">
            <div class="container">
                <div class="section-header text-center">
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="price-item">
                            <div class="price-img">
                                <img src="images/pens.jfif" alt="Image">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="price-item">
                            <div class="price-img">
                                <img src="images/pens2.jfif" alt="Image">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="price-item">
                            <div class="price-img">
                                <img src="images/pens3.jpg" alt="Image">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="price-item">
                            <div class="price-img">
                                <img src="images/pens3.jfif" alt="Image">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="price-item">
                            <div class="price-img">
                                <img src="images/doll1.jfif" alt="Image">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="price-item">
                            <div class="price-img">
                                <img src="images/doll2.jpeg" alt="Image">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="price-item">
                            <div class="price-img">
                                <img src="images/doll3" alt="Image">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="price-item">
                            <div class="price-img">
                                <img src="images/doll4.jfif" alt="Image">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="price-item">
                            <div class="price-img">
                                <img src="images/ar1" alt="Image">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="price-item">
                            <div class="price-img">
                                <img src="images/ar2.jpg" alt="Image">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="price-item">
                            <div class="price-img">
                                <img src="images/ar3.jfif" alt="Image">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="price-item">
                            <div class="price-img">
                                <img src="images/ar4" alt="Image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Pricing End -->
    </div> 

 
</div>
</div>
</div>
<!--last banner end-->
<!--Footer start-->
<div>
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
              Our motto is water off a duck's back.Meaning:don't let negativity weigh you down,perpetuate positive thinking.              </p>
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

*{
	margin:0px;
	padding:0px;
	box-sizing:border-box;
	font-family: 'Ubuntu', sans-serif;}
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

.home{
         position: relative;  	
        width:100%;
        height:700px;
        background-image:url(images/header1.jpg);
        background-size:cover;
        background-position:center;
        background-repeat:no-repeat;
        transition:5s;
		
         
        animation-name:animated;
        animation-direction:alternate-reserve;
        animation-duration:20s;
        animation-fill-mode:forward;
        animation-iteration-count:infinite;
        animation-play-state:running;
        animation-timing-function:ease-in-out; }
    @keyframes animated{
        0%{background-image:url(images/header1.jpg);}
            25%{background-image:url(images/header2.jpg);}
            50%{background-image:url(images/header3.jpg);}
            75%{background-image:url(images/header4.jpg);}
            100%{background-image:url(images/header5.jfif);}
            }

 .overlay{
    width: 100%;
    height:100%;
    color:white;
    display:flex;
    justify-content: center;
    
    
 }
.overlay h1{
    margin-top: 300px;
    font-weight: 1000;
    font-size: 90px;
    text-align: center;
  
}
.overlay h4{
    text-align: center;
    font-weight: bold;
    font-size: 60px;
    
}
.home {
	
	width:100%;
	display:flex;
    text-align: center;
	justify-content: center;
    flex-wrap: wrap;
	position:relative;
	z-index:0;}
.home .content{
	flex:1 1 400px;
	text-align: center;
    margin-top: 220px;}		
.content h5{
	
	color:white;
	font-weight:bold;
	font-size:90px;
	text-shadow:1px 1px 1px black;}
.content h2{
	color:white;
	font-size:30px;
	text-shadow:1px 1px 1px black;
    
}
.content .btn button{

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
	margin-top:10px;
	width:160px;
	height:50px;
    text-align: center;
	letter-spacing:1px;
	border:#C89021  2px solid;
    border-radius:30px;
	color:white;
	cursor:pointer;
    background-color:#C89021 ;
    
}
.content .btn button:hover{
	color: white;
	background-color:transparent;
	border:#C89021  2px solid;}	
.sec1 h5{
    text-align: center;
    margin-top: 50px;
    font-weight: bold;
    font-size: 50px;
    color:#C89021;
}
#about{
	margin-top:50px;
	}
#about h1{
	text-align:center;
	font-weight:bold;
	margin-top:20px;
	color:#C89021 ;
	border-bottom:2px solid #C89021 ;

}
.a{
        margin-top:40px;
        margin-left:30px;
        }
    
    
.info h5{
        margin-top:20px;
        margin-right:30px;
        text-align: center;
        }			
.info a{
        text-decoration:none;
        color:#C89021;}	
        .info a:hover{
text-decoration: none;
color: #C89021;
        }

  .btn1 button{
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
   
            margin-top:50px;
            width:50%;
            height:50px;
            text-align: center  ;
            text-align: center;
            justify-content: center;
            letter-spacing:1px;
            border:#C89021  2px solid;
            border-radius:30px;
            color:white;
            cursor:pointer;
            background-color:#C89021 ;
            font-weight: bold;
            
}
         .btn1 button:hover{
            font-weight: bold;
            color:#C89021;
            background-color:transparent;
            border:#C89021  2px solid;}	
            .search-hover {
              background: url(images/search.png) no-repeat left;
              
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
                 
 .a2{
   text-align: center; 
 }       
 /* Button used to open the chat form - fixed at the bottom of the page */
.open-button {
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
   
    color: white;
    padding: 16px 20px;
    border: none;
    cursor: pointer;
    z-index:1;
    position: fixed;
    bottom: 23px;
    right: 20px;
   width: 100px;
    height:auto;
    border-radius: 60%;
    display:inline-block;
  }
  .img{
    margin-top:-200px;
  }
  .price {
    position: relative;
    width: 100%;
    margin-top:-200px;
    padding: 15px 0 15px 0;
}

.price .price-item {
    position: relative;
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: flex-start;
    flex-direction: row;
    margin-bottom: 30px;
    background: rgba(29, 36, 52, .04);
    transition: .3s;
}

.price .price-item:hover {
    background: #D5B981;
}

.price .price-img {
    position: relative;
    width: 100px;
}

.price .price-img img {
    width: 100%;
}

.price .price-img::after {
    position: absolute;
    content: "";
    top: 10px;
    right: 10px;
    bottom: 10px;
    left: 10px;
    background: transparent;
    border: 1px solid #ffffff;
    z-index: 1;
}

.price .price-text {
    position: relative;
    padding: 0 15px;
    width: calc(100% - 100px);
    overflow: hidden;
}

.price .price-text h2 {
    position: relative;
    margin-bottom: 8px;
    font-size: 16px;
    font-weight: 600;
    white-space: nowrap;
}

.price .price-text h3 {
    position: relative;
    margin: 0;
    font-size: 16px;
    font-weight: 400;
    color: #333333;
}


/*******************************/
/*********** Team CSS **********/
/*******************************/
.team {
    position: relative;
    width: 100%;
    padding: 45px 0 15px 0;
}

.team .team-item {
    margin-bottom: 30px;
}

.team .team-img {
    position: relative;
}

.team .team-img::after {
    position: absolute;
    content: "";
    top: 15px;
    right: 15px;
    bottom: 15px;
    left: 15px;
    background: transparent;
    border: 1px solid #F6F6F7;
    transition: .3s;
    z-index: 1;
}

.team .team-img img {
    width: 100%;
}

.team .team-text {
    position: relative;
    margin: -60px 15px 0 15px;
    padding: 30px 15px;
    text-align: center;
    background: #F6F6F7;
    transition: .3s;
    z-index: 2;
}

.team .team-text h2 {
    font-size: 16px;
    font-weight: 600;
}

.team .team-text p {
    margin: 0;
    color: #333333;
}

.team .team-item:hover .team-text {
    background: #D5B981;
}

.team .team-item:hover .team-img::after {
    border-color: #D5B981;
}


  
  /* The popup chat - hidden by default */
  .chat-popup {
    display: none;
    position: fixed;
    bottom: 0;
    right: 15px;
    border: 3px solid #f1f1f1;
    z-index:1;
  }
  
/* Add styles to the form container */
.form-container {
    max-width: 300px;
    padding: 10px;
    background-color: white;
  }
  
  /* Full-width textarea */
  .form-container textarea {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    border: none;
    background: #f1f1f1;
    resize: none;
    min-height: 200px;
  }
  
  /* When the textarea gets focus, do something */
  .form-container textarea:focus {
    background-color: #ddd;
    outline: none;
  }
  
  /* Set a style for the submit/send button */
  .form-container .btn {
    background-color: #04AA6D;
    color: white;
    padding: 16px 20px;
    border: none;
    cursor: pointer;
    width: 100%;
    margin-bottom:10px;
    opacity: 0.8;
  }
  
  /* Add a red background color to the cancel button */
  .form-container .cancel {
    background-color: red;
  }
  
  /* Add some hover effects to buttons */
  .form-container .btn:hover, .open-button:hover {
    opacity: 5;
  }
#review{
    margin-top:50px;

}       
#review h1{
    text-align:center;
	font-weight:bold;
	margin-top:50px;
	color:#C89021 ;
    border-bottom:2px solid #C89021 ;}
.container{
    margin-top: 15%;
}
.img-text{
    width: 100%;
    height: 300px;
    display:block;
    text-align: center;
    padding: 40% 5%;
    border-radius: 15px;
}

.img-text h2{
    font-size: 25px;
    letter-spacing: 2px;
    text-transform: uppercase;
}

.img-text p{
    font-size: 14px;
}
.single-box{
    position: relative;
    margin-bottom: 30px;
}
.img-area{
    position:absolute;
    top: 15px;
    left: 125px;
}
.img area img{
    width:100%;

}
.carousel-indicators{
    color: black;
    left:0;
    top:auto;
    bottom: -70px;
}
.carousel-indicators li{
    color:black;
    border-radius: 15px;
    width:15px;
    height: 15px;
}

.carousel-indicators .active{
   color:black; 
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
<?php

 if(isset($_SESSION["user"])){
    $u = $_SESSION["user"];
    echo "Welcome dear $u";
 }
else{
    ('location:login.php');
} 
  
 
?>      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
</html>
</body>