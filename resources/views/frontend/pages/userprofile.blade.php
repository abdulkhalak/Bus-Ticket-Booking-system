@extends('frontend.master_webpage')

@section('content')

<div class="container">
	<div class="main-body">
		<div class="row">
			<div class="col-lg-4">
				<div class="card">
					<div class="card-body">
						<div class="d-flex flex-column align-items-center text-center">
							<img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="Admin" class="rounded-circle p-1 bg-primary" width="110">
							<div class="mt-3">


								<h2>{{auth('userGuard')->user()->name}}</h2>

								<button class="btn btn-primary">Follow</button>
								<button class="btn btn-outline-primary">Message</button>
							</div>
						</div>
						<hr class="my-4">
						<ul class="list-group list-group-flush">
							<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
								<h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe me-2 icon-inline">
										<circle cx="12" cy="12" r="10"></circle>
										<line x1="2" y1="12" x2="22" y2="12"></line>
										<path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path>
									</svg>Website</h6>
								<span class="text-secondary">https://bootdey.com</span>
							</li>

						</ul>
					</div>
				</div>
			</div>
			<div class="col-lg-8">
				<div class="card">
					<div class="card-body">
						<div class="row mb-3">
							<div class="col-sm-3">
								<h6 class="mb-0">Full Name</h6>
							</div>
							<h6>{{auth('userGuard')->user()->name}}</h6>
						</div>
						<div class="row mb-3">
							<div class="col-sm-3">
								<h6 class="mb-0">Email</h6>
							</div>
							<h6>{{auth('userGuard')->user()->email}}</h6>
						</div>
						<div class="row mb-3">
							<div class="col-sm-3">
								<h6 class="mb-0">Phone</h6>
							</div>
							<div class="col-sm-9 text-secondary">
								<input type="text" class="form-control" value="01733333333">
							</div>
						</div>
						<div class="row mb-3">

							<div class="col-sm-9 text-secondary">

							</div>
						</div>
						<hr>
						<!-- <div class="row mb-3">
							<div class="col-sm-3">
								<h6 class="mb-0">Details</h6>
							</div>

						</div>
						<div class="row">
							<div class="col-sm-3"></div>
							<table class="table table-bordered">
								<thead>
									<tr>
										<th scope="col">Serial</th>
										<th scope="col">From</th>
										<th scope="col">To</th>
										<th scope="col">Seat</th>
										<th scope="col">Total Fare</th>
									</tr>
								</thead>
								<tbody>
									@foreach($userseat as $data)
									<tr>
										<th scope="row">1</th>
										<td>{{ $data->pickupPoint}}</td>
										<td>Otto</td>
										<td>@mdo</td>
										<td>@mdo</td>
									</tr>
									@endforeach
								</tbody>
							</table> -->
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="card">

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	@endsection