<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/style.css ')}}">
    <link rel="stylesheet" href="{{asset('css/contact.css ')}}">
    
    <title>ASASSAITA HOTEL</title>
</head>
<body>
    @include('partials.nav')
    <header class=" home" id="home">
        <div class="section__container header__container">
          <p class="section__subheader">Latest update</p>
          <h1>Recent Work And Development </h1>
          <button class="btn">Connect With Us Today</button>
        </div>
      </header>


      <section class="section__container news__container" id="news">
        <div class="news__header">
          <div>
            <p class="section__subheader">UPDATE</p>
            <h2 class="section__header">Upcoming Updates</h2>
          </div>
          <div class="section__nav">
            <span><i class="ri-arrow-left-line"></i></span>
            <span><i class="ri-arrow-right-line"></i></span>
          </div>
        </div>
        <div class="news__grid">
          <div class="news__card">
            <img src="{{asset('images/news-1.jpg')}}" alt="news">
           
            <h4>Exploring Local Culinary Gems: A Foodie's Guide.</h4>
            <p>
              Join Emily as she takes you on a gastronomic adventure through the
              neighborhood surrounding our hotel.
            </p>
          </div>
          <div class="news__card">
            <img src="{{asset('images/news-2.jpg')}}" alt="news">
  
           
            <h4>Balancing Mind, Body, and Soul at Our Hotel.</h4>
            <p>
              Discover holistic spa treatments, fitness facilities, and
              mindfulness practices that will leave you feeling refreshed.
            </p>
          </div>
          <div class="news__card">
              <img src="{{asset('images/news-3.jpg')}}" alt="news">
             
            <h4>Exploring Outdoor Activities Near Our Hotel.</h4>
            <p>
              From hiking and biking trails to water sports and wildlife
              encounters, she highlights ways to experience nature's wonders.
            </p>
          </div>
        </div>
      </section>
  
    @include('partials.footer')
</body>
</html>