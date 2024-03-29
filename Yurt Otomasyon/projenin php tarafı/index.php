<!DOCTYPE html>
<html lang="en">
<head>
  <title>0ZNBRK</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
  body {
    background-color: #ff4f00;
    font: 400 15px/1.8 Lato, sans-serif;
    color: #fff;
  }
  h3, h4 {
    margin: 10px 0 30px 0;
    letter-spacing: 10px;      
    font-size: 20px;
    color: #fff;
  }
  .container {
    padding: 80px 120px;
  }
  .person {
    border: 10px solid transparent;
    margin-bottom: 25px;
    width: 80%;
    height: 80%;
    opacity: 0.7;
  }
  .person:hover {
    border-color: #f1f1f1;
  }
  .carousel-inner img {
    width: 100%; /* Set width to 100% */
    margin: auto;
  }
  .carousel-caption h3 {
    color: #fff !important;
  }
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; /* Hide the carousel text when the screen is less than 600 pixels wide */
    }
  }
  .bg-1 {
    background: #2d2d30;
    color: #bdbdbd;
  }
  .bg-1 h3 {color: #fff;}
  .bg-1 p {font-style: italic;}
  .list-group-item:first-child {
    border-top-right-radius: 0;
    border-top-left-radius: 0;
  }
  .list-group-item:last-child {
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;
  }
  .thumbnail {
    padding: 0 0 15px 0;
    border: none;
    border-radius: 0;
  }
  .thumbnail p {
    margin-top: 15px;
    color: #555;
  }
  .btn {
    padding: 10px 20px;
    background-color: #333;
    color: #f1f1f1;
    border-radius: 0;
    transition: .2s;
  }
  .btn:hover, .btn:focus {
    border: 1px solid #333;
    background-color: #fff;
    color: #000;
  }
  .modal-header, h4, .close {
    background-color: #333;
    color: #fff !important;
    text-align: center;
    font-size: 30px;
  }
  .modal-header, .modal-body {
    padding: 40px 50px;
  }
  .nav-tabs li a {
    color: #fff;
  }
  #googleMap {
    width: 100%;
    height: 400px;
    -webkit-filter: grayscale(100%);
    filter: grayscale(100%);
  }  
  .navbar {
    font-family: Montserrat, sans-serif;
    margin-bottom: 0;
    background-color: #2d2d30;
    border: 0;
    font-size: 11px !important;
    letter-spacing: 4px;
    opacity: 0.9;
  }
  .navbar li a, .navbar .navbar-brand { 
    color: #d5d5d5 !important;
  }
  .navbar-nav li a:hover {
    color: #fff !important;
  }
  .navbar-nav li.active a {
    color: #fff !important;
    background-color: #29292c !important;
  }
  .navbar-default .navbar-toggle {
    border-color: transparent;
  }
  .open .dropdown-toggle {
    color: #fff;
    background-color: #555 !important;
  }
  .dropdown-menu li a {
    color: #000 !important;
  }
  .dropdown-menu li a:hover {
    background-color: red !important;
  }
  footer {
    background-color: #2d2d30;
    color: #f5f5f5;
    padding: 32px;
  }
  footer a {
    color: #f5f5f5;
  }
  footer a:hover {
    color: #777;
    text-decoration: none;
  }  
  .form-control {
    border-radius: 0;
  }
  textarea {
    resize: none;
  }
  .text-color{
    color: black;
  }
  </style>
</head>
<body id="myPage"  data-target=".navbar" data-offset="50">
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand"> Çanakkale Onsekiz Mart Devlet Yurdu </a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#myPage">ANASAYFA</a></li>
        <li><a href="#band">HAKKIMIZDA</a></li>
        <li><a href="#tour">ODALAR</a></li>
        <li><a href="#contact">İLETİŞİM</a></li>
        <li><a href="veli/production/login.php" style="padding: 5px;"> <button style="border-radius: 5px; height:40px; background-color: limegreen;" type="button" class="btn btn-success">Veli Girişi</button></li></a>
        <li><a href="ogrenci/production/login.php" style="padding: 5px;"> <button style="border-radius: 5px; height:40px; background-color: seagreen;" type="button" class="btn btn-dark">Öğrenci Girişi</button></li></a>
      </ul>
    </div>
  </div>
</nav>
<?php
  function runMyFunction() {
    echo"<body style='background:black;'> </body>";
  }
function runMyFunction2() {
    echo"<body style='background:orange;'> </body>";
  }
  if (isset($_GET['hello'])) {
    runMyFunction();
  }
  if (isset($_GET['hello2'])) {
    runMyFunction2();
  }
?>


<div id="myCarousel" class="carousel slide" data-ride="carousel" style="background-color: white;">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="image1.jpg" width="1200" height="700">
        <div class="carousel-caption">
        </div>      
      </div>
      <div class="item">
        <img src="image3.jpg" width="1200" height="700">
        <div class="carousel-caption">
        </div>      
      </div>    
      <div class="item">
        <img src="image2.jpg"  width="1200" height="700">
        <div class="carousel-caption">
        </div>      
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
<form>

<!-- Container (The Band Section) -->
<div id="band" class="container text-center">
  <h3>Hakkımızda</h3>
  <p><em>Bir Öğrenci Yurdundan Beklediklerinden Daha Fazlası</em></p>
  <p>Çanakkale Onsekiz Mart Devlet yurdu konforlu ve ferah odaları, ders çalışıp sosyalleşebileceğin ortak yaşam alanlarıyla şehrin yaşamanın en avantajlı olduğu konumunda üniversite hayatını en iyi şekilde değerlendirebilmen için seni bekliyor</p>
  <br>
  <div class="row">
  
    </div>
  </div>
</div>

<!-- Container (TOUR Section) -->
<div id="tour" class="bg-1">
  <div class="container">
    
    <div class="row text-center">
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="image1.jpg" alt="Tek Kişilik" width="400" height="300">
          <p><strong>Tek Kişilik Oda</strong></p>
          <p>Fiyat Bilgisi İçin İletim Kurunuz</p>
          <button class="btn" data-toggle="modal" data-target="#myModal">İncele</button>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="image2.jpg" alt="İki Kişilik" width="400" height="300">
          <p><strong>İki Kişilik Oda</strong></p>
          <p>Fiyat Bilgisi İçin İletim Kurunuz</p>
          <button class="btn" data-toggle="modal" data-target="#myModal">İncele</button>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="image3.jpg" alt="3 Kişilik" width="400" height="300">
          <p><strong>Üç Kişilik Oda</strong></p>
          <p>Fiyat Bilgisi İçin İletim Kurunuz</p>
          <button class="btn" data-toggle="modal" data-target="#myModal">İncele</button>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4><span class="glyphicon glyphicon-lock"></span> İLETİŞİM</h4>
        </div>
        <div class="modal-body">
          <form role="form">
            <div class="form-group">
              <label for="psw"><span></span>Telefon Numaranız </label>
              <input type="text" class="form-control" id="psw" placeholder="Tel No">
            </div>
            <div class="form-group">
              <label for="usrname"><span></span> Eposta Adresinizi Giriniz </label>
              <input type="text" class="form-control" id="usrname" placeholder="Eposta Adresiniz">
            </div>
              <button type="submit" class="btn btn-block">Gönder 
                <span class="glyphicon glyphicon-ok"></span>
              </button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
            <span class="glyphicon glyphicon-remove"></span> İPTAL
          </button>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Container (Contact Section) -->
<div id="contact" class="container">
  <h3 class="text-center">İletişim</h3>
  <p class="text-center"><em>   Bir Öğrenci Yurdundan Beklediklerinden Daha Fazlası</em></p>

  <div class="row">
    <div class="col-md-4">
      <p>İletşim Bilgileri</p>
        <a href="https://www.google.com.tr/maps/dir/%C3%87anakkale,+%C3%87anakkale+Merkez%2F%C3%87anakkale/Barbaros,+%C3%87anakkale+Teknik+Bilimler+Meslek+Y%C3%BCksekokulu,+Orman+Sokak,+%C3%87anakkale+Merkez%2F%C3%87anakkale/@40.1312613,26.3976473,14z/data=!3m1!4b1!4m13!4m12!1m5!1m1!1s0x14b1a9d8214a2f3f:0x8cebeb3703e22f7f!2m2!1d26.408587!2d40.14672!1m5!1m1!1s0x14b1a9d00e40f499:0x5122ae70e258ac51!2m2!1d26.4215847!2d40.1202545?hl=tr"><span class="glyphicon glyphicon-map-marker"> </span>Çanakkale Merkez</a>
      <p><span class="glyphicon glyphicon-phone"></span>Telefon Numarası: 0 543 763 8353</p>
      <p><span class="glyphicon glyphicon-envelope"></span>Email: comudevletyurdu@hotmail.com</p>
    </div>
    <div class="col-md-8">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Adınız" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email Adresiniz" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Yorum Yap" rows="5"></textarea>
      <br>
      <div class="row">
        <div class="col-md-12 form-group">
          <button class="btn pull-right" type="submit">Gönder</button>
        </div>
      </div>
    </div>
  </div>

</div>
<!-- Footer -->
<footer class="text-center" id="contact">
  <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
    <span  class="glyphicon glyphicon-chevron-up">
      
    </span>
  </a>
  <br><br>
  <p class="text-center">Çanakkale Onsekiz Mart Devlet Yurdu <a href="www.ozanaktas.com" data-toggle="tooltip" title="Ozan Aktas "> <br> www.comudevletyurdu.com </a></p> 
</footer>
<script>
$(document).ready(function(){
  // Initialize Tooltip
  $('[data-toggle="tooltip"]').tooltip(); 
  
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {

      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
})
</script>

</body>
</html>
        <?php
            function select(){
               echo "The select function is called.";
            }
            function insert(){
                echo"<body style='background:black;'> </body>";

            }
        ?>
