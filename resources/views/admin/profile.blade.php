@extends("admin.layout2")


@section("main2")



<div class="d-flex align-items-center mb-3 pb-1">
    <i class="fas fa-cubes fa-2x " style="color: #ff6219;"></i>
    <span class="h1 fw-bold mb-0"  style="color:#EF0178; font-size:80px">UKATLIER</span>
</div>

<h2 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px; color:#FFFFFF;">User Profile</h2>

<div class="form-outline mb-4">

    <label class="form-label" style="color:#5F27CC;" for="form2Example17">Email address</label>

    @if(session('email'))
    <h4 style="color:#EF0178;">
        {{session('email')}}
    </h4>
    @endif
</div>

<div class="form-outline mb-4">
  
    <label class="form-label" for="form2Example27" style="color:#5F27CC;">Password</label>   
     @if(session('password'))
    <h4 style="color:#EF0178;" >
        {{session('password')}}
    </h4>
    @endif
</div>

<div class="pt-1 mb-4">
    <button class="btn  btn-lg btn-block" style="background-color:#EF0178; color:#FFFFFF" name="sub">Edit Profile</button>
</div>



@endsection