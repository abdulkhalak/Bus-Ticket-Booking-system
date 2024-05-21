
@extends('frontend.master_webpage')


@section('content')
<style>
body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
  background-color: #f2f2f2;
}

header {
  background-color: #333;
  color: #fff;
  padding: 20px;
  background-image: url('bus-background.jpg');
  background-size: cover;
  background-position: center;
}

header h1 {
  margin: 0;
}

nav ul {
  list-style-type: none;
  padding: 0;
}

nav ul li {
  display: inline;
  margin-right: 20px;
}

nav ul li a {
  color: #fff;
  text-decoration: none;
}

.contact-section {
  display: flex;
  justify-content: space-between;
  padding: 20px;
  background-image: url('bus-background.jpg');
  background-size: cover;
  background-position: center;
}

.contact-info {
  flex: 1;
  background-color: rgba(255, 255, 255, 0.7);
  padding: 20px;
  border-radius: 10px;
}

.contact-info h2 {
  margin-top: 0;
}

.map-container {
  flex: 1;
  height: 400px;
}

footer {
  background-color: #333;
  color: #fff;
  text-align: center;
  padding: 10px;
  position: fixed;
  bottom: 0;
  width: 100%;
  background-image: url('bus-background.jpg');
  background-size: cover;
  background-position: center;
}

.address,
.contact-details {
  margin-bottom: 20px;
}

.branch {
  border-bottom: 1px solid #ddd;
  padding-bottom: 20px;
  display: flex;
}

.branch p {
  margin: 0;
  padding: 0;
}

.promo-section {
  background-color: #333;
  color: #fff;
  text-align: center;
  padding: 20px;
}

.promo-code {
  font-weight: bold;
  color: yellow;
}

#timer {
  margin-top: 10px;
}

#timer span {
  padding: 5px;
  background-color: #111;
  margin-right: 5px;
  border-radius: 5px;
}

#timer span:last-child {
  margin-right: 0;
}

</style>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us - Bus Ticket Booking System</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <header>
    <h1>Contact Us</h1>
    <nav>
      <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="booking.html">Book Ticket</a></li>
        <li><a href="about.html">About Us</a></li>
      </ul>
    </nav>
  </header>

  <section class="contact-section">
    <div class="contact-info">
      <h2>Dhaka</h2>
      <div class="branch">
        <div class="address">
          <p>Malibagh</p>
          <p>Address: 113 Malibagh DIT Road</p>
        </div>
        <div class="contact-details">
          <p>Phone: 09606444777, 01711612433 (Call Center)</p>
          <p>Mobile:</p>
        </div>
      </div>

      <div class="branch">
        <div class="address">
          <p>Panthapath</p>
          <p>Address: 13/2 Ayesha Shopping Complex</p>
        </div>
        <div class="contact-details">
          <p>Phone: 09606444777, 01711612433 (Call Center)</p>
          <p>Mobile:</p>
        </div>
      </div>

      <div class="branch">
        <div class="address">
          <p>Kallyanpur</p>
          <p>Address: 3/1-KA, South Kallyanpur</p>
        </div>
        <div class="contact-details">
          <p>Phone: 09606444777, 01711612433 (Call Center)</p>
          <p>Mobile:</p>
        </div>
      </div>

      <div class="branch">
        <div class="address">
          <p>Sydabad</p>
          <p>Address: 61/1/B, Brammon Chiron,Sydabad</p>
        </div>
        <div class="contact-details">
          <p>Phone: 09606444777, 01711612433 (Call Center)</p>
          <p>Mobile: 01926699367</p>
        </div>
      </div>

      <div class="branch">
        <div class="address">
          <p>Arambagh</p>
          <p>Address: 167/1 Eden Complex, Arambagh</p>
        </div>
        <div class="contact-details">
          <p>Phone: 09606444777, 01711612433 (Call Center)</p>
          <p>Mobile:</p>
        </div>
      </div>

      <div class="branch">
        <div class="address">
          <p>Abdullahpur (Uttara)</p>
          <p>Address: 7/D,H#20, Sec# 9 ,Uttara</p>
        </div>
        <div class="contact-details">
          <p>Phone: 028956345</p>
          <p>Mobile: 01909104709</p>
        </div>
      </div>

      <div class="branch">
        <div class="address">
          <p>Gabtoli</p>
          <p>Address: Inter District Bus Terminal, Gabtoli, Mirpur</p>
        </div>
        <div class="contact-details">
          <p>Phone: 09606444777, 01711612433 (Call Center)</p>
          <p>Mobile: 01926699348</p>
        </div>
      </div>
    </div>
    <div class="map-container">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29220.012052753983!2d90.36441504052736!3d23.810332000617236!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755f5381d55b4b7%3A0x64a4d6b3d830b668!2sDhaka!5e0!3m2!1sen!2sbd!4v1620705306815!5m2!1sen!2sbd" 
              width="600" 
              height="450" 
              style="border:0;" 
              allowfullscreen="" 
              loading="lazy"></iframe>
    </div>
  </section>

  <div class="promo-section">
    <h2>Special Offer!</h2>
    <p>Use promo code <span class="promo-code">BUS25</span> and get 25% off on your next booking!</p>
    <div id="countdown">
      <p>Hurry! Offer ends in:</p>
      <div id="timer">
        <span id="days"></span>
        <span id="hours"></span>
        <span id="minutes"></span>
        <span id="seconds"></span>
      </div>
    </div>
  </div>

  <footer>
    <p>&copy; 2024 Bus Ticket Booking System</p>
  </footer>

  <script>
    // Set the date we're counting down to
    var countDownDate = new Date("Jun 30, 2024 23:59:59").getTime();

    // Update the countdown every 1 second
    var x = setInterval(function() {

      // Get the current date and time
      var now = new Date().getTime();
      
      // Calculate the remaining time
      var distance = countDownDate - now;
      
      // Calculate days, hours, minutes, and seconds
      var days = Math.floor(distance / (1000 * 60 * 60 * 24));
      var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      var seconds = Math.floor((distance % (1000 * 60)) / 1000);
      
      // Display the result
      document.getElementById("days").innerHTML = days + "d ";
      document.getElementById("hours").innerHTML = hours + "h ";
      document.getElementById("minutes").innerHTML = minutes + "m ";
      document.getElementById("seconds").innerHTML = seconds + "s ";
      
      // If the countdown is over, display text
      if (distance < 0) {
        clearInterval(x);
        document.getElementById("timer").innerHTML = "EXPIRED";
      }
    }, 1000);
  </script>
</body>
</html>

@endsection