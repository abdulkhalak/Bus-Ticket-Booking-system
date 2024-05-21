@extends('frontend.master_webpage')

@section('content')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bus Routes</title>
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f5f5f5; /* Light gray background */
            font-family: 'Roboto', sans-serif;
        }

        .route-panel {
            border-radius: 15px;
            overflow: hidden;
            transition: transform 0.3s, box-shadow 0.3s;
            background: linear-gradient(135deg, #e3f2fd, #bbdefb); /* Gradient background */
            border: none; /* Remove border */
            margin-bottom: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Soft shadow */
            position: relative; /* Set position to relative */
            padding: 10px; /* Reduced padding */
            width: 100%; /* Full width */
        }

        .route-panel:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2); /* Stronger shadow on hover */
        }

        .route-info p {
            margin: 3px 0; /* Adjust margin */
            font-size: 14px; /* Smaller font size */
            color: #333; /* Dark gray text color */
            font-weight: 500;
        }

        .route-info p i {
            color: #2196f3; /* Blue icons */
            margin-right: 6px; /* Add space between icon and text */
        }

        .route-info strong {
            font-size: 14px; /* Smaller font for Date Time */
            display: block;
            margin-top: 5px;
        }

        .btn-view-seat {
            position: absolute; /* Set position to absolute */
            top: 10px; /* Adjust top position */
            right: 10px; /* Adjust right position */
            background-color: #2196f3; /* Blue color */
            border: none;
            color: white;
            padding: 6px 12px; /* Smaller padding */
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 14px; /* Smaller font size */
            border-radius: 50px; /* Rounded button */
            transition: background-color 0.3s;
        }

        .btn-view-seat:hover {
            background-color: #1976d2; /* Darker blue color on hover */
        }

        .no-routes {
            text-align: center;
            margin-top: 30px;
            font-size: 1.5em;
            color: #333; /* Dark gray text color */
        }
    </style>
</head>

<body>

    <div class="container mt-4">
        @if($verRoutes->count()>0)
            @foreach ($verRoutes as $routeData)
                <div class="card route-panel">
                    <div class="card-body">
                        <div class="route-info">
                            <p><i class="fas fa-map-marker-alt"></i> <span>From: {{ $routeData->from }}</span></p>
                            <p><i class="fas fa-map-marker-alt"></i> <span>To: {{ $routeData->to }}</span></p>
                            <p><i class="fas fa-dollar-sign"></i> <span>Fare: {{ $routeData->fare }}</span></p>
                            <p><i class="fas fa-bus"></i> <span>Type: {{ $routeData->type }}</span></p>
                            <p><i class="fas fa-id-badge"></i> <span>Bus Id: {{ $routeData->bus_id }}</span></p>
                        </div>
                        <a class="btn btn-view-seat" href="{{ route('seat', [$routeData->id, 'date' => request()->date]) }}">View Seat</a>
                        <div class="route-info mt-2">
                            <strong>Date Time:</strong> {{ request()->date }}
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <p class="no-routes">No route found.</p>
        @endif
    </div>

    <!-- Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.2/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.min.js"></script>
</body>

</html>

@endsection
