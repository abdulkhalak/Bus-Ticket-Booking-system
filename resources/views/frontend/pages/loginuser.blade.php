@extends('frontend.master_webpage')

@section('content')
<div class="container-fluid bg-registration py-5" style="margin: 90px 0;">
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-lg-7 mb-5 mb-lg-0">
                <div class="mb-4">
                    <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Mega Offer</h6>
                    <h1 class="text-white"><span class="text-primary">30% OFF</span> For Jounny</h1>
                </div>
                <p class="text-white">Invidunt lorem justo sanctus clita. Erat lorem labore ea, justo dolor lorem ipsum ut sed eos,
                    ipsum et dolor kasd sit ea justo. Erat justo sed sed diam. Ea et erat ut sed diam sea ipsum est
                    dolor</p>
                
            </div>
            <div class="col-lg-5">
                <div class="card border-0">
                    <div class="card-header bg-primary text-center p-4">
                        <h1 class="text-white m-0">Sign Up Now</h1>
                    </div>
                    <div class="card-body rounded-bottom bg-white p-5">



                    <div class="social-login">
                <button class="btn facebook-btn social-btn" type="button"><span><i class="fab fa-facebook-f"></i> Sign in with Facebook</span> </button>
                <button class="btn google-btn social-btn" type="button"><span><i class="fab fa-google-plus-g"></i> Sign in with Google+</span> </button>
            </div>
            <br>
            <br>


                        <form action="{{route('user.do.login')}}" method="post">
                           
@csrf
                            
                            <div class="form-group">
                                <input name="email" type="email" class="form-control p-4" placeholder="Enter Your Email"  required="required" />
                            </div>
                            <div class="form-group">
                                <input name="password" type="password" class="form-control p-4" placeholder="Enter Your Password"  required="required" />
                            </div>
                            
                            <div>
                                <button class="btn btn-primary btn-block py-3" type="submit">Login</button>
                            </div>
                        </form>











                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection