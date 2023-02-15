



@extends("admin.layout")


@section("main")


<div  style="display:flex;  justify-content:space-around;
  flex-wrap: wrap; margin-bottom:10px;
">


@foreach($pro as $p)

<div class="card-group" >
  <div class="card"  >
    
    
    <img src="../images/{{$p->productImage}}" style=" height:300px; width:400px" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{$p->productName}}</h5>
      <p class="card-text">{{$p->productPrice}}</p>

      <p class="card-text">{{$p->productQuantity}}</p>
      <a href="{{url('car/'.$p->id.'/edit')}}" class="btn btnsearch2">edit</a>
      <a href="{{url('car/'.$p->id.')}}" class="btn btnsearch2">delete</a>
      <a href="more" class="btn btnsearch2">view more</a>

      
    </div>
    
  </div>
</div>




@endforeach

</div>










@if(session('msg'))
<script> alert (" {{session('msg')}}")</script>
@endif





@endsection