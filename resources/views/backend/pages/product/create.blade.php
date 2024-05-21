





<style>
  body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
  background-color: #737CA1;
}

.container {
  max-width: 500px;
  margin: 50px auto;
  padding: 20px;
  background-color: #E3F9A6;
  border-radius: 10px;
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
}

h2 {
  text-align: center;
}

.form-group {
  margin-bottom: 20px;
}

.form-group label {
  display: block;
  font-weight: bold;
  margin-bottom: 5px;
}

.form-group input[type="text"],
.form-group input[type="email"],
.form-group input[type="number"],
.form-group select,
.form-group input[type="date"] {
  width: 100%;
  padding: 10px;
  border: 1px solid #ddd;
  border-radius: 5px;
  box-sizing: border-box;
}

.form-group select {
  appearance: none;
  -webkit-appearance: none;
  background-image: url('data:image/svg+xml;utf8,<svg fill="rgba(0,0,0,0.5)" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 12L6 8h8l-4 4z"/></svg>');
  background-repeat: no-repeat;
  background-position-x: calc(100% - 10px);
  background-position-y: center;
  padding-right: 30px;
}

.form-group input[type="submit"] {
  background-color: #007bff;
  color: #fff;
  border: none;
  border-radius: 5px;
  padding: 10px 20px;
  cursor: pointer;
  transition: background-color 0.3s;
}

.form-group input[type="submit"]:hover {
  background-color: #0056b3;
}

</style>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ticket Booking Form</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
  <h2>Book Your Ticket</h2>
  <form action="#" method="post">
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" id="name" name="name" required>
    </div>
    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" id="email" name="email" required>
    </div>
    <div class="form-group">
      <label for="phone">Phone</label>
      <input type="text" id="phone" name="phone" required>
    </div>
    <div class="form-group">
      <label for="destination">Destination</label>
      <select id="destination" name="destination" required>
        <option value="">Select Destination</option>
        <option value="PABNA TO DHAKA">PABNA TO DHAKA</option>
        <option value="DHAKA TO COXS BAZAR">DHAKA TO COXS BAZAR</option>
        <option value="DHAKA TO CHITTAGONG">DHAKA TO CHITTAGONG</option>
        <option value="DHAKA TO BORISAL">DHAKA TO BORISAL</option>
        <option value="DHAKA TO RAJSHAHI">DHAKA TO RAJSHAHI</option>
        <option value="DHAKA TO KHULNA">DHAKA TO KHULNA</option>
        <option value="DHAKA TO RONGPUR">DHAKA TO RONGPUR</option>
        <option value="DHAKA TO KUMILLA">DHAKA TO KUMILLA</option>
        <option value="DHAKA TO VOLA">DHAKA TO VOLA</option>
        <option value="DHAKA TO CHAPAI">DHAKA TO CHAPAI</option>
      </select>
    </div>
    <div class="form-group">
      <label for="date">Date of Travel</label>
      <input type="date" id="date" name="date" required>
    </div>
    <div class="form-group">
      <label for="num_tickets">Number of Tickets</label>
      <input type="number" id="num_tickets" name="num_tickets" min="1" required>
    </div>
    <div class="form-group">
      <input type="submit" value="Book Now">
    </div>
  </form>
</div>

</body>
</html>
