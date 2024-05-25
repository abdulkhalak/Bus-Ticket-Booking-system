@extends('backend.master')
@section('content')
<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Customer Name</th>
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">Date</th>
      <th scope="col">Total</th>
      <th scope="col">Status</th>
      <th scope="col">Payment Status</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>

  @foreach ($booking as $key=>$book )
   
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$book->passengerName}}</td>
      <td>{{$book->route->from}}</td>
      <td>{{$book->route->to}}</td>
      <td>{{$book->created_at}}</td>
      <td>{{$book->seats->pluck('fare')->sum()}}</td>
      <td>{{$book->status}}</td>
      <td>{{$book->payment_status}}</td>
      <td>
        <a href="{{route('admin.booking.details',$book->id)}}" class="btn btn-success">View Ticket</a>
      </td>
     
    </tr>

     
  @endforeach
   
  </tbody>
</table>
@endsection