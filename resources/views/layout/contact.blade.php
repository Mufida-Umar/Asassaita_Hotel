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
    <title>Contact</title>
</head>




<body>
    @include('partials.nav')

    <header class=" home" id="home">
        <div class="section__container hero_header header__container">
          {{-- <p class="section__subheader">ABOUT US</p> --}}
          <h1 class="hero_header">We listen to all our customers. </h1>
        </div>
      </header>
  
 

  <section class="contact-container">
    <!-- Contact Form -->

    <h2></h2>
    <h2 class="contact-name">Contact Us Today </h2>
    <div class="contact-form">

      <form class="contact-form-input" action="#" method="post">

        <div class="form-group">
         
        </div>
        <div class="contact-form-group">
          <input class="contact-page-input" type="text" name="first_name" placeholder="First name" required autocomplete="off" >
          <input class="contact-page-input" type="text" name="surname" placeholder="Surname" required autocomplete="off" >
          <input class="contact-page-input" type="email" name="email" placeholder="Email" required autocomplete="off" >
          <input class="contact-page-input"  type="tel" name="phone-number" placeholder="Phone No." required autocomplete="off" >
        </div>
        <div class=" mgs contact-form-group">
          <textarea name="message" placeholder="Message" rows="5" required></textarea>
        </div>
      </form>
      <button class="btn" type="submit">Submit</button>
    </div>

    <div class="contact-box">
      <a href="" class="box-container">+234122334455</a>
      <a href="" class="box-container">example@gmail.com</a>
      <a href="" class="box-container">Piyanku around fly over keffi, nasarawa state</a>
    </div>

    <!-- Contact Info -->
  
    </div>
</section>





 


  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

  <script src="{{ asset('layout/script.js') }}"></script>

  <script>
    document.addEventListener("DOMContentLoaded", function () {
      const whatsappBtn = document.getElementById("whatsapp-btn");
      if (whatsappBtn) {
        whatsappBtn.addEventListener("click", function () {
          window.open("https://wa.me/2348137627905", "_blank");
        });
      }
  
      const emailBtn = document.getElementById("email-btn");
      if (emailBtn) {
        emailBtn.addEventListener("click", function () {
          window.location.href = "mailto:goldeneggsestate@gmail.com";
        });
      }
    });
  </script>
  

    @include('partials.footer')


</body>
</html>