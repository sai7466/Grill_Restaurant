<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Grill_Restaurant</title>
  <link rel="stylesheet" type="text/css" href="p.css">
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</head>
<body class="bg-dark" data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="50">
	<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
  <div class="container-fluid">
  	<div class="container-fluid">    <a class="navbar-brand" href="#"><img src="grill.png" style="width: 100px; height: 70px;"></a>
  	</div>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nbdd"
    style="margin-left: 90%; margin-top: -15%;">
      <span class="navbar-toggler-icon" ></span>
    </button>
    <div class="collapse navbar-collapse" id="nbdd">
      <ul class="navbar-nav ">
        <li class="nav-item  ps-2" >
          <a class="nav-link active" href="#home">HOME</a>
        </li>
        <li class="nav-item  ps-2" >
          <a class="nav-link active" href="#about">ABOUTUS</a>
        </li>
        <li class="nav-item ps-2">
          <a class="nav-link" href="#special">SPECIALS</a>
        </li>
        <li class="nav-item ps-2">
          <a class="nav-link" href="#menu">OURMENU</a>
        </li>
        <li class="nav-item ps-2">
          <a class="nav-link" href="#book">BOOKATABLE</a>
        </li>
        <li class="nav-item dropdown ps-5">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            EXTRAS
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#rating">Ratings</a></li>
            <li><a class="dropdown-item" href="#chefs">special chefs</a></li>
            <li><a class="dropdown-item" href="#login">login</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
  <div class="container-fluid" id="home">
    <div id="car" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#car" data-bs-slide-to="0" class="active" ></button>
        <button type="button" data-bs-target="#car" data-bs-slide-to="1" ></button>
        <button type="button" data-bs-target="#car" data-bs-slide-to="2" ></button>
        <button type="button" data-bs-target="#car" data-bs-slide-to="3" ></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="3000">
          <img src="img1.jpg" class="d-block w-100 img-fluid" style=" height:650px ">
          <div class="carousel-caption d-none d-md-block">
            <h5 class="text-light">The Angera GRil Item</h5>
            <h5 class="text-light">This is Very One of The Delicious in Nonveg Item </h5>
          </div>
        </div>
        <div class="carousel-item" data-bs-interval="3000">
          <img src="bg10.jpg" class="d-block w-100 img-fluid " style="height:650px ">
          <div class="carousel-caption d-none d-md-block">
            <h5 class="text-success">Veg Grill</h5>
            <p class="text-success h5">Here you get special Grill veg Items.</p>
          </div>
        </div>
        <div class="carousel-item" data-bs-interval="3000">
          <img src="img3.jpg" class="d-block w-100 img-fluid " style="height:650px">
          <div class="carousel-caption d-none d-md-block">
            <h5 class="text-primary">Customers</h5>
            <p class="text-primary h5">welcome to the Our Restaruant Grill</p>
          </div>
        </div>
        <div class="carousel-item" data-bs-interval="3000">
          <img src="img2.jpg" class="d-block w-100  img-fluid" style="height:650px">
          <div class="carousel-caption d-none d-md-block">
            <h5 class="text-primary">CHEFS</h5>
            <p class="text-primary h5">Popular Chefs are Working in Our Restaruant</p>
          </div>
        </div> 
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#car" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#car" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
       
    </div>
  </div>
<br>
  <div class="container-fluid " id="about" >
    <div class="bg-light text-center" style="border:2px solid whitesmoke; ">
      <br><br><br>
      <h1 style="font-size:50px">A<span class="text-danger ps-4 pe-4 ">WARM</span>WELCOME </h1>
      <br><br><br>
      <h2 text-dark>We were very Happy to See You</h2>
      <br><br>
      <div class="row">
      <div class="col-1"></div>
      <div class="col-md-5">
        <h1 > ABOUT <span class="text-danger">FOUNDER</span></h1>
        <p class="ps-5 pe-4" style="font-size: 20px;">I am  SAI,glad to see you guys found my website.Since from childhood I'm fond of cooking,I used to cook different cuisines.I love to share my love via actions and food to all the people across the world,right now I'm the founder of GRILL.

        </p>
        <button  type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#mymodal">Know More..</button>
      </div>
      <div class="col-md-5 text-justify-center"><img src="1.jpg" class="pb-3 rounded-sm " style="width:500px;height: 300px;"></div>
      <div class="col-1"></div>
      </div>
    </div>
  </div>

<!-- Modal -->
<!-- <div class="container">
    <p class="h1">Modal Example</p>
    <button type="button" id="bttn" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#mymodal">Model</button>
  </div> -->

    <div class="modal" id="mymodal" >
      <div class="modal-dialog " >
        <div class="modal-content bg-dark text-light">
           <div class="modal-header">
            <h4>Contact Details</h4>
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal" class="close">x</button>
          </div>
          <div class="modal-body">
            NAME : Jhon<br>
            VILLAGE : RAJAHMUNDRY<br>
            CONATACT : 7799887466<br>
            EMAIL : yalamanchilisaidurga@gmail.com<br><br>
            <div class="card-group">
              <div class="card">
              <img src="1.jpg"  class="image-rounded">
              </div>
          </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal" class="close">close</button>
          </div>
        </div> 
      </div>
    </div>





  <div class="container-fluid mt-5" id="book">
    <div class="" style="background-color:black;">
      
      <div class="row">
        <div class="col-1"></div>
        <div class="col-md-5 pt-5">
          <h2 class="text-light">LOVE <span class="text-danger">STEAK</span></h2>
          <br>
          <p class="text-light" style="font-size: 25px;">Conveniently leverage other's distinctive expertise and backend metrics. Progressively harness intuitive systems and ethical niches. Continually drive extensible benefits vis-a-vis leading-edge meta-services. Conveniently leverage existing market-driven outsourcing vis-a-vis e-business process improvements. Intrinsicly extend quality interfaces with intermandated innovation.</p>

          <br><br><br>
          <button class="btn  bg-danger btn-outline-danger text-light"><a href="#login" class="text-decoration-none">BOOK NOW</a></button>
          <br>
        </div>
        <div class="col-md-5 pt-5">
          <h2 class="text-light">CREATE <span class="text-danger">MEMORIES</span></h2>
          <br>
          <p class="text-light" style="font-size: 25px;">Conveniently leverage other's distinctive expertise and backend metrics. Progressively harness intuitive systems and ethical niches. Continually drive extensible benefits vis-a-vis leading-edge meta-services. Conveniently leverage existing market-driven outsourcing vis-a-vis e-business process improvements. Intrinsicly extend quality interfaces with intermandated innovation.</p>

          <br><br><br>
          <button class="btn  btn-outline-danger text-light">VIEW MENU</button>
          <br>
          .
        </div>
        <div class="col-1"></div>
      </div>
    </div>

  </div>
  <div class="container-fluid mt-5" id="special">
    <div class="bg-secondary text-center text-light" style="border:2px solid dark">
      <br><br><br>
      <h1>OUR<span class="text-danger ps-4 pe-4 ">UPCOMING</span>EVENTS</h1>
      <br><br><br>
      <h3 >Try for yourself Today</h3>
      <br><br>
      <div class="row">
        <div class="col-lg-4">
          <img src="GRILL_bg.jpg" class="img-fluid p-2 image-rounded">
        </div>
        <div class="col-lg-4">
          <img src="event2.jpg" class="img-fluid p-2 image-rounded">
        </div>
        <div class="col-lg-4">
          <img src="event3.jpg" class="img-fluid p-2 image-rounded">
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid mt-5 " id="menu">
    <div class="bg-light">
      <h1 class=" text-center pt-5">BROWSE <span class="text-danger">THE</span> MENU</h1>
      <h2 class="text-center pt-5">Yours TasteBuds Will ThankYou</h2>
      <br><br>
      <div class="row">
        <div class="col-1 col-md-12"></div>
        <div class="col-lg-5 col-md-10 ps-5">
          <h1>Staters</h1>
          <div class="row pt-4">
            <div class="col-4"><img src="pic1.jpg" class="img-fluid" style="height: 150px;"></div>
            <div class="col-8 ps-4">
              <h3>bourguignon $2.00</h3>
              <p > Bœuf bourguignon is essentially a stew made from beef braised in red wine, beef broth, and seasoned vegetables including pearl onions and mushrooms.</p>
            </div>
          </div>
          <div class="row pt-4">
            <div class="col-4 "><img src="pic2.jpg" class="img-fluid" style="height: 150px;"></div>
            <div class="col-8 ps-4">
              <h3>Confit de canard $1.5</h3>
              <p>Confit de canard is a tasty French dish  – although some chefs use goose or pork – and is one of the finest dishes. The meat is specially prepared using ancient preservation.</p>
            </div>
          </div>
          <div class="row pt-4">
            <div class="col-4"><img src="meal3.jpg" class="img-fluid" style="height: 150px;"></div>
            <div class="col-8 ps-4">
              <h3>Pizza $1.0</h3>
              <p>It is a made with Chicken and some variety food items. It is very Delicious.you can taste it.yammy!!</p>
            </div>
          </div>
          <div class="row pt-4">
            <div class="col-4"><img src="meal2.jpg" class="img-fluid" style="height: 150px;"></div>
            <div class="col-8 ps-4">
              <h3>Chicken $1.2</h3>
              <p>No phone no lights no motor car not a single luxury. Like Robinson Crusoe it's primitive as can be. Like Robinson Crusoe it's primitive as can be</p>
            </div>
          </div>
          <div class="row pt-4">
            <div class="col-4"><img src="meal5.jpg" class="img-fluid" style="height: 150px;"></div>
            <div class="col-8 ps-4">
              <h3>Salmon $1.2</h3>
              <p>Salmon is a mild-flavored fish with a rich and slightly oily taste to it. Baked, grilled, and poached salmon will often taste citrusy and buttery dish.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-5 col-md-10 ps-5">
          <h1>Main Course</h1>
          <div class="row pt-4">
            <div class="col-4"><img src="menu1.png" class="img-fluid" style="height: 150px;"></div>
            <div class="col-8 ps-4">
              <h3>Chicken Chettinad</h3>
              <p>Easily cooked and delicious meal to have. The roasted flavor of fennel, green cardamom, cloves, cinnamon,all this adds a unique taste.</p>
            </div>
          </div>
          <div class="row pt-4">
            <div class="col-4"><img src="menu2.jpg" class="img-fluid" style="height: 150px;"></div>
            <div class="col-8 ps-4">
              <h3>Chicken Biryani $2.0</h3>
              <p>Yummy and Spicy Chettinad chicken biryani recipe is a very aromatic tasty which can be prepared quickly in restaurant style.</p>
            </div>
          </div>
          <div class="row pt-4">
            <div class="col-4"><img src="menu3.jpg" class="img-fluid" style="height: 150px;"></div>
            <div class="col-8 ps-4">
              <h3>Fish Biryani $1.7</h3>
              <p>An ultimate favourite of all seafood lovers, this Fish Biryani recipe is prepared with basmati rice, fish fillets, dry fruits and finest spices.</p>
            </div>
          </div>
          <div class="row pt-4">
            <div class="col-4"><img src="menu4.jpg" class="img-fluid" style="height: 150px;"></div>
            <div class="col-8 ps-4">
              <h3>Mushroom Biryani $2.1</h3>
              <p>Mushroom Biryani made with basmati or Seeraga samba rice along with special Chettinad spices makes this meal unique and flavorful. It is a tasty and flavor-packed one-pot biryani for veg as well as non-veg lovers</p>
            </div>
          </div>
          <div class="row pt-4">
            <div class="col-4"><img src="menu5.jpg" class="img-fluid" style="height: 150px;"></div>
            <div class="col-8 ps-4">
              <h3>Spicy Chicken $1.3</h3>
              <p>A typical north-Indian-style chicken curry! Spicy chicken masala is a heaven for all the spice lovers who love their chicken doused in a myriad of flavours.</p>
            </div>
          </div>
        </div>
        <div class="col-1"></div>
      </div>
      <br><br>
    </div>
  </div>

  <div class="container-fluid mt-5" id="chefs">
    <div class="text-light text-center" style="background-color: black;">
      <br><br>
      <h1 class="text-light text-center mt-5" style="font-size: 45px;">OUR <span class="text-danger ps-3 pe-3">ACCLAIMED</span>CHEFS</h1>
      <br><br>
      <p style="font-size:30px">Dedicated to Excellence</p>
      <br>
      <br>
      <br>

      <div class="container-fluid" id="car">
        <div class="row p-5">
          <div class="col-lg-3">
            <div class="card">
              <div class="card-img">
                <img src="1.jpg" id="1" >
                <div class="card-text">
                  <h3 class="text-dark" id="jn">John Doe</h3>
                </div>
              </div>
          </div>
          </div>
          
          <div class="col-lg-3">
            <div class="card">
              <div class="card-img">
                <img src="2.jpg" id="1" >
                <div class="card-text">
                  <h3 class="text-dark" id="jn">Barry Scott</h3>
                </div>
              </div>
          </div>
          </div>
          <div class="col-lg-3">
            <div class="card">
              <div class="card-img">
                <img src="3.jpg" id="1" >
                <div class="card-text">
                  <h3 class="text-dark" id="jn">Riya</h3>
                </div>
              </div>
          </div>
          </div>
          <div class="col-lg-3">
            <div class="card">
              <div class="card-img">
                <img src="4.jpg" id="1" >
                <div class="card-text">
                  <h3 class="text-dark" id="jn">Tom Smooth</h3>
                </div>
              </div>
          </div>
          </div>
        </div>
      </div>


    </div> 
  </div>

  <div class="container-fluid mt-5" id="rating">
    <div class="text-light" style="background-color: black;">
      <br><br>
        <h1 class="text-light text-center mt-5 h1" style="font-size: 45px;">OUR <span class="text-danger ps-3 pe-3">HAPPY</span>CUSTOMERS</h1>
      
      <br><br>
      
      <p class="text-light text-center" style="font-size:30px">Satsfaction,Everywhere</p>
      <br><br>
      <div class="container ms-5">

        <div id="car" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#car" data-bs-slide-to="0" class="visually-hidden active" ></button>
        <button type="button" data-bs-target="#car" data-bs-slide-to="1" class="visually-hidden"></button>
        <button type="button" data-bs-target="#car" data-bs-slide-to="2" class="visually-hidden"></button>
        <!-- <button type="button" data-bs-target="#car" data-bs-slide-to="3" ></button> -->
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="3000">
          <div class="row">
            <div class="col-sm-2">
          <img src="small1.jpg" class="d-block rounded img-fluid" style="width: 50%; height:50%">
          </div>
            <div class="col-sm-10">
            <h2 class="text-light">Charles Davies</h2>
            <p class="text-light">Compellingly customize highly efficient outsourcing with premium quality vectors. Conveniently target <br>customer directed relationships after highly efficient process improvements. </p>
            <ul class="d-flex list-unstyled">
                <li><i class="bi bi-star-fill text-danger"></i></li>
                <li><i class="bi bi-star-fill text-danger"></i></li>
                <li><i class="bi bi-star-fill text-danger"></i></li>
                <li><i class="bi bi-star-fill text-danger"></i></li>
                <li><i class="bi bi-star-fill text-danger"></i></li>
            </ul>
            </div>
          </div>
        </div>
        <div class="carousel-item" data-bs-interval="3000">
          <div class="row">
            <div class="col-sm-2">
          <img src="small2.jpg" class="d-block rounded img-fluid" style="width: 50%; height:50%">
          </div>
            <div class="col-sm-10">
            <h2 class="text-light">Angelina</h2>
            <p class="text-light">This is Very One of The Delicious in Nonveg Item </p>
            <ul class="d-flex list-unstyled">
                <li><i class="bi bi-star-fill text-danger"></i></li>
                <li><i class="bi bi-star-fill text-danger"></i></li>
                <li><i class="bi bi-star-fill text-danger"></i></li>
                <li><i class="bi bi-star-fill text-danger"></i></li>
                <li><i class="bi bi-star-fill "></i></li>
            </ul>
            </div>
          </div>
        </div>
        <div class="carousel-item" data-bs-interval="3000">
          <div class="row">
            <div class="col-sm-2">
          <img src="team1.jpg" class="d-block rounded img-fluid" style="width: 50%; height:50%">
          </div>
            <div class="col-sm-10">
            <h2 class="text-light">Boss Devil </h2>
            <h5 class="text-light">This is Very Tasty . I Have ever recevied.</h5>
            <ul class="d-flex list-unstyled">
                <li><i class="bi bi-star-fill text-danger"></i></li>
                <li><i class="bi bi-star-fill text-danger"></i></li>
                <li><i class="bi bi-star-fill text-danger"></i></li>
                <li><i class="bi bi-star-fill text-danger"></i></li>
                <li><i class="bi bi-star-fill text-danger"></i></li>
            </ul>
            </div>
          </div>
        </div>
  
      <button class="visually-hidden" type="button" data-bs-target="#car" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="visually-hidden" type="button" data-bs-target="#car" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
       
    </div>
      </div>

      <br><br><br>

    </div>
  </div>
</div>

  <div class="container-fluid mt-5" id="login">
    <div class="text-light text-center" style="background-color: black;">
      <br><br>
      <h1 class="text-light text-center mt-5 h1" style="font-size: 45px;">BOOK<span class="text-danger ps-3 pe-3">YOUR</span>TABLE</h1>
      <br><br>
      <p style="font-size:30px">Satisfaction Everytime</p>
      <br>
      <br>
      <br>

      <div class="row">
        <div class="col-md-6">
          <ul class="d-block list-unstyled">
            <li class="h2">ADDRESS</li>
            <li></li>
            <li>Sai Grill Building</li>
            <li><br></li>
            <li>RYTHU BAZAR</li>
            <li>GKVM,533286</li>
            <li><br></li>
            <li>+917799887466</li>
        </div>
        <div class="col-md-6">
          <ul class="d-block list-unstyled">
            <li class="h2">OPENING TIMES</li>
            <li><br></li>
            <li>Monday    11:00 AM - 11:00 PM</li>
            <li>Tuesday   11:00 AM - 11:00 PM</li>
            <li>Wednesday 11:00 AM - 11:00 PM</li>
            <li>Thursday  11:00 AM - 11:00 PM</li>
            <li>Friday    11:00 AM - 11:00 PM</li>
            <li>Saturday  11:00 AM - 11:00 PM</li>
            <li>Sunday    11:00 AM - 11:00 PM</li>
          </ul>
        </div>
      </div>
      <br><br><br>
      <form action="retriew.php" method="post">
        <div class="row">
          <div class="col-md-4 mt-3">
            <input type="text" class="form-control text-light mx-auto " name="name" id="n" placeholder="YOUR NAME*" style="width: 280px;height: 40px; background:transparent;">
          </div>
          <div class="col-md-4 mt-3">
            <input type="email" class="form-control text-light mx-auto" name="email" id="e" placeholder="YOUR EMAIL*" style="width: 280px;height: 40px;background:transparent ;">
          </div>
          <div class="col-md-4 mt-3">
          <input type="text" class="form-control text-light mx-auto" name="number" required id="num" placeholder="Mobile No" style="width: 280px;height: 40px; background: transparent;">
        </div>
      </div>
      <div class="row">
          <div class="col-md-4 mt-3">
            <input type="text" class="form-control text-light mx-auto " name="guest" id="g" placeholder="No of Guests" style="width: 280px;height: 40px; background:transparent;">
          </div>
          <div class="col-md-4 mt-3">
            <input type="time" class="form-control text-light mx-auto" name="time"  id="t" placeholder="time" style="width: 280px;height: 40px;background:transparent ;">
          </div>
          <div class="col-md-4 mt-3">
          <input type="date" class="form-control text-light mx-auto" name="indate" id="d" placeholder="enter date" style="width: 280px;height: 40px; background: transparent;">
        </div>
      </div>
        <div class="row mt-5">
          <div class="col-1"></div>
          <div class="col-9">
            <textarea placeholder="YOUR MSG*" class="form-control text-light" name="" rows="5" cols="9" style="width:100%; background: transparent;"> YOUR MSG*
            
            </textarea>
          </div>
          <div class="col-2"></div>
          <br><br>
        </div>
        <br>
        <button onclick="go()" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#bookd">Check Details</button>
        <input type="submit" class="btn btn-primary" name="SUBMIT" value="SUBMIT" >
      

      </form>
      <br>
      <br>
    </div>
  </div>

  <br><br>
  <div class="container-fluid">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d122103.60435054036!2d81.73631705520907!3d16.98745091709949!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a37a3f2440c9fff%3A0x86b24503e305ca21!2sRajamahendravaram%2C%20Andhra%20Pradesh!5e0!3m2!1sen!2sin!4v1661309818840!5m2!1sen!2sin" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    
  </div>

  <footer>
    <div class="container-fluid">
        <div class="text-light text-center" style="background-color: black;">
          <div class="row text-center">
            <div class="col-md-12">
              <p class="pt-5 pb-5">&copy;Copyright 2019. Designed by DISTINCTIVE THEMES</p>
            </div>
          </div>
          <div class="row">
            <div class="col-3"></div>
            <div class="col-md-6">
              <ul class="d-flex list-unstyled">
                  <li class="p-3"><a href="#" class="link-light"><i class="bi bi-twitter " style="font-size:200%;"></i></a></li>
                  <li class="p-3"><a href="#" class="link-light"><i class="bi bi-pinterest" style="font-size:200%;"></i></a></li>
                  <li class="p-3"><a href="#" class="link-light"><i class="bi bi-dribbble" style="font-size:200%;"></i></a></li>
                  <li class="p-3"><a href="#" class="link-light"><i class="bi bi-facebook" style="font-size:200%;"></i></a></li>
                  <li class="p-3"><a href="#" class="link-light"><i class="bi bi-behance" style="font-size:200%;"></i></a></li>
                  <li class="p-3"><a href="#" class="link-light"><i class="bi bi-linkedin" style="font-size:200%;"></i></a></li>
              </ul>
            </div>
            <div class="col-3"></div>
          </div>
          </div>
        </div>
    </div>
  </footer>

  <div class="modal text-primary" id="bookd" >
      <div class="modal-dialog " >
        <div class="modal-content bg-dark text-light">
           <div class="modal-header">
            <h4>Your Details</h4>
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal" class="close">x</button>
          </div>
          <div class="modal-body">
           <script type="text/javascript">
            //function go(){
                  document.querySelector(".modalbody").innerHTML=document.getElementById("n").value;
                  document.write(document.getElementById("e").value);
                  document.write(document.getElementById("num").value);
                  document.write(document.getElementById("g").value);
                  document.write(document.getElementById("t").value);
                  document.write(document.getElementById("d").value);
            //}
            </script> 
          </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal" class="close">close</button>
          </div>
        </div> 
      </div>
    </div>


</body>
</html>