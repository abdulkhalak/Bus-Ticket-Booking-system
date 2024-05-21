@extends('backend.master')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Counter Information</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
    }
    .container {
      max-width: 600px;
      margin: 20px auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    }
    .form-group {
      margin-bottom: 20px;
    }
    .form-group label {
      font-weight: bold;
      margin-bottom: 5px;
      color: #333;
    }
    .form-group input {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }
    .btn {
      display: inline-block;
      padding: 10px 20px;
      background-color: #007bff;
      color: #fff;
      text-decoration: none;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }
    .btn:hover {
      background-color: #0056b3;
    }
    table {
      width: 100%;
      margin-top: 20px;
      border-collapse: collapse;
    }
    th, td {
      border: 1px solid #ddd;
      padding: 10px;
      text-align: center;
    }
    th {
      background-color: #f2f2f2;
    }
    tr:nth-child(even) {
      background-color: #f9f9f9;
    }
    .nav-item {
      list-style: none;
      margin: 0;
      padding: 0;
    }
    .nav-link {
      display: block;
      padding: 10px 20px;
      text-decoration: none;
      color: #333;
      transition: background-color 0.3s;
    }
    .nav-link:hover {
      background-color: #ddd;
      border-radius: 5px;
    }
    .nav-link svg {
      margin-right: 5px;
    }
  </style>
</head>
<body>
<div>
  <ul class="nav">
    <li class="nav-item">
      <a class="nav-link" href="{{route('counter.data')}}">
        <svg class="bi"><use xlink:href="#file-earmark"/></svg>
        Counter Data
      </a>
    </li>
  </ul>
</div>

<div class="container">
  <h2>Counter Information</h2>
  <form action="{{route('counter.store')}}" method="post">
  @csrf
    <div class="form-group">
      <label for="locationID">Location ID:</label>
      <input type="text" id="locationID" name="locationID" required>
    </div>
    <div class="form-group">
      <label for="counterName">Counter Name:</label>
      <input type="text" id="counterName" name="counterName" required>
    </div>
    <div class="form-group">
      <label for="contract">Contract:</label>
      <input type="text" id="contract" name="contract" required>
    </div>
    <input type="submit" value="Submit" class="btn">
  </form>
</div>
</body>
</html>
@endsection
