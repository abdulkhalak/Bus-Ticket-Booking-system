@extends('frontend.master_webpage')


@section('content')
<style>


</style>











<!-- booking 1 -->
<form method="get" action="{{ route('search.form') }}">
  
    <img src="{{ url('/img/carousel-111.jpg') }}">
    <div class="container-fluid booking mt-5 pb-5">
        <div class="container pb-5">
            <div class="bg-light shadow rounded-lg" style="padding: 30px; margin: 5;">
                <h2 class="text-center mb-4 shadow-text" style="color: #728C00;">Book your ticket from the country's best bus operator</h2>
                <div class="row align-items-center" style="min-height: 60px;">
                    <div class="col-md-3">
                        <div class="mb-3 mb-md-0">
                            <label class="text-muted small shadow-text" for="from" style="color: #728C00;">From</label>
                            <select name="from" id="from" class="custom-select px-4" style="height: 50px;">
                                <option selected>Choose...</option>
                                @foreach($locations as $data)
                                <option value="{{$data->name}}">{{$data->name}}</option>
                             @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="mb-3 mb-md-0">
                            <label class="text-muted small shadow-text" for="to" style="color: #728C00;">To</label>
                            <select name="to" id="to" class="custom-select px-4" style="height: 50px;">
                                <option selected>Choose...</option>
                               @foreach($locations as $data)
                               <option value="{{$data->name}}">{{$data->name}}</option>
                             @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="mb-3 mb-md-0">
                      
                            <label class="text-muted small shadow-text" for="date" style="color: #728C00;">Date</label>
                            <div class="date" id="" data-target-input="" style="height: 50px;">
                                <input name="date" id="date" type="date" class="form-control p-4 datetimepicker-input" placeholder="Date" data-target="#date1" data-toggle="datetimepicker" min="{{ date('Y-m-d') }}" />
                            </div>
                           
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="mb-3 mb-md-0">
                            <label class="text-muted small shadow-text" for="type" style="color: #728C00;">Type</label>
                            <select name="type" id="type" class="custom-select px-4" style="height: 50px;">
                                <option selected>Choose...</option>
                                <option value="Ac">Ac</option>
                                <option value="Non Ac">Non Ac</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12 mt-3">
                        <button class="btn btn-primary btn-block" type="submit">Search</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

<style>
    .shadow-text {
        text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
    }
</style>








<!-- booking 1 -->







</div>
</div>
</div>
<!-- <div class="carousel-item">
            <img class="w-100" src="img/carousel-2.jpg" alt="Image">
            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                <div class="p-3" style="max-width: 900px;">


                </div>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
        <div class="btn btn-dark" style="width: 45px; height: 45px;">
            <span class="carousel-control-prev-icon mb-n2"></span>
        </div>
    </a>
    <a class="carousel-control-next" href="#header-carousel" data-slide="next">
        <div class="btn btn-dark" style="width: 45px; height: 45px;">
            <span class="carousel-control-next-icon mb-n2"></span>
        </div>
    </a>
</div>
</div> -->
<!-- Carousel End -->


<!-- Booking Start -->

<!-- Booking End -->


<br>
<br>
<br>
<br>
<!-- Feature Start -->
<div class="container-fluid pb-5">
  <div class="container pb-5">
    <div class="row">
      <div class="col-md-4">
        <div class="d-flex mb-4 mb-lg-0">
          <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-primary mr-3" style="height: 100px; width: 100px;">
            <i class="fa fa-2x fa-money-check-alt text-white"></i>
          </div>
          <div class="d-flex flex-column">
            <h5 class="">Competitive Pricing</h5>
            <p class="m-0">With best price you can afford</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="d-flex mb-4 mb-lg-0">
          <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-primary mr-3" style="height: 100px; width: 100px;">
            <i class="fa fa-2x fa-award text-white"></i>
          </div>
          <div class="d-flex flex-column">
            <h5 class="">Best Services</h5>
            <p class="m-0">24/7 open for your </p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="d-flex mb-4 mb-lg-0">
          <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-primary mr-3" style="height: 100px; width: 100px;">
          <i class="fa fa-2x fa-route mx-auto mb-4"></i>
          </div>
          <div class="d-flex flex-column">
            <h5 class="">Rady to go</h5>

            <p class="m-0">We pick you up and drop you where you say</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Feature End -->


<!-- Destination Start -->
<div class="container-fluid py-5">
  <div class="container pt-5 pb-3">
    <div class="text-center mb-3 pb-3">
      <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Destination</h6>
      <h1>Explore Top Destination</h1>
    </div>
    <div class="row">
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="destination-item position-relative overflow-hidden mb-2">
          <img class="img-fluid" src="img/destination-2.jpg" alt="">
          <div class="destination-overlay text-white text-decoration-none">
            <h5 class="text-white">Dhaka To Rajshahi</h5>
            <span>৳ 800</span>
            <div id="timer1" class="timer">
              <p class="countdown"></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="destination-item position-relative overflow-hidden mb-2">
          <img class="img-fluid" src="img/destination-3.jpg" alt="">
          <div class="destination-overlay text-white text-decoration-none">
            <h5 class="text-white">Dhaka To Barisha</h5>
            <span>৳ 750</span>
            <div id="timer2" class="timer">
              <p class="countdown"></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="destination-item position-relative overflow-hidden mb-2">
          <img class="img-fluid" src="img/destination-1.jpg" alt="">
          <div class="destination-overlay text-white text-decoration-none">
            <h5 class="text-white">Dhaka To Cox's Bazar</h5>
            <span>৳ 1000</span>
            <div id="timer3" class="timer">
              <p class="countdown"></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  // Set the date we're counting down to
  var countDownDate = new Date("Jun 15, 2024 23:59:59").getTime();

  // Update the countdown every 1 second
  var x = setInterval(function() {

    // Get the current date and time
    var now = new Date().getTime();

    // Calculate the remaining time
    var distance = countDownDate - now;

    // Calculate days, hours, minutes, and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    // If the countdown is over, display text
    if (distance < 0) {
      clearInterval(x);
      document.getElementById("timer1").innerHTML = "EXPIRED";
      document.getElementById("timer2").innerHTML = "EXPIRED";
      document.getElementById("timer3").innerHTML = "EXPIRED";
    }

    // Update countdown for each timer
    document.getElementById("timer1").getElementsByClassName("countdown")[0].innerHTML = days + "d " + hours + "h " + minutes + "m " + seconds + "s ";
    document.getElementById("timer2").getElementsByClassName("countdown")[0].innerHTML = days + "d " + hours + "h " + minutes + "m " + seconds + "s ";
    document.getElementById("timer3").getElementsByClassName("countdown")[0].innerHTML = days + "d " + hours + "h " + minutes + "m " + seconds + "s ";
  }, 1000);
</script>

<!-- Destination Start -->



<!--Search ber  -->










<!-- Route end -->



<!-- Service Start -->
<div class="container-fluid py-5">
  <div class="container pt-5 pb-3">
    <div class="text-center mb-3 pb-3">
      <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Services</h6>
      <h1> Services</h1>
    </div>
    <div class="row">
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="service-item bg-white text-center mb-2 py-5 px-4">
          <i class="fa fa-2x fa-route mx-auto mb-4"></i>
          <h5 class="mb-2">Guide</h5>
          <p class="m-0">24/7 open for passenger</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="service-item bg-white text-center mb-2 py-5 px-4">
          <i class="fa fa-2x fa-ticket-alt mx-auto mb-4"></i>
          <h5 class="mb-2">Ticket Booking</h5>
          <p class="m-0">Just click and book</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="service-item bg-white text-center mb-2 py-5 px-4">
          <i class="fa fa-2x fa-hotel mx-auto mb-4"></i>
          <h5 class="mb-2">Your opinion</h5>
          <p class="m-0">Tour opinion is very important to us</p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Service End -->


<!-- Registration Start -->

<!-- Registration End -->




@endsection