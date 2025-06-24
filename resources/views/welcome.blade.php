<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="{{asset('css/style.css')}}" />
    <title>ASASSAITA</title>
  </head>

  <body>
    @include('partials.nav')


    <header class="header" id="home">
      <div class="section__container header__container">
        <p class="section__subheader">The Goal</p>
        <h1>Discover The Perfect Base For You</h1>
         <a href="http://127.0.0.1:8000/booking"><button class="btn">Book Now</button></a>
      </div>
    </header>

    <section class="booking">
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
    </section>

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

    <section class="room__container" id="room">
      <p class="section__subheader">ROOMS</p>
      <h2 class="section__header">Hand Picked Rooms</h2>
      <div class="room__grid">
        <div class="room__card">
          <img src="{{asset('images/room-1.jpg')}}" alt="room">
          <div class="room__card__details">
            <div>
              <h4>Deluxe Suite</h4>
              <p>Well-appointed rooms designed for guests who desire a more.</p>
            </div>
            <h3>$399<span>/night</span></h3>
          </div>
        </div>
        <div class="room__card">
          <img src="{{asset('images/room-2.jpg')}}" alt="room">
          <div class="room__card__details">
            <div>
              <h4>Family Suite</h4>
              <p>Consist of multiple rooms and a common living area.</p>
            </div>
            <h3>$599<span>/night</span></h3>
          </div>
        </div>
        <div class="room__card">
          <img src="{{asset('images/room-3.jpg')}}" alt="room">
          <div class="room__card__details">
            <div>
              <h4>Luxury Penthouse</h4>
              <p>
                Top-tier accommodations usually on the highest floors of a
                hotel.
              </p>
            </div>
            <h3>$799<span>/night</span></h3>
          </div>
        </div>
      </div>
    </section>

    <section class="intro">
      <div class="section__container intro__container">
        <div class="intro__cotent">
          <p class="section__subheader">INTRO VIDEO</p>
          <h2 class="section__header">Meet With Our Luxury Place</h2>
          <p class="section__description">
            Whether you're seeking a cozy and exclusive hideaway or an immersive
            journey beneath the surface, Hotel Miranda promises to be an
            unforgettable stay, where the depths of comfort and excitement await
            your arrival.
          </p>
          <a href="http://127.0.0.1:8000/booking"><button class="btn">Book Now</button></a>

        </div>
        <div class="intro__video">
          <video src="assets/luxury.mp4" autoplay muted loop></video>
        </div>
      </div>
    </section>

    <section class="section__container feature__container" id="feature">
      <p class="section__subheader">FACILITIES</p>
      <h2 class="section__header">Core Features</h2>
      <div class="feature__grid">
        <div class="feature__card">
          <span><i class="ri-thumb-up-line"></i></span>
          <h4>Have High Rating</h4>
          <p>
            We take pride in curating a selection of hotels that consistently
            receive high ratings and positive reviews.
          </p>
        </div>
        <div class="feature__card">
          <span><i class="ri-time-line"></i></span>
          <h4>Quite Hours</h4>
          <p>
            We understand that peace and uninterrupted rest are essential for a
            rejuvenating experience.
          </p>
        </div>
        <div class="feature__card">
          <span><i class="ri-map-pin-line"></i></span>
          <h4>Best Location</h4>
          <p>
            At our hotel booking website, we take pride in offering
            accommodations in the most prime and sought-after locations.
          </p>
        </div>
        <div class="feature__card">
          <span><i class="ri-close-circle-line"></i></span>
          <h4>Free Cancellation</h4>
          <p>
            We understand that travel plans can change unexpectedly, which is
            why we offer the flexibility of free cancellation.
          </p>
        </div>
        <div class="feature__card">
          <span><i class="ri-wallet-line"></i></span>
          <h4>Payment Options</h4>
          <p>
            Our hotel booking website offers a range of convenient payment
            options to suit your preferences.
          </p>
        </div>
        <div class="feature__card">
          <span><i class="ri-coupon-line"></i></span>
          <h4>Special Offers</h4>
          <p>
            Whether you're planning a romantic getaway, or a business trip, our
            carefully curated special offers cater to all your needs.
          </p>
        </div>
      </div>
    </section>

    <section class="menu" id="menu">
      <div class="section__container menu__container">
        <div class="menu__header">
          <div>
            <p class="section__subheader">MENU</p>
            <h2 class="section__header">Our Food Menu</h2>
          </div>
          <div class="section__nav">
            <span><i class="ri-arrow-left-line"></i></span>
            <span><i class="ri-arrow-right-line"></i></span>
          </div>
        </div>
        <ul class="menu__items">
          <li>
            <img src="{{asset('images/menu-1.jpg')}}" alt="menu">
            <div class="menu__details">
              <h4>Fried plantains</h4>
              <p>
                Fried plantains with a rich dipping sauce, also a popular side dish for soups and stews.
              </p>
            </div>
          </li>
          <li>
            <img src="{{asset('images/menu-2.jpg')}}" alt="menu">
            <div class="menu__details">
              <h4>Puff puff
               </h4>
              <p>
              Made from a simple  flour, sugar, yeast, and water, then deep-fry until golden brown.
              </p>
            </div>
          </li>
          <li>
            <img src="{{asset('images/menu-3.jpg')}}" alt="menu">
            <div class="menu__details">
              <h4>Jollof rice</h4>
              <p>
                This rice dish is actually the national dish of Nigeria.
              </p>
              </p>
            </div>
          </li>
          <li>
            <img src="{{asset('images/menu-4.jpg')}}" alt="menu">
            <div class="menu__details">
              <h4>FuFu and Okro soup</h4>
              <p>
                Similar to fufu, eba is a starch ball that’s often served as a side dish for soup
              </p>
            </div>
          </li>
          <li>
            <img src="{{asset('images/menu-5.jpg')}}" alt="menu">
            <div class="menu__details">
              <h4>Suya</h4>
              <p>
                A recipe from the Hausa people, suya is a savory protein dish
              </p>
            </div>
          </li>
          <li>
            <img src="{{asset('images/menu-6.jpg')}}" alt="menu">
            <div class="menu__details">
              <h4>Pepper Soup</h4>
              <p>
                Pepper soup is one of the oldest dishes in Nigerian cuisine, known for its bold, fiery flavor. 
              </p>
            </div>
          </li>
        </ul>
        {{-- <div class="menu__images">
            <img src="{{asset('images/menu-7.jpg')}}" alt="menu">
            <img src="{{asset('images/menu-8.jpg')}}" alt="menu">
            <img src="{{asset('images/menu-9.jpg')}}" alt="menu">
         
        </div> --}}
      </div>
    </section>

   

    @include('partials.footer')


    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="{{asset('js/main.js')}}"></script>
  </body>
</html>
