@extends("admin.layout2")


@section("main2")
@if(session('message'))
    <div class="alert alert-success">
        {{session('message')}}

    </div>
    @endif

<form method="POST" action="{{url('subcategoryPost')}}" enctype=multipart/form-data>
    @csrf
    <div class="d-flex align-items-center mb-3 pb-1">
        <i class="fas fa-cubes fa-2x " style="color: #ff6219;"></i>

    </div>

    <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px; color:#EF0178; font-size:50px">Add Category</h5>


    <div class="form-outline mb-4">
        <input type="text" name="productSubCategory" id="form2Example17" class="form-control form-control-lg" />
        <label class="form-label" style="color:#5F27CC;" for="form2Example17">Product Name</label>
    </div>

    <select name="categoryId" id="category" onChange="categoryChange()" required class="form-select">
        <option value="">select Category</option>
        @foreach($category as $c)
        <option value="{{$c->id}}">{{$c->categoryName }}</option>
        @endforeach
    </select>
<br>


    <div class="pt-1 mb-4">
        <button class="btn btn-dark btn-lg btn-block" name="sub" type="submit">Add</button>
    </div>

</form>



@endsection