@extends('frontend.master_webpage')

@section('content')


    <style>
        body {
            background-color: #f5f5f5;
            font-family: 'Roboto', sans-serif;
        }

        .route-panel {
            position: relative;
            width: 100%;
            transition: all 0.6s ease;
            margin-bottom: 20px;
            cursor: pointer;
            background: linear-gradient(135deg, #e3f2fd, #bbdefb);
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .route-panel.collapsed {
            height: 150px; /* Collapsed height */
        }

        .route-panel.expanded {
            height: 300px; /* Expanded height */
        }

        .route-info {
            padding: 15px;
        }

        .route-info p {
            margin: 5px 0;
            font-size: 16px;
            font-weight: 600;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.1);
        }

        .route-info p i {
            color: #1976d2;
            margin-right: 8px;
        }

        .route-info p span {
            color: #ff5722;
            font-weight: bold;
        }

        .btn-view-seat {
            background-color: #4caf50;
            border: none;
            color: white;
            padding: 8px 16px;
            text-align: center;
            text-decoration: none;
            font-size: 14px;
            border-radius: 50px;
            transition: background-color 0.3s;
            position: absolute;
            top: 10px;
            right: 10px;
        }

        .btn-view-seat:hover {
            background-color: #388e3c;
        }

        .additional-info {
            display: none;
            animation: slideIn 0.6s forwards;
            padding: 15px;
            color: #333;
        }

        .route-panel.expanded .additional-info {
            display: block;
        }

        @keyframes slideIn {
            from {
                transform: translateX(-100%);
                opacity: 0;
            }
            to {
                transform: translateX(0);
                opacity: 1;
            }
        }

        .no-routes {
            text-align: center;
            margin-top: 30px;
            font-size: 1.5em;
            color: #333;
        }

        /* Additional text styling */
        .route-info strong {
            color: #1976d2;
            font-size: 18px;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.1);
        }

        .route-info .amenities, .route-info .driver {
            font-size: 14px;
            font-style: italic;
            color: #555;
        }

        .route-info .highlight {
            font-weight: bold;
            color: #ff5722;
        }

        .route-info .date-time {
            font-weight: bold;
            color: #9c27b0;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body>

    <div class="container mt-4">
        @if($verRoutes->count() > 0)
            @foreach ($verRoutes as $routeData)
                <div class="route-panel collapsed" onclick="toggleExpand(this)">
                    <div class="route-info">
                        <p><i class="fas fa-map-marker-alt"></i> From: <span>{{ $routeData->from }}</span></p>
                        <p><i class="fas fa-map-marker-alt"></i> To: <span>{{ $routeData->to }}</span></p>
                        <p><i class="fas fa-dollar-sign"></i> Fare: <span>{{ $routeData->fare }}</span></p>
                        <p><i class="fas fa-bus"></i> Type: <span>{{ $routeData->type }}</span></p>
                        <p><i class="fas fa-id-badge"></i> Bus Id: <span>{{ $routeData->bus_id }}</span></p>
                    </div>
                    <a class="btn btn-view-seat" href="{{ route('seat', [$routeData->id, 'date' => request()->date]) }}">View Seat</a>
                    <div class="additional-info">
                        <p class="date-time"><i class="fas fa-clock"></i> Date: {{ request()->date }}</p>
                        <p class="date-time"><i class="fas fa-clock"></i> Departure Time: {{ date('h:i A', strtotime($routeData->time)) }}</p>
                        <p class="driver"><i class="fas fa-user"></i> Supervisor Name: {{ $routeData->supervisor_name }}</p>
                        <p class="driver"><i class="fas fa-user"></i> Supervisor Phone: {{ $routeData->supervisor_phone }}</p>
                        <p class="amenities"><i class="fas fa-info-circle"></i> Amenities: WiFi, Charging Ports, Water Bottle</p>
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

    <script>
        function toggleExpand(element) {
            element.classList.toggle('collapsed');
            element.classList.toggle('expanded');
        }
    </script>
</body>

</html>

@endsection
