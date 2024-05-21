@extends('frontend.master_webpage')


@section('content')

<style>
    body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
}

header {
  background-color: #333;
  color: #fff;
  padding: 20px;
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

.about-section {
  padding: 20px;
}

footer {
  background-color: #333;
  color: #fff;
  text-align: center;
  padding: 10px;
  position: fixed;
  bottom: 0;
  width: 100%;
}

</style>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Us - Bus Ticket Booking System</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <header>
    <h1>About Us</h1>
    <nav>
    
    </nav>
  </header>

  <section class="about-section">
    <h2>Our Company</h2>
    <p>Welcome to Bus Ticket Booking System. We are dedicated to providing you with the best bus booking experience.</p>
    <p>Our mission is to make bus travel easy, convenient, and affordable for everyone.</p>
  </section>

  <footer>
    <p>&copy; 2024 Bus Ticket Booking System</p>
  </footer>

  <script src="script.js"></script>
</body>
</html>

@endsection