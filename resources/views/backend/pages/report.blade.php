@extends('backend.master')
@section('content')



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date Range Search</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Datepicker CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="form-group">
            <label for="startDate">Start Date:</label>
            <input type="text" class="form-control" id="startDate">
        </div>
        <div class="form-group">
            <label for="endDate">End Date:</label>
            <input type="text" class="form-control" id="endDate">
        </div>
        <button id="searchBtn" class="btn btn-primary">Search</button>
        <div class="mt-3" id="result"></div>
    </div>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Bootstrap Datepicker JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <!-- Custom Script -->
    <script>
        $(document).ready(function() {
            // Initialize the datepickers
            $('#startDate').datepicker({
                format: 'mm/dd/yyyy',
                autoclose: true
            });
            $('#endDate').datepicker({
                format: 'mm/dd/yyyy',
                autoclose: true
            });

            // Handle the search button click
            $('#searchBtn').click(function() {
                var startDate = $('#startDate').datepicker('getDate');
                var endDate = $('#endDate').datepicker('getDate');

                if (startDate && endDate) {
                    if (startDate <= endDate) {
                        $('#result').text('Searching from ' + $('#startDate').val() + ' to ' + $('#endDate').val());
                    } else {
                        $('#result').text('End date must be after the start date.');
                    }
                } else {
                    $('#result').text('Please select both start and end dates.');
                }
            });
        });
    </script>
</body>
</html>


<div class="container">
      <div class="row">
      <div class="card col text-dark bg-warning mb-3 mr-3 mt-5" style="max-width: 20rem;">
          <div class="card-header">Total passanger</div>
          <div class="card-body">
            <h5 class="mb-2">{{$bookseats}}</h5>
           
            <p class="card-text"></p>
          </div>
        </div>
        
        <div class="card col text-dark bg-primary mb-3 mr-3 mt-5" style="max-width: 20rem;">
          <div class="card-header">Total Seat</div>
          <div class="card-body">
            <h5 class="card-title">{{$seats}}</h5>
            <p class="card-text"></p>
          </div>
        </div>

        <div class="card text-dark bg-danger mb-3 mr-3 mt-5" style="max-width: 20rem;">
          <div class="card-header">Total Ammount</div>
          <div class="card-body">
            <h5 class="card-title">{{$totalFare}}</h5>
            <p class="card-text"></p>
          </div>
        </div>

        <!-- <div class="card text-dark bg-success mb-3 mr-3 mt-5" style="max-width: 20rem;">
          <div class="card-header"></div>
          <div class="card-body">
            <h5 class="card-title"></h5>
            <p class="card-text"></p>
          </div>
        </div> -->
  </div>
@endsection