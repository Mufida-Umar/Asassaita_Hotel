<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link
    href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css"
    rel="stylesheet"
  />
    <link rel="stylesheet" href="{{asset('css/contact.css')}}" />
    <link rel="stylesheet" href="{{asset('css/style.css')}}" />
    <title>About Us</title>
</head>




<body>
    @include('partials.nav')

    <header class=" home" id="home">
        <div class="section__container header__container">
          <p class="section__subheader">ABOUT US</p>
          <h1>Settings Where  <br>passion meets purpose </h1>
          <button class="btn">Connect With Us Today</button>
        </div>
      </header>
  
 
      {{-- <section class="booking">
        <div class="section__container booking__container">
          <form action="/">
            <div class="input__group">
              <label for="arrival">Arrival Date</label>
              <input type="text" placeholder="Your Arrival Date" />
            </div>
            <div class="input__group">
              <label for="departure">Departure Date</label>
              <input type="text" placeholder="Your Departure Date" />
            </div>
            <div class="input__group">
              <label for="guests">Guests</label>
              <input type="text" placeholder="No Of Guests" />
            </div>
            <button class="btn">Check Availability</button>
          </form>
        </div>
      </section> --}}
  
      <section class="about" id="about">
        <div class="section__container about__container">
          <div class="about__grid">
            <div class="about__image">
              
              <img src="{{asset('images/about-1.jpg')}}" alt="">
            </div>
            <div class="about__card">
              <span><i class="ri-user-line"></i></span>
              <h4>Strong Team</h4>
              <p>
                Unlocking Hospitality Excellence And Ensures Your Perfect Stay
              </p>
            </div>
            <div class="about__image">
              <img src="{{asset('images/about-2.jpg')}}" alt="">
            </div>
            <div class="about__card">
              <span><i class="ri-calendar-check-line"></i></span>
              <h4>Luxury Room</h4>
              <p>Experience Unrivaled Luxury at Our Exquisite Luxury Rooms</p>
            </div>
          </div>
          <div class="about__content">
            <p class="section__subheader">ABOUT US</p>
            <h2 class="section__header">Discover Our Underground</h2>
            <p class="section__description">
              Welcome to a hidden realm of extraordinary accommodations where
              luxury, comfort, and adventure converge. Our underground hotels
              offer an unparalleled escape from the ordinary, inviting you to
              explore a subterranean world of wonders.
            </p>
            <a href="http://127.0.0.1:8000/booking"><button class="btn">Book Now</button></a>
          </div>
        </div>
      </section>



 


  

    @include('partials.footer')


</body>
</html>