@extends("admin.layout")


@section("main")

<div>
    @if(session('message'))
    <div class="alert alert-danger">
        {{session('message')}}

    </div>
    @endif


</div>
<form method="POST" action="{{ url('loginPost') }}" enctype=multipart/form-data>
    @csrf
    <div class="d-flex align-items-center mb-3 pb-1">
        <i class="fas fa-cubes fa-2x " style="color: #ff6219;"></i>
        <span class="h1 fw-bold mb-0">UKATLIER</span>
    </div>

    <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>

    <div class="form-outline mb-4">
        <input type="email" name="email" id="form2Example17" class="form-control form-control-lg" />
        <label class="form-label" for="form2Example17">Email address</label>
    </div>

    <div class="form-outline mb-4">
        <input type="password" name="password" id="form2Example27" class="form-control form-control-lg" />
        <label class="form-label" for="form2Example27">Password</label>
    </div>

    <div class="pt-1 mb-4">
        <button class="btn btn-dark btn-lg btn-block" name="sub" type="submit">Login</button>
    </div>

    <a class="small text-muted" href="#!">Forgot password?</a>
    <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? <a href="{{ url('register') }}"
            style="color: #393f81;">Register here</a></p>
    <a href="#!" class="small text-muted">Terms of use.</a>
    <a href="#!" class="small text-muted">Privacy policy</a>
</form>



@endsection