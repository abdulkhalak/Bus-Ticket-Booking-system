@extends('backend.master')
@section('content')


<h1>Details</h1>

<table>
<p>ID: {{ $routeview->id}}</p>
</table>
<p>From: {{ $routeview->from}}</p>
<p>To:{{ $routeview->to}}</p>
<p>Fare: {{ $routeview->fare}}</p>
<p>Type: {{ $routeview->type}}</p>
<p>Bus_ID: {{ $routeview->bus_id}}</p>



@endsection