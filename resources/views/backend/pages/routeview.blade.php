@extends('backend.master')
@section('content')

<div class="container">
    <div class="row">
        <div class="col">
            <h1>Details</h1>

            <table>
                <p>ID: {{ $routeview->id}}</p>
            </table>
            <p>From: {{ $routeview->from}}</p>
            <p>To:{{ $routeview->to}}</p>
            <p>Supervisor Name:{{ $routeview->supervisor_name}}</p>
            <p>Supervisor Phone:{{ $routeview->supervisor_phone}}</p>
            <p>Date:{{ $routeview->date}}</p>
            <p>Departure:{{ $routeview->time}}</p>
            <p>Fare: {{ $routeview->fare}}</p>
            <p>Type: {{ $routeview->type}}</p>
            <p>Bus_ID: {{ $routeview->bus_id}}</p>



        </div>
    </div>
</div>



@endsection