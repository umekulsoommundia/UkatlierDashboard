@extends("admin.layout2")


@section("main2")


<form method="POST" action="{{url('loginPost')}}" enctype=multipart/form-data>
    @csrf
    <div class="d-flex align-items-center mb-3 pb-1">
        <i class="fas fa-cubes fa-2x " style="color: #ff6219;"></i>

    </div>

    <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px; color:#EF0178; font-size:50px">Add Product</h5>


    <div class="form-outline mb-4">
        <input type="text" name="productName" id="form2Example17" class="form-control form-control-lg" />
        <label class="form-label" style="color:#5F27CC;" for="form2Example17">Product Name</label>
    </div>

    <div class="form-outline mb-4">
        <input type="number" name="productPrice" id="form2Example27" class="form-control form-control-lg" />
        <label class="form-label" style="color:#5F27CC;" for="form2Example27">Product Price</label>
    </div>
    <div class="form-outline mb-4">
        <input type="number" name="productQuantity" id="form2Example27" class="form-control form-control-lg" />
        <label class="form-label" style="color:#5F27CC;" style="color:#5F27CC;" for="form2Example27">Product
            Quantity</label>
    </div>

    <div class="form-outline mb-4">
        <input type="file" name="productImage" id="form2Example27" class="form-control form-control-lg" />
        <label class="form-label" style="color:#5F27CC;" for="form2Example27">Product Image</label>
    </div>

    <div class="form-outline mb-4">
        <input type="file" name="productImage" id="form2Example27" class="form-control form-control-lg" />
        <label class="form-label" style="color:#5F27CC;" for="form2Example27">Product MultiImages</label>
    </div>


    <select  id="category" name="categoryId" required class="form-select">
        <option value="">select Category</option>
        @foreach($category as $c)
        <option value="{{$c->id}}">{{$c->categoryName }}</option>
        @endforeach
    </select>
    <br>
    <select  id="subcate"  required class="form-select">
        <option value="">select sub category</option>
    </select>
    <br>



    <div class="pt-1 mb-4">
        <button class="btn btn-dark btn-lg btn-block" name="sub" type="submit">Add</button>
    </div>

</form>

<script>
$(document).ready(function() {
    $('#category').change(function(e) {
        e.preventDefault();
        var category = $(this).val();
        // alert(category);

        $.ajax({
            type: "POST",
            url: "subCategoryAjax/",
            data: "categoryId=" + category + "&_token = {{csrf_token()}}",

            success: function(response) {
                $('#subcate').html(response);
            }
        });
    });
});
</script>


@endsection