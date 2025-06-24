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

    @if(session('success'))
        <div id="successModal" style="
            position: fixed;
            top: 30px;
            right: 30px;
            background: #4BB543;
            color: #fff;
            padding: 16px 32px;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.15);
            z-index: 9999;
            font-size: 18px;
            display: none;
        ">
            {{ session('success') }}
        </div>
        <script>
            window.onload = function() {
                var modal = document.getElementById('successModal');
                modal.style.display = 'block';
                setTimeout(function() {
                    modal.style.display = 'none';
                }, 3000); // Hide after 3 seconds
            }
        </script>
    @endif
    

    @include('partials.nav')
    <header class=" home" id="home">
        <div class="section__container header__container">
          <p class="section__subheader">Lets get started</p>
          <h1>Booking <br> And  Reservation </h1>
          <a href=""><button class="btn">Book Now</button></a>
        </div>
      </header>
      <section class="room__container" id="room">
        <p class="section__subheader">ROOMS</p>
        <h2 class="section__header">Hand Picked Rooms</h2>
        <div class="reservation__grid">
          <div class="booking__grid">
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
        </div>
          <div class="booking__card">
            <form class="booking__form check-in" action="{{route('booking.store')}}" method="post">
              @csrf
             
                <h2>Check-in Form</h2>
            
                <label for="fullName">Full Name:</label>
                <input type="text" id="fullName" name="fullName" required>
            
                <label for="checkIn">Check-in Date:</label>
                <input type="date" id="checkIn" name="checkIn" required>
            
                <label for="checkOut">Check-out Date:</label>
                <input type="date" id="checkOut" name="checkOut" required>
            
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                <label for="number">Room Type</label>
                <select name="roomType" id="roomType" >
                  <option value="" disabled selected="Room Type"></option>
                  <option value="Single">Single</option>
                  <option value="Double">Double</option>
                  <option value="Suite">Suite</option>
                  <option value="Family">Family</option>
                </select>
                <label for="number">Guest</label>
                <select name="guest" id="guest" >
                  <option value="" disabled selected="Guest"></option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">+3</option>
                </select>
            
                <button type="submit">Submit</button>
              
            </form>
            {{-- <img src="{{asset('images/room-3.jpg')}}" alt="room"> --}}
            {{-- <div class="room__card__details">
              <div>
                <h4>Luxury Penthouse</h4>
                <p>
                  Top-tier accommodations usually on the highest floors of a
                  hotel.
                </p>
              </div>
              <h3>$799<span>/night</span></h3>
            </div> --}}
          </div>
          
        </div>
      </section>
    @include('partials.footer')
    
</body>
</html>