<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TasteDelights</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Agbalumo&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">
<style>
    *{
        padding: 0px;
        margin: 0px;
    }
   
    #a{
        font-family: 'Courier New', Courier, monospace;
    }

    .my-img{
    animation: rotateImg 10s linear infinite;
  }
  @keyframes rotateImg{
    from {
     transform: rotate(0deg);
    }
   to {
    transform: rotate(359deg);
   }
  }


  .bgimg{
   position: relative;
    background-image: url('imgs/bgimg.jpg'); /* Replace 'your-image.jpg' with your image file */
    background-size: cover;
    background-position: center;
    height: 650px; /* Adjust the height as needed */
    color: white; /* Text color */
  }
  
  .bgtrans{
padding: 0px;
margin: 0px;
 height: 650px; /* Adjust the height as needed */
 background-color: rgba(0, 0, 0, 0.5);
}

/* Transparent black overlay */
.black-overlay::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 1.1); /* Adjust the last value (0.5) for the transparency level */
}

@keyframes fadeup {
    from {
      opacity: 0;
      transform: translateY(20px); /* Move the element down initially */
    }
    to {
      opacity: 1;
      transform: translateY(0); /* Move the element up to its original position */
    }
  }
  
  /* Apply the fadeInUp animation to an element */
  .fadeUp {
    animation: fadeInUp 0.5s ease-out; /* You can adjust the duration and timing function */
  }
  

  .hover-effect:hover {
  transform: scale(1.1); /* Increase the size by 10% */
  transition: transform 0.3s ease; 
  color :#FFA500/* Add a smooth transition effect */
}



.card1 {
    width: 250px;
    height: 250px;
    background: linear-gradient(to bottom right, #e74c3c, #ffc107);
    border-radius: 20px;
    box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.2);
    transition: all 0.3s ease;  
    display: flex; 
    justify-content: center;
    align-items: center;
    cursor: pointer;    
}

.card-content1 {
    text-align: center;
    color: #fff;
    padding: 20px;
}

.card1:hover {
    transform: scale(1.1);
    box-shadow: 0px 0px 50px 0px rgba(0, 0, 0, 0.5);
    animation: rotate 2s linear infinite;
} 

 @keyframes rotate {
    100% {
        transform: rotate(360deg);
    }
}

.zoomIn{
    transition: transform 0.5s;

}
.zoomIn:hover {
    transform: scale(1.1);
  }
.item1{
    transition: transform 0.7s ease-in-out;
}

.item1:hover{
    border: 5px solid #ffc107;
    border-radius: 10px;
    transform: scale(1.1);
    background-color: white;
    
}

.item2{
    transition: transform 0.7s ease-in-out;
}

.item2:hover{
    border: 2px solid #ffc107;
    border-radius: 10px;
    transform: scale(1.1);
    background-color: rgb(158, 144, 144);
    color: white;
    
}

.booking{
    background-image: url("IMG/restro.jpg");
    background-size: cover;
    
}

.formtest{
    background-color: rgba(0, 0, 0, 0.6);
}

.fadedform{
    background-color: rgba(266, 266, 266, 0.2);
}

.top1{
  
    position: fixed;
    right: 20px;
    bottom: 20px;
    z-index: 1000;
 
}

a{
    text-decoration: none;
    color: #fff;
}

/* .navbar {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    z-index: 1000; /* Adjust the z-index as needed 
 } */

/* Add a background color to the fixed navbar */
.navbar.fixed {
    background-color: #000000; /* Change to your desired background color */
} */

</style>


</head>
<body>

    <div class="p-0">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark py-2 px-5 ">

            <a href="" class="navbar-brand p-0 mt-1">
                <h1 style="color:rgb(253, 210, 92)"><i class="fa fa-utensils me-3"></i>TasteDelights</h1>
                <!-- <img src="img/logo.png" alt="Logo"> -->
            </a>
          
            <div class="collapse navbar-collapse mt-0" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0 pe-4">                    
                    <a href="#about" class="nav-item nav-link" style="color: aliceblue;">ABOUT</a>
                    <a href="#service" class="nav-item nav-link" style="color: aliceblue;">SERVICE</a>
                    <a href="#menu" class="nav-item nav-link" style="color: aliceblue;">MENU</a>
                    <a href="#team" class="nav-item nav-link" style="color: aliceblue;">OUR TEAM</a>
                    <a href="#contact" class="nav-item nav-link" style="color: aliceblue;">CONTACT</a>
                </div>
                <button onclick="document.location='login.php'" type="button" class="btn btn-outline-warning px-2">LOGIN</button>
            </div>
        </nav>
        <div class=" py-7 bg-dark">
            <div class="container-fluid px-0 bgimg">
                <div class="bgtrans">
                <div class="row mx-5 align-items-center g-6">
                    <div class="col-lg-6 text-center text-lg-start">
                        <h1 class="display-3 text-white animated slideInLeft" style="font-family: 'Times New Roman', serif; color: black;">Enjoy Our<br>Delicious Meal</h1>
                        <p class="text-white animated slideInLeft mb-4 pb-2" style="color: black;">
                            Savor exquisite flavors, relish delightful ambiance, and create lasting memories at our restaurant—an oasis for enjoying delectable meals joyfully.</p>
                            <a href="#contact" type="button" class="btn btn-warning px-2">Book a Table</a>
                        </div>
                    <div class="col-lg-6 py-5 text-center text-lg-end overflow-hidden">
                        <img class="my-img" width="450" height="450" src="imgs/hero.png" alt="">
                    </div>
                </div>
             </div>
            </div>
        </div>        
    </div>
   
 
    <a href="#" class="btn btn-lg btn-warning btn-lg-square back-to-top top1"><i class="bi bi-arrow-up"></i></a>
<div class="py-5">
    <div class="container" id="about">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6">
                <div class="row g-3">
                    <div class="col-6 text-start">
                        <img  class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.1s" src="imgs/about-1.jpg">
                    </div>
                    <div class="col-6 text-start">
                        <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.3s" src="imgs/about-2.jpg" style="margin-top: 25%;">
                    </div>
                    <div class="col-6 text-end">
                        <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.5s" src="imgs/about-3.jpg">
                    </div>
                    <div class="col-6 text-end">
                        <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.7s" src="imgs/about-4.jpg">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <h5 class="section-title text-start" style="color:#FFA500; font-style: oblique;"><u>About us</u></h5>
                <h1 class="mb-4" style="font-family: Agbalumo;color: black;">Welcome to <i class="fa fa-utensils text-warning me-2"></i>TasteDelights</h1>
                <p class="mb-4">Welcome to TasteDelights, where passion meets the plate. At TasteDelights, we craft culinary experiences that delight your senses. </p>
                <p class="mb-4">Our commitment to quality ingredients and exceptional flavors ensures every bite is a moment of joy. Join us for a journey of taste and discover the essence of delicious simplicity.</p>
                <div class="row g-4 mb-4">
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center border-start border-5 border-warning px-3">
                            <h1 class="flex-shrink-0 display-5 text-warning mb-0" data-toggle="counter-up">15</h1>
                            <div class="ps-4">
                                <p class="mb-0">Years of</p>
                                <h6 class="text-uppercase mb-0">Experience</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center border-start border-5 border-warning px-3">
                            <h1 class="flex-shrink-0 display-5 text-warning mb-0" data-toggle="counter-up">50</h1>
                            <div class="ps-4">
                                <p class="mb-0">Popular</p>
                                <h6 class="text-uppercase mb-0">Master Chefs</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="#contact"  class="btn btn-warning my-3 py-2 px-2 fs-5">Book a Table</a>
            </div>
        </div>
    </div>
</div>
<!-- ABOUT End -->


<!-- MENU Start -->
<div class="my-4 " id="menu">
    <div class="container py-4">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h5 class="section-title ff-secondary text-center text-warning fw-normal fw-bold"><u>Food Menu</u></h5>
            <h1 class="mb-4 fs-1" style="font-family: agbalumo;color: black;">Most Popular Items</h1>
        </div>
        <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">
            <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
                <li class="nav-item item1 mx-2 text-center px-2">
                    <a class="d-flex align-items-center text-start mx-3 ms-0 pb-3 active" data-bs-toggle="pill" href="#tab-1">
                        <img src="IMG/break.gif" width="60px"/>
                        <!-- <i class="fa fa-coffee fa-2x text-warning"></i> -->
                        <div class="ps-3">
                            <small class="text-body">Popular</small>
                            <h6 class="mt-n1 mb-0 text-black">Breakfast</h6>
                        </div>
                    </a>
                </li>
                <li class="nav-item item1 mx-2 px-2">
                    <a class="d-flex align-items-center text-start mx-3 pb-3" data-bs-toggle="pill" href="#tab-2">
                        <img src="IMG/lunch.gif" width="60px" height="60px"/>
                        <div class="ps-3">
                            <small class="text-body">Special</small>
                            <h6 class="mt-n1 mb-0 text-black">Launch</h6>
                        </div>
                    </a>
                </li>
                <li class="nav-item item1 mx-2 px-2">
                    <a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill" href="#tab-3">
                        <img src="IMG/dinner.gif" width="60px" height="60px"/>
                        <div class="ps-3">
                            <small class="text-body">Lovely</small>
                            <h6 class="mt-n1 mb-0 text-black">Dinner</h6>
                        </div>
                    </a>
                </li>
            </ul>
            <div class="tab-content">
                <div id="tab-1" class="tab-pane fade show p-0 active">
                    <div class="row g-4 justify-content-between">
                        <div class="col-lg-5 item2">
                            <div class="d-flex align-items-center">
                                <img class="flex-shrink-0 img-fluid rounded" src="imgs/menu/m1.jpg" alt="" style="width: 80px;">
                                <div class="w-100 d-flex flex-column text-start ps-4">
                                    <h5 class="d-flex justify-content-between border-bottom pb-2">
                                        <span>Idli Vada</span>
                                        <span class="text-warning">₹80</span>
                                    </h5>
                                    <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 item2">
                            <div class="d-flex align-items-center">
                                <img class="flex-shrink-0 img-fluid rounded" src="imgs/menu/m2.jpg" alt="" style="width: 80px;">
                                <div class="w-100 d-flex flex-column text-start ps-4">
                                    <h5 class="d-flex justify-content-between border-bottom pb-2">
                                        <span>Dosa</span>
                                        <span class="text-warning">₹80</span>
                                    </h5>
                                    <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 item2">
                            <div class="d-flex align-items-center">
                                <img class="flex-shrink-0 img-fluid rounded" src="imgs/menu/m3.jpg" alt="" style="width: 80px;">
                                <div class="w-100 d-flex flex-column text-start ps-4">
                                    <h5 class="d-flex justify-content-between border-bottom pb-2">
                                        <span>Rawa Upma</span>
                                        <span class="text-warning">₹50</span>
                                    </h5>
                                    <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 item2">
                            <div class="d-flex align-items-center">
                                <img class="flex-shrink-0 img-fluid rounded" src="imgs/menu/m4.jpg" alt="" style="width: 80px;">
                                <div class="w-100 d-flex flex-column text-start ps-4">
                                    <h5 class="d-flex justify-content-between border-bottom pb-2">
                                        <span>Poha</span>
                                        <span class="text-warning">₹50</span>
                                    </h5>
                                    <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 item2">
                            <div class="d-flex align-items-center">
                                <img class="flex-shrink-0 img-fluid rounded" src="imgs/menu/m5.jpg" alt="" style="width: 80px;">
                                <div class="w-100 d-flex flex-column text-start ps-4">
                                    <h5 class="d-flex justify-content-between border-bottom pb-2">
                                        <span>Sweet Shiviyaan</span>
                                        <span class="text-warning">₹50</span>
                                    </h5>
                                    <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 item2">
                            <div class="d-flex align-items-center">
                                <img class="flex-shrink-0 img-fluid rounded" src="imgs/menu/m6.jpg" alt="" style="width: 80px;">
                                <div class="w-100 d-flex flex-column text-start ps-4">
                                    <h5 class="d-flex justify-content-between border-bottom pb-2">
                                        <span>Uttapam</span>
                                        <span class="text-warning">₹80</span>
                                    </h5>
                                    <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 item2">
                            <div class="d-flex align-items-center">
                                <img class="flex-shrink-0 img-fluid rounded" src="imgs/menu/m7.jpg" alt="" style="width: 80px;">
                                <div class="w-100 d-flex flex-column text-start ps-4">
                                    <h5 class="d-flex justify-content-between border-bottom pb-2">
                                        <span>Aloo Paratha</span>
                                        <span class="text-warning">₹100</span>
                                    </h5>
                                    <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 item2">
                            <div class="d-flex align-items-center">
                                <img class="flex-shrink-0 img-fluid rounded" src="imgs/menu/m8.jpg" alt="" style="width: 80px;">
                                <div class="w-100 d-flex flex-column text-start ps-4">
                                    <h5 class="d-flex justify-content-between border-bottom pb-2">
                                        <span>Bread Pakora</span>
                                        <span class="text-warning">₹50</span>
                                    </h5>
                                    <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="tab-2" class="tab-pane fade show p-0">
                    <div class="row justify-content-between g-4">
                        <div class="col-lg-5 item2">
                            <div class="d-flex align-items-center">
                                <img class="flex-shrink-0 img-fluid rounded" src="imgs/menu/m9.jpg" alt="" style="width: 80px;">
                                <div class="w-100 d-flex flex-column text-start ps-4">
                                    <h5 class="d-flex justify-content-between border-bottom pb-2">
                                        <span>Chicken Biryani</span>
                                        <span class="text-warning">₹180</span>
                                    </h5>
                                    <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 item2">
                            <div class="d-flex align-items-center">
                                <img class="flex-shrink-0 img-fluid rounded" src="imgs/menu/m10.jpg" alt="" style="width: 80px;">
                                <div class="w-100 d-flex flex-column text-start ps-4">
                                    <h5 class="d-flex justify-content-between border-bottom pb-2">
                                        <span>Mutton Biryani</span>
                                        <span class="text-warning">₹250</span>
                                    </h5>
                                    <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 item2">
                            <div class="d-flex align-items-center">
                                <img class="flex-shrink-0 img-fluid rounded" src="imgs/menu/m11.jpg" alt="" style="width: 80px;">
                                <div class="w-100 d-flex flex-column text-start ps-4">
                                    <h5 class="d-flex justify-content-between border-bottom pb-2">
                                        <span>Chicken Thali</span>
                                        <span class="text-warning">₹300</span>
                                    </h5>
                                    <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 item2">
                            <div class="d-flex align-items-center">
                                <img class="flex-shrink-0 img-fluid rounded" src="imgs/menu/m12.jpg" alt="" style="width: 80px;">
                                <div class="w-100 d-flex flex-column text-start ps-4">
                                    <h5 class="d-flex justify-content-between border-bottom pb-2">
                                        <span>Mutton Thali</span>
                                        <span class="text-warning">₹450</span>
                                    </h5>
                                    <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 item2">
                            <div class="d-flex align-items-center">
                                <img class="flex-shrink-0 img-fluid rounded" src="imgs/menu/m13.jpg" alt="" style="width: 80px;">
                                <div class="w-100 d-flex flex-column text-start ps-4">
                                    <h5 class="d-flex justify-content-between border-bottom pb-2">
                                        <span>Chicken Noodles</span>
                                        <span class="text-warning">₹150</span>
                                    </h5>
                                    <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 item2">
                            <div class="d-flex align-items-center">
                                <img class="flex-shrink-0 img-fluid rounded" src="imgs/menu/m14.jpg" alt="" style="width: 80px;">
                                <div class="w-100 d-flex flex-column text-start ps-4">
                                    <h5 class="d-flex justify-content-between border-bottom pb-2">
                                        <span>Chicken Roll</span>
                                        <span class="text-warning">₹150</span>
                                    </h5>
                                    <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 item2">
                            <div class="d-flex align-items-center">
                                <img class="flex-shrink-0 img-fluid rounded" src="imgs/menu/m15.jpg" alt="" style="width: 80px;">
                                <div class="w-100 d-flex flex-column text-start ps-4">
                                    <h5 class="d-flex justify-content-between border-bottom pb-2">
                                        <span>Chicken Lollipop</span>
                                        <span class="text-warning">₹150</span>
                                    </h5>
                                    <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 item2">
                            <div class="d-flex align-items-center">
                                <img class="flex-shrink-0 img-fluid rounded" src="imgs/menu/m16.jpg" alt="" style="width: 80px;">
                                <div class="w-100 d-flex flex-column text-start ps-4">
                                    <h5 class="d-flex justify-content-between border-bottom pb-2">
                                        <span>Chicken Manchurian</span>
                                        <span class="text-warning">₹150</span>
                                    </h5>
                                    <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="tab-3" class="tab-pane fade show p-0">
                    <div class="row justify-content-between g-4">
                        <div class="col-lg-5 item2">
                            <div class="d-flex align-items-center">
                                <img class="flex-shrink-0 img-fluid rounded" src="imgs/menu/m17.jpg" alt="" style="width: 80px;">
                                <div class="w-100 d-flex flex-column text-start ps-4">
                                    <h5 class="d-flex justify-content-between border-bottom pb-2">
                                        <span>Masala Paneer</span>
                                        <span class="text-warning">$250</span>
                                    </h5>
                                    <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 item2">
                            <div class="d-flex align-items-center">
                                <img class="flex-shrink-0 img-fluid rounded" src="imgs/menu/m18.jpg" alt="" style="width: 80px;">
                                <div class="w-100 d-flex flex-column text-start ps-4">
                                    <h5 class="d-flex justify-content-between border-bottom pb-2">
                                        <span>Chilly Paneer</span>
                                        <span class="text-warning">₹280</span>
                                    </h5>
                                    <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 item2">
                            <div class="d-flex align-items-center">
                                <img class="flex-shrink-0 img-fluid rounded" src="imgs/menu/m19.jpg" alt="" style="width: 80px;">
                                <div class="w-100 d-flex flex-column text-start ps-4">
                                    <h5 class="d-flex justify-content-between border-bottom pb-2">
                                        <span>Kadhai Paneer</span>
                                        <span class="text-warning">₹300</span>
                                    </h5>
                                    <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 item2">
                            <div class="d-flex align-items-center">
                                <img class="flex-shrink-0 img-fluid rounded" src="imgs/menu/m20.jpg" alt="" style="width: 80px;">
                                <div class="w-100 d-flex flex-column text-start ps-4">
                                    <h5 class="d-flex justify-content-between border-bottom pb-2">
                                        <span>Paneer Kofta</span>
                                        <span class="text-warning">₹350</span>
                                    </h5>
                                    <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 item2">
                            <div class="d-flex align-items-center">
                                <img class="flex-shrink-0 img-fluid rounded" src="imgs/menu/m21.jpg" alt="" style="width: 80px;">
                                <div class="w-100 d-flex flex-column text-start ps-4">
                                    <h5 class="d-flex justify-content-between border-bottom pb-2">
                                        <span>Aloo Sabji</span>
                                        <span class="text-warning">₹120</span>
                                    </h5>
                                    <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 item2">
                            <div class="d-flex align-items-center">
                                <img class="flex-shrink-0 img-fluid rounded" src="imgs/menu/m22.jpg" alt="" style="width: 80px;">
                                <div class="w-100 d-flex flex-column text-start ps-4">
                                    <h5 class="d-flex justify-content-between border-bottom pb-2">
                                        <span>Mix Veg</span>
                                        <span class="text-warning">₹250</span>
                                    </h5>
                                    <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 item2">
                            <div class="d-flex align-items-center">
                                <img class="flex-shrink-0 img-fluid rounded" src="imgs/menu/m23.jpg" alt="" style="width: 80px;">
                                <div class="w-100 d-flex flex-column text-start ps-4">
                                    <h5 class="d-flex justify-content-between border-bottom pb-2">
                                        <span>Dal Tadka</span>
                                        <span class="text-warning">₹350</span>
                                    </h5>
                                    <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 item2">
                            <div class="d-flex align-items-center">
                                <img class="flex-shrink-0 img-fluid rounded" src="imgs/menu/m24.jpg" alt="" style="width: 80px;">
                                <div class="w-100 d-flex flex-column text-start ps-4">
                                    <h5 class="d-flex justify-content-between border-bottom pb-2">
                                        <span>Baigan Barta</span>
                                        <span class="text-warning">₹150</span>
                                    </h5>
                                    <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- MENU End -->

<!-- Service start -->

<div class="container mb-5" id="service">
    <div class="container-fluid">
        <div class="container pt-4 py-2" style="font-family: Agbalumo; text-decoration: underline;">
          <h2 class="text-center fs-1 ">What we Offer</h2>  
        </div>
    <div class="">
          <div class="row g-4">
              <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                  <div class="service-item rounded pt-3">
                    <div class="card1">
                        <div class="card-content1">    
                                <img src="IMG/chef.gif" width="80px" class="rounded-4 my-2"/>                       
                                <!-- <i class="fa fa-3x fa-user-tie text-warning mb-4 text-center"></i> -->
                                <h5>Master Chefs</h5>
                                <p class="text-start">Master Chefs crafts culinary magic, delighting palates with exquisite flavors and artful presentations.</p>
                            
                        </div>
                    </div>                      
                  </div>
              </div>
              <div class="col-lg-3 col-sm-6 wow fadeInUp " data-wow-delay="0.3s">
                  <div class="service-item rounded pt-3">
                    <div class="card1">
                        <div class="card-content1">                           
                            <img src="IMG/quality.gif" width="80px" height="80px" class="rounded-4 my-2" />
                                <h5>Quality Food</h5>
                                <p class="text-start">Exquisite flavors, impeccable presentation—this restaurant defines perfection in every delicious bite.</p>                            
                        </div>
                    </div>                       
                  </div>
              </div>
              <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                  <div class="service-item rounded pt-3">
                    <div class="card1">
                        <div class="card-content1">                           
                            <img src="IMG/delivery.gif" width="80px" class="rounded-4 my-2"/> 
                                <h5>Online Order</h5>
                                <p class="text-start">Savor the convenience, relish the flavors—effortless joy delivered with every online order.</p>
                            
                        </div>
                    </div>                      
                  </div>
              </div>
              <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                  <div class="service-item rounded pt-3">
                    <div class="card1">
                        <div class="card-content1">                           
                            <img src="IMG/24hr.gif" width="80px" class="rounded-4 my-2"/>
                                <h5>24/7 Service</h5>
                                <p class="text-start">Relishing delightful moments, the restaurant's 24/7 service is a culinary masterpiece of dedication.</p>                            
                        </div>
                    </div>                     
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>

<!-- Service end -->


<!-- RESERVATION Start-->
     <div class="px-0 wow fadeInUp booking" data-wow-delay="0.1s" id="contact" >
        <div class="formtest">
        <h2 class="text-white text-center fs-1 pt-4" style="font-family: Agbalumo; text-decoration: underline;" >Book Your Seat</h2>
        <div class="row g-0 py-5">
            <div class="col-md-7 px-5 pb-5 mt-5">
                <h4 class="fs-2 p-5 mt-5 text-white" style="font-family: satisfy;">"Indulge in an unforgettable culinary adventure by reserving your exclusive table at our restaurant. Complete the reservation form to savor a delectable dining experience tailored just for you."</h4>             
            </div>
            <div class="col-md-4 fadedform d-flex align-items-center rounded-5">
                <div class="p-5 wow fadeInUp " data-wow-delay="0.2s">
                    <h5 class="section-title ff-secondary text-start text-warning fw-normal" style="font-style: oblique;"><u>Reservation</u></h5>
                    <h1 class="text-white mb-4" style="font-family: Agbalumo;">Book A Table Online</h1>
                    <form>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" placeholder="Your Name" required>
                                    <label for="name" >Your Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" placeholder="Your Email" required>
                                    <label for="email">Your Email</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating date" id="date3" data-target-input="nearest">
                                    <input type="text" class="form-control datetimepicker-input" id="datetime" placeholder="Date & Time" data-target="#date3" data-toggle="datetimepicker" required/>
                                    <label for="datetime" required>Date & Time</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <select class="form-select" id="select1">
                                      <option value="1">People 1</option>
                                      <option value="2">People 2</option>
                                      <option value="3">People 3</option>
                                    </select>
                                    <label for="select1">No Of People</label>
                                  </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Special Request" id="message" style="height: 100px"></textarea>
                                    <label for="message">Special Request</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-warning w-100 py-3" type="submit" onclick="book()">Book Now</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
   
        <script>
         function book() {
      // Get form values
      const name = document.getElementById('name').value;
      const email = document.getElementById('email').value;
      const datetime = document.getElementById('datetime').value;
      const select1 = document.getElementById('select1').value;
      const message = document.getElementById('message').value;

      // Create an object to store the form data
      const formData = {
        name: name,
        email: email,
        datetime: datetime,
        select1: select1,
        message: message
      };

      // Convert the object to a JSON string and store it in local storage
      localStorage.setItem('formData', JSON.stringify(formData));
      alert("Request Sent");
    }
        </script>

    <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- 16:9 aspect ratio -->
                    <div class="ratio ratio-16x9">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/xLftFLbFjto?si=RfARWbQyiGqGy0fA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay;  clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
    <!-- RESERVATION End -->


    <!-- CHEFS Start -->
    <div class=" my-4 pb-3" id="team">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h5 class="section-title ff-primary text-center text-warning fw-normal" style="font-style: oblique;"><u>Team Members</u></h5>
                <h1 class="mb-5 text-black" style="font-family: Agbalumo;">Our Master Chefs</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item text-center rounded overflow-hidden">
                        <div class="rounded-circle overflow-hidden m-4">
                            <img class="img-fluid" src="imgs/chef1.jpg" alt="">
                        </div>
                        <h5 class="mb-0">Vikas Khanna</h5>
                        <small>Designation</small>
                        <div class="d-flex justify-content-center mt-3">
                            <a class="btn btn-square btn-warning mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-warning mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-warning mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item text-center rounded overflow-hidden">
                        <div class="rounded-circle overflow-hidden m-4">
                            <img class="img-fluid" src="imgs/chef2.jpg" alt="">
                        </div>
                        <h5 class="mb-0">Kunal Kapur</h5>
                        <small>Designation</small>
                        <div class="d-flex justify-content-center mt-3">
                            <a class="btn btn-square btn-warning mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-warning mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-warning mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item text-center rounded overflow-hidden">
                        <div class="rounded-circle overflow-hidden m-4">
                            <img class="img-fluid" src="imgs/chef3.jpg" alt="">
                        </div>
                        <h5 class="mb-0">Ranveer Brar</h5>
                        <small>Designation</small>
                        <div class="d-flex justify-content-center mt-3">
                            <a class="btn btn-square btn-warning mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-warning mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-warning mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item text-center rounded overflow-hidden">
                        <div class="rounded-circle overflow-hidden m-4">
                            <img class="img-fluid" src="imgs/chef4.jpeg" alt="">
                        </div>
                        <h5 class="mb-0">Amninder Sandhu</h5>
                        <small>Designation</small>
                        <div class="d-flex justify-content-center mt-3">
                            <a class="btn btn-square btn-warning mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-warning mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-warning mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CHEFS End -->


 

    <!-- Testimonial Start -->
    <div class=" py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <h5 class="section-title ff-secondary text-center text-warning fw-normal" style="font-style: oblique;"><u>Testimonial</u></h5>
                <h1 class="mb-5 text-black" style="font-family: Agbalumo;">Our Clients Say!!!</h1>
            </div>            
                <div class="container border border-warning border-4 rounded-4">
                    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                          <div class="carousel-item active p-4">
                            <div class="row">
                            <div class="col-10">
                            <i class="fa fa-quote-left fa-2x text-warning mb-3"></i>
                            <p style="font-family: satisfy;" class="fs-3 text-primary">I can't get enough of the incredible flavors at this restaurant. Every visit is a culinary adventure that leaves me wanting more. The chef's expertise shines through in every dish!</p>
                            </div>
                            <div class="col-2 d-flex align-items-center justify-content-center">
                                <img class="img-fluid text-center flex-shrink-0 rounded-2" src="IMG/cust1.jpg" style="width: 150px; height: 150px;">                        
                            </div>
                            </div>
                            <div class="row">
                                <div class="col-10"></div>
                                <div class="col-2 text-center">
                                    <h5 class="pt-3 text-primary" style="font-family: agbalumo;">John D</h5>
                                </div>                       
                            </div>
                          </div>
                          <div class="carousel-item p-4">
                            <div class="row">
                            <div class="col-10">
                            <i class="fa fa-quote-left fa-2x text-warning mb-3"></i>
                            <p style="font-family: satisfy;" class="fs-3 text-primary">The quality of the food and the presentation here is unparalleled. It's more than just a meal; it's an experience that I look forward to every time.</p>
                            </div>
                            <div class="col-2 d-flex align-items-center justify-content-center">
                                <img class="img-fluid text-center flex-shrink-0 rounded-2" src="IMG/cust2.jpg" style="width: 150px; height: 150px;">                        
                            </div>
                            </div>
                            <div class="row">
                                <div class="col-10"></div>
                                <div class="col-2 text-center">
                                    <h5 class="pt-3 text-primary" style="font-family: agbalumo;">Sarah M</h5>
                                </div>                       
                            </div>
                          </div>
                          <div class="carousel-item p-4">
                            <div class="row">
                            <div class="col-10">
                            <i class="fa fa-quote-left fa-2x text-warning mb-3"></i>
                            <p style="font-family: satisfy;" class="fs-3 text-primary">I love that this restaurant offers 24/7 service. Whether it's lunch or a late-night craving, I can always count on them to deliver exceptional food and service.</p>
                            </div>
                            <div class="col-2 d-flex align-items-center justify-content-center">
                                <img class="img-fluid text-center flex-shrink-0 rounded-2" src="IMG/cust4.jpg" style="width: 150px; height: 150px;">                        
                            </div>
                            </div>
                            <div class="row">
                                <div class="col-10"></div>
                                <div class="col-2 text-center">
                                    <h5 class="pt-3 text-primary" style="font-family: agbalumo;">Michael S</h5>
                                </div>                       
                            </div>
                          </div>
                          <div class="carousel-item p-4">
                            <div class="row">
                            <div class="col-10">
                            <i class="fa fa-quote-left fa-2x text-warning mb-3"></i>
                            <p style="font-family: satisfy;" class="fs-3 text-primary">The convenience of online ordering has made enjoying their delicious dishes a breeze. The flavors are always on point, and the online service is quick and efficient.</p>
                            </div>
                            <div class="col-2 d-flex align-items-center justify-content-center">
                                <img class="img-fluid text-center flex-shrink-0 rounded-2" src="IMG/cust3.jpg" style="width: 150px; height: 150px;">                        
                            </div>
                            </div>
                            <div class="row">
                                <div class="col-10"></div>
                                <div class="col-2 text-center">
                                    <h5 class="pt-3 text-primary" style="font-family: agbalumo;">Emily R</h5>
                                </div>                       
                            </div>
                          </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>
                      </div>
                </div>           
        </div>
    </div>
    <!-- Testimonial End -->
  

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-md-3">
                    <h4 class="section-title text-start  fw-normal mb-4" style="font-family: Agbalumo;">Company</h4>
                   <li style="list-style: none;" class="pb-2"><a href="#about">About Us</a></li> 
                   <li style="list-style: none;" class="pb-2"><a href="#contact">Contact Us</a></li>
                   <li style="list-style: none;" class="pb-2"> <a  href="#contact">Reservation</a></li>
                    <li style="list-style: none;" class="pb-2"> <a  href="#team">Our Team</a></li>
                    <li style="list-style: none;" class="pb-2"> <a  href="#menu">Menu</a></li>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="section-title ff-secondary text-start fw-normal mb-4" style="font-family: Agbalumo;">Contact</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social mx-1" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="section-title ff-secondary text-start  fw-normal mb-4" style="font-family: Agbalumo;">Opening</h4>
                    <h5 class="text-light fw-normal">Monday - Saturday</h5>
                    <p>09AM - 09PM</p>
                    <h5 class="text-light fw-normal">Sunday</h5>
                    <p>10AM - 08PM</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="section-title ff-secondary text-start  fw-normal mb-4" style="font-family: Agbalumo;">Contact us</h4>
                    <p>Reach out for assistance; we're here to help!</p>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control border-primary w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                        <button type="button" class="btn btn-warning py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#" style="color: white;">TasteDelights</a>, All Right Reserved. 
                        Designed By <a class="border-bottom">Shrutika Londhe</a><br><br>
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <div class="footer-menu">
                            <a href="#home"  style="color: white;">Home |</a>
                            <a href=""  style="color: white;">Cookies |</a>
                            <a href=""  style="color: white;">Help |</a>
                            <a href=""  style="color: white;">FQAs </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
   
</div>

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="lib/wow/wow.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/counterup/counterup.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="lib/tempusdominus/js/moment.min.js"></script>
<script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
<script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>










</body>
</html>