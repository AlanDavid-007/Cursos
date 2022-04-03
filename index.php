<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomePage</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    

    <style>
        body, html{

            background-image: url("Assets/index.jpg");
            background-size: cover;
            background-repeat: no-repeat;
            height: 100%;
            display: grid;
            width:100%;
            font-family: "Open Sans", sans-serif;
        }
/*--------------------------------------------------------------
# Hero Section
--------------------------------------------------------------*/
#hero {
  width: 100%;
  height: 100vh;
  overflow: hidden;
  position: relative;
}
#hero .carousel, #hero .carousel-inner, #hero .carousel-item, #hero .carousel-item::before {
  position: absolute;
  top: 0;
  right: 0;
  left: 0;
  bottom: 0;
}
#hero .carousel-item {
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
}
#hero .carousel-item::before {
  content: "";
  background-color: rgba(30, 35, 40, 0.6);
}
#hero .carousel-container {
  display: flex;
  justify-content: center;
  align-items: center;
  position: absolute;
  bottom: 0;
  top: 70px;
  left: 50px;
  right: 50px;
}
#hero .container {
  text-align: center;
}
#hero h2 {
  color: #fff;
  margin-bottom: 20px;
  font-size: 48px;
  font-weight: 700;
}
#hero .carousel-inner .carousel-item {
  transition-property: opacity;
  background-position: center top;
}
#hero .btn-get-started {
  font-family: "Raleway", sans-serif;
  font-weight: 500;
  font-size: 14px;
  letter-spacing: 1px;
  display: inline-block;
  padding: 14px 32px;
  border-radius: 4px;
  transition: 0.5s;
  line-height: 1;
  color: #fff;
  -webkit-animation-delay: 0.8s;
  animation-delay: 0.8s;
  background: #d9232d;
}
#hero .btn-get-started:hover {
  background: #df3740;
}
@media (max-width: 992px) {
  #hero {
    height: 100vh;
  }
  #hero .carousel-container {
    top: 8px;
  }
}
@media (max-width: 768px) {
  #hero h2 {
    font-size: 28px;
  }
}
@media (max-height: 500px) {
  #hero {
    height: 120vh;
  }
}
        .btn10{
    
    height:50px;
    width:300px;
    font-family: "proxima-nova", sans-serif;
    font-weight: 500;
    font-size: 13px;
    text-transform: uppercase!important;
    letter-spacing: 2px;
    color: #fff;
    cursor: hand;
    text-align: auto;
    text-transform: capitalize;
    border: 1px solid #fff;
    border-radius:50px;
    position: relative;
    overflow: hidden!important;
    -webkit-transition: all .3s ease-in-out;
    -moz-transition: all .3s ease-in-out;
    -o-transition: all .3s ease-in-out;
    transition: all .3s ease-in-out;
    background: transparent!important;
    z-index:10;
    margin: auto;
    
}

.btn10:hover{
    border: 1px solid #071982;
	  color: #80ffd3!important;
}
.btn10::before {
    content: '';
    width: 0%;
    height: 100%;
    display: block;
    background: #071982;
    position: absolute;
	  -ms-transform: skewX(-20deg);
    -webkit-transform: skewX(-20deg); 
    transform: skewX(-20deg);   
    left: -10%;
    opacity: 1;
    top: 0;
    z-index: -12;
    -moz-transition: all .7s cubic-bezier(0.77, 0, 0.175, 1);
  -o-transition: all .7s cubic-bezier(0.77, 0, 0.175, 1);
  -webkit-transition: all .7s cubic-bezier(0.77, 0, 0.175, 1);
  transition: all .7s cubic-bezier(0.77, 0, 0.175, 1);
	   box-shadow:2px 0px 14px rgba(0,0,0,.6);
  } 

.btn10::after {
    content: '';
    width: 0%;
    height: 100%;
    display: block;
    background: #80ffd3;
    position: absolute;
	-ms-transform: skewX(-20deg);
    -webkit-transform: skewX(-20deg); 
    transform: skewX(-20deg);   
    left: -10%;
    opacity: 0;
    top: 0;
    z-index: -15;
    -webkit-transition: all .94s cubic-bezier(.2,.95,.57,.99);
    -moz-transition: all .4s cubic-bezier(.2,.95,.57,.99);
    -o-transition: all .4s cubic-bezier(.2,.95,.57,.99);
    transition: all .4s cubic-bezier(.2,.95,.57,.99);
    box-shadow: 2px 0px 14px rgba(0,0,0,.6);
}
.btn10:hover::before, .btn1O:hover::before{
	opacity:1;
	width: 116%;
}
.btn10:hover::after, .btn1O:hover::after{
	opacity:1;
	width: 120%;
}
    </style>
</head>

<body>

<section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Welcome to <span>Cursos</span></h2>
              <a href="index_categorias.php" class="btn10 btn-get-started">Ver mais</a>
            </div>
          </div>
        </div>
    </div>
  </section><!-- End Hero -->
</body>

</html>