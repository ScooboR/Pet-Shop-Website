
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pet Shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer">

 
<link href='https://api.mapbox.com/mapbox-gl-js/v2.9.1/mapbox-gl.css' rel='stylesheet' />


</head>
  <body>
    <!--Nav bar-->
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-1 ">
            <div class="container">
            <img src="img/undraw_bird.svg">
           <a href="Home.php" class="navbar-brand">The Lucky Pet Shop</a>
           <img class="nav-item" src="img/animals.svg" width="100" height="100">
           

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
                <span class="navbar-toggler-icon"></span>
            </button>

           <div class="collapse navbar-collapse" id="navmenu">
           
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">   
                <a href="about.html" class="nav-link text-light">About Us</a>
            </li>
            <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item dropdown">
          <button class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown">
           Shop
          </button>
          <ul class="dropdown-menu dropdown-menu-dark">
            <li><a class="dropdown-item" href="foodcate.html">Food</a></li>
            <li><a class="dropdown-item" href="treatcate.html">Treats</a></li>
            <li><a class="dropdown-item" href="accecate.html">Accessories</a></li>
            <li><a class="dropdown-item" href="beaucate.html">Beauty Products</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
            <ul class="navbar-nav ms-auto">
            <li class="nav-item">
                <a href="user.php" class=" nav-link "><span class="text-light fas fa-user-circle
                  "><span>My Profile</span></span></a>
            </li>

            </ul>
           </div>
        </div>
        <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
        </nav>
        <!-- Showcase-->
        <section class="bg-secondary text-light p-5 p-lg-0 pt-lg-5 text-center">
        <div class="container">
                <div class="d-sm-flex align-items-center justify-content-between">
                    <div>
                        <h1> <span class="text-warning">Explore</span> our range of products</h1>
                    <p class="lead my-5" style="font-weight: lighter
                    "> Check out our wide range of products, and treat your little companion with the love he deserves! </p>
                    <input class="btn btn-primary btn-lg" type="button" onclick="location.href='shop.html';" value="Shop Now" />
                    </div>
                    <br>
                    <img class="img-fluid w-50" src="img/goodboi.svg" alt="">
                </div>

        </div>
    </section>
    <!--Any questions section-->
    <section class="bg-primary text-light p-5">
        <div class="container">
            <div class="d-md-flex justify-content-between align-items-center">
            <h3 class="mb-3 mb-md-0">Questions? Don't hesitate to tell us!</h3>
            <form id="form1" action="question.php" method="post">
            <div class="row">
            
                <div class="col">
                  <input type="text" class="form-control" name="email" placeholder="Enter email..">
                </div>
                <div class="col">
                  <input type="text" class="form-control" name="question" placeholder="Question...">
                </div>
                <div class="col">
                    <button type="submit" form="form1" class="form-control bg-dark text-light" value="Submit">Submit</button>
                  </div>
            </form>
              </div>
                </form>
        
            </div>

        </div>


    </section>

     <!--Photos Showcase section-->
     <section class="bg-secondary text-dark p-5">
        <div class="container">

        <h1 class="text-light py-3 pt-lg-5 text-center">We love pets! It's our job...</h1>
        <p class="text-light py-3 pt-lg-2 text-center">Leave your pets to us, we're the <span class="text-warning"> experts.... </span></p>
        <br>
        <br>
        <div class="kodfun-galeri">
        <div style="background-image: url(img/smalldogo.png);"></div>
        <div style="background-image: url(img/uglydogo.png);"></div>
        <div style="background-image: url(img/rabbito.png);"></div>
        <div style="background-image: url(img/cat.png);"></div>



        </div>
       
        </div>

     </section>
     <!--Frequent Questions accordion-->
     <section id="questions" class="p-5 bg-primary">
      <div class="container">
        <h2 class="text-center mb-4 text-light">Frequently Asked Questions</h2>
        <div class="accordion accordion-flush" id="accordionFlushExample">
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                <h6>What happens if I'm not satisfied with the product purchased?</h6>
              </button>
            </h2>
            <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">No worries, it happens! We fully refund your product <span class="text-danger"> within 15 days! </span></div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
               <h6> Do you help animal shelters in Paphos?</h6>
              </button>
            </h2>
            <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">We frequently donate food and clothes to shelters in need throughout Cyprus!</div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                <h6>Do you sell pets as well?</h6>
              </button>
            </h2>
            <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">Unfortunately at the moment we do not sell any kind of pets, but it is planned to be accomplished in the near future.</div>
            </div>
          </div>
        </div>
      </div>
      

     </section>

     
     <!--Contact info & Map -->
     <section class="p-5">
      <div class="container"> 

        <div class=" row g-4">
          <div class="col-md">
            <h2 class="text-center mb-4">Where to find us.</h2>
            <ul class="list-group list-group-flush lead">

              <li class="list-group-item">
                <span class="fw-bold">Our Location: </span>  Agia Eirini 61 Mandria
              </li>

              <li class="list-group-item">
                <span class="fw-bold">Phone Number:</span>  26 911467
              </li>

              <li class="list-group-item">
                <span class="fw-bold">Email:</span> luckypet@gmail.com
              </li>

              <li class="list-group-item">
                <span class="fw-bold"> Don't be afraid to bring your buddy with you! Pets of all kind are welcomed!</span> 
              </li>

            </ul>
          </div>
          <div id='map' style='width: 400px; height: 300px;'></div>
          
        
        </div>

          </div>


        </div>
      </div>



     </section>

     <!-- Footer -->
          <footer class="p-5 bg-dark text-white text-center position-relative">
            <div class="container">
              <p class="lead">Copyright &copy; 2023 Lucky Pet Shop</p>

              <a href="#" class="position-absolute bottom-0 end-0">
                <i class="bi bi-arrow-up-circle h1"></i>
              </a>
              
            </div>


          </footer>

   
    
     
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
     <script src='https://api.mapbox.com/mapbox-gl-js/v2.9.1/mapbox-gl.js'></script>
    
    <script>
         mapboxgl.accessToken = 'pk.eyJ1IjoidmxhZG90dCIsImEiOiJjbGhkNzhxcjUwNTV6M3FvNGI3b2Z5eTdwIn0.9Exvz5x5L3zNIXuBWkUMcg';
         var map = new mapboxgl.Map({
        container: 'map',
        style: 'mapbox://styles/mapbox/streets-v11',
        center:[34.7754, 32.4218],
        zoom: 3 ,
      });
    </script>
      <script src="javascript/script.js"></script>
  </body>
</html>