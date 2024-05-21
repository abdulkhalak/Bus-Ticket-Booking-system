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
  
  </header>

  <section class="contact-section">
    <div class="contact-info">
      <h2>Get in Touch</h2>
      <p>Email: info@busticketbooking.com</p>
      <p>Phone: +123456789</p>
      <p>Address: 123, Bus Station Road, City, Country</p>
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

  <footer>
    <p>&copy; 2024 Bus Ticket Booking System</p>
  </footer>
</body>
</html>














@endsection