<?php include "header.php" ?>

<div class="container">

<!-- Début de la navbar -->

<nav class="navbar navbar-expand-lg navbar-light pb-5">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
        <img src="images/logo.png" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
        <span class="navbar-nav me-auto mb-2 mb-lg-0">
        </span>
        <span class="">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <div class="center" style="width: 20px;">
        </div>
        <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="#">Destinations</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="#">Partner</a>
        </li>
        <li class="nav-btn">
            
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
       
                   
        <button class="btn btn-travel-orange btn-outline-travel-orange" type="button">Login</button>
         <button class="btn btn-travel-orange" type="button">Register</button>
         </div>
        </div>
        </li>
        </ul>
        </span>
        </div>
    </div>
</nav>


<!-- Fin de la navbar -->

<div class="container">
  <div class="row">
    <div class="col-md-4 col-sm-12 order-sm-1">
        <h1 class="mb-5" id="travel-title">Explore and Travel</h1>
        <h2 id="travel-subtitle">Holiday finder</h2>
            <div id="black-underline"></div>

<!-- début du formulaire -->
<form class="row g-3">
  <div class="col-md-6">
  <select id="inputState" class="form-select">
      <option selected>Location</option>
      <option>...</option>
    </select>
  </div>
  <div class="col-md-6">
  <select id="inputState" class="form-select">
      <option selected>Activity</option>
      <option>...</option>
    </select>
  </div>
  <div class="col-md-6">
  <select id="inputState" class="form-select">
      <option selected>Grade</option>
      <option>...</option>
    </select>
  </div>
  <div class="col-md-6">
    <select id="inputState" class="form-select">
      <option selected>Date</option>
      <option>...</option>
    </select>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-travel-orange">Explore</button>
  </div>
</form>
<!-- fin du formulaire -->
    </div>
    <div class="col-md-2 order-sm-2"></div>
    <div class="col-md-6 order-sm-3"><img class="img--resize mt-5 mb-5" src="images/thousand-01.png"alt="">
    </div>
</div>

</div>

<!--début exploration-->

<div class="container mt-5">
  <div class="row">
    

    <div class="col-md-4 col-sm-12 order-md-1 order-sm-2" >
       <img class="img--resize" src="images/thousand-02.png"alt="">
    </div> 



    <div class="col-md-4 offset-md-4 order-md-2 order-sm-1">
    <h2 class="pt-10" id="travel-subtitle">A new way to explore world</h2>
    
        <p>For decades travellers have reached for Lonely Planet books when looking to plan and execute their perfect trip, but now, they can also let Lonely Planet Experiences lead the way</p>
        <div class="col-12">
         <button type="submit" class="btn btn-travel-orange mb-5 mt-4">Learn more</button>
        </div>
    </div>
        
  </div>
</div>   
   
<!--fin exploration-->

<!-- début exploration du paysage-->

<div class="container">
  <div class="row">
    <div class="col-md-4"><h3 class="" id="subtitle"> Features destinations</h3></div>
    <div class="col-md-4 ms-auto viewer">View all ></div>
</div>

<!-- fin exploration du paysage-->

<!--début cartes-->

<div class="row">

    <div class="col-md-3 col-sm-6"><img src="images/raja-ampat.png" class="card-img-top" alt="..."></div>
    <div class="col-md-3 col-sm-6"><img src="images/fanjingshan.png" class="card-img-top" alt="..."></div>
    <div class="col-md-3 col-sm-6"><img src="images/vevey.png" class="card-img-top" alt="..."></div>
    <div class="col-md-3 col-sm-6"><img src="images/skadar.png" class="card-img-top" alt="..."></div>

</div>



<!--fin cartes-->

<!-- suite du voyage-->
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <h2 class="pt-10" id="travel-subtitle">Guides by Thousand Sunny</h2>
    
        <br>Packed with tips and device from our on-the-ground experts, our city guides app (iOS and Android) is the ultimate resource before and during a trip</br>

    <div class="col-12">
         <button type="submit" class="btn btn-travel-orange mb-5 mt-4">Download</button>
        </div>
    </div>
    
    <div class="col-md-4 offset-md-4">
       <img class="img--resize  mt-5 mb-5" src="images/thousand-03.png"alt="">
    </div> 
    </div> 
</div>   

<!-- fin du voyage-->
<!-- début testimonial -->


<div class="container">
    <div class="row">
        <div class="col-md-4">
            <h2 class="pt-10" id="travel-subtitle">Testimonials</h2>
           
            <p><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></p>
           
        <br>"Quisque in lacus a urna fermentum euismod. Integer mi nibh, dapibus, ac scelerisque eu, facilisis quis purus.Morbi blandit sit amet turpis nec"</br>
        <br><strong>Edward Newgate</strong></br>
        <p>Founder Circle</p>
    
    </div>
    
    <div class="col-md-4 offset-md-4">
       <img src="images/photo.png"alt="" id="photo">
       
    </div> 
    </div> 
</div>   

<!-- fin testimonial -->

<div class="container">

  <div class="row">
    <div class="col-md-4"><h3 class="pt-30" id="subtitle"> Trending stories</h3></div>
    <div class="col-md-4 ms-auto viewer">View all ></div>
  </div>

<div class="row">
  <div class="col-md-3 col-sm-6">
    <div class="card">
      <img src="images/blog1.png" class="card-img-top" alt="...">
      <div class="card-body">
          <div class="card-title"><strong>The many benefits of taking a headling holiday</strong></div>
          <p class="card-text">Heling holidays' are on the rise to help maximise your health and happines...</p>
          <p id="more">Read more</p>
      </div>
    </div>
  </div>

  <div class="col-md-3 col-sm-6">
    <div class="card">
      <img src="images/blog2.png" class="card-img-top" alt="...">
      <div class="card-body">
      <div class="card-title"><strong>The many best Kyoto restaurant to try Japanese food</strong></div>
          <p class="card-text">From tofu teahouse, here's our guide to Kyoto's restaurants to visit...</p>
          <p id="more">Read more</p>
      
      </div>
    </div>
  </div>
  <div class="col-md-3 col-sm-6">
    <div class="card">
      <img src="images/blog3.png" class="card-img-top" alt="...">
      <div class="card-body">
      <div class="card-title"><strong>Skip Chicken Itza and head to this remote Yucatan</strong></div>
          <p class="card-text">it's remote and challenging to get, but braving the jungle and exploring these ruins without the...</p>
          <p id="more">Read more</p>
       
      </div>
    </div>
  </div>
  <div class="col-md-3 col-sm-6">
    <div class="card">
      <img src="images/blog4.png" class="card-img-top" alt="...">
      <div class="card-body">
      <div class="card-title"><strong>Surf's up at these beginner spots around the world</strong></div>
          <p class="card-text">If learning to surf has in on your to do list for a while, the good news is: it's never too late...</p>
          <p id="more">Read more</p>
        
      </div>
    </div>
  </div>
</div>
<!-- début du footer-->

        <div class="container-fluid">
        <div class="footer linear-gradient" id="footer">
        <div class="row p-4">
        <div class="col-md-5 col-sm-12">
        <img src="images\logo.png" alt="">
        <p class="footer mb-3 p-3">Plan and book your perfect trip with expert advice, travel tips destination information from us</p>

        <p class="copyrigth p-3">©Thousand Sunny. All rights reserved</p>
</div>

        <div class="col-md-2 col-sm-0">
        <p><strong>Destinations</strong></p>
        <p>Africa<br>
        Antarctica<br>
        Asia<br>
        Europe<br>
        America
        </p>
</div>

        <div class="col-md-2 col-sm-0">
            <p><strong>Shop</strong></p>
                <p>Destination Guide
                Pictorial & Gifts<br>
                Special Offers<br>
                Delivery Times<br>
                FAQs
            </p>
        </div>

        <div class="col-md-2 col-sm-0">
            <p><strong>Interests</strong></p>
                <p>Adventure Travel
                Art And Culture<br>
                Wildlife And Nature<br>
                Family Holidays<br>
                Food And Drink<br>
            </p>
        </div>
        <div class="col-md-12 col-sm-12 social-network">
                <hr>
                <i class="bi bi-twitter"><i class="bi bi-facebook"></i><i class="bi bi-instagram"></i><i class="bi bi-linkedin"></i><i class="bi bi-youtube"></i></i>
        </div>
    </div>
</div>
</div>

</div>
    </div>

































<!-- fin du footer>









<?php include "footer.php" ?>