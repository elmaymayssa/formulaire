<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>new test</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
</head>

<body>
    
    <style>

        html,
        body,
        header,
        .view {
          height: 100%;
        }
      
        @media (max-width: 740px) {
          html,
          body,
          header,
          .view {
            height: 1100px;
          }
        }
        @media (min-width: 800px) and (max-width: 850px) {
          html,
          body,
          header,
          .view {
            height: 700px;
          }
        }
      
        .top-nav-collapse {
          background-color: #39448c !important;
        }
      
        .navbar:not(.top-nav-collapse) {
          background: transparent !important;
        }
      
        @media (max-width: 991px) {
         .navbar:not(.top-nav-collapse) {
          background: #39448c !important;
         }
        }
      
        h6 {
          line-height: 1.7;
        }
      
      </style>
      
      <!-- Main navigation -->
      <header>
        
        <!-- Full Page Intro -->
        <div class="view" style="background-image:  background-repeat: no-repeat; background-size: cover; background-position: center center;">
          <!-- Mask & flexbox options-->
          <div class="mask rgba-indigo-strong d-flex justify-content-center align-items-center">
            <!-- Content -->
            <div class="container">
              <!--Grid row-->
              <div class="row pt-lg-5 mt-lg-5">
                <!--Grid column-->
                <div class="col-md-6 mb-5 mt-md-0 mt-5 white-text text-center text-md-left wow fadeInLeft"
                  data-wow-delay="0.3s">
                    <center>
                  <h1 class="display-4 font-weight-bold" > Créer votre stand</h1>
                         <div class="row">
      <div class="col-md-12">

        <!--Carousel Wrapper-->
        <div id="carousel-example-1z" class="carousel slide" data-ride="carousel">
          <!--Indicators-->
          <ol class="carousel-indicators">
            <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-1z" data-slide-to="1"></li>
            <li data-target="#carousel-example-1z" data-slide-to="2"></li>
              <li data-target="#carousel-example-1z" data-slide-to="3"></li>
              <li data-target="#carousel-example-1z" data-slide-to="4"></li>


              
          </ol>
          <!--/.Indicators-->
          <!--Slides-->
          <div class="carousel-inner" role="listbox">
            <!--First slide-->
            <div class="carousel-item active">
              <img class="d-block w-100" src="./images/image1.jpg"
                alt="First slide">
            </div>
            <!--/First slide-->
            <!--Second slide-->
            <div class="carousel-item">
              <img class="d-block w-100" src="./images/image2.jpg" alt="Second slide">
            </div>
            <!--/Second slide-->
            <!--Third slide-->
            <div class="carousel-item">
              <img class="d-block w-100" src="./images/image3.jpg"
                alt="Third slide">
            </div>
            <!--/Third slide-->
              <!--4 slide-->
            <div class="carousel-item">
              <img class="d-block w-100" src="./images/image4.jpg"  alt="Third slide">
            </div>
            <!--/ 4 slide-->
          
          </div>
          <!--/.Slides-->
          <!--Controls-->
          <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
          <!--/.Controls-->
        </div>
        <!--/.Carousel Wrapper-->

      </div>
    </div>
                  <hr class="hr-light">
                    </center>
                </div>
                <!--Grid column-->
                <!--Grid column-->
                <div class="col-md-6 col-xl-5 mb-4">

                  <!--Form-->
                     <form enctype="multipart/form-data" method="POST" action="./CreerStand.php">
                  <div class="card wow fadeInRight" data-wow-delay="0.3s">
                    <div class="card-body z-depth-2">
                      <!--Header-->
                     
                      <!--Body-->
                      <div class="md-form">
                        <i class="fas fa-user prefix grey-text"></i>
                         <input type="text" class="form-control"  id="noms" name="noms" >
                        <label class="label" for="names">Nom de sociète</label>
                      </div>
                      
                      <div class="md-form">
                        <i class="fas fa-key prefix grey-text"></i>
                        <input id="password-field" type="password" class="form-control"   id="password" name="password">
                      <label  for="password">Mot de passe </label>
                      </div>
                        
                       
                      <div class="md-form">
                        <i class="fas fa-envelope prefix grey-text"></i>
                         <input type="text" class="form-control"id="email" name="email">
                        <label for="email">Email Address</label>
                      </div>
                        
                      <div class="md-form">
                        <i class="fas fa-images prefix grey-text"></i>
                         
                    <input type="file" class="form-control" id="logo" name="logo">
 
                        <label class="label" for="logo"></label>
                      </div>
                          
                      <div class="md-form">
                        <i class="fas fa-video prefix grey-text"></i>
                         
                    <input type="text" class="form-control" id="video" name="video">
            
                        <label class="label" for="video">Taper votre lien de video</label>
                      </div>
                   <div class="md-form">
                        <i class="fas fa-palette prefix grey-text"></i>
                         
                    <input type="color" id="color" name="color" value ="#4d94ff">
                      </div>
                    
                      <div class="text-center mt-3">
                        <button class="btn btn-indigo btn-rounded"><span class="fa fa-paper-plane"></span></button>
        
                      </div>
                    </div>
                  </div>
                    </form>
                  <!--/.Form-->
                </div>
                <!--Grid column-->
              </div>
              <!--Grid row-->
            </div>
            <!-- Content -->
          </div>
          <!-- Mask & flexbox options-->
        </div>
        <!-- Full Page Intro -->
      </header>




    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
</body>

</html>