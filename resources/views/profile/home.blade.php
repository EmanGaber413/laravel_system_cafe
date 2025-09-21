@extends('profile.main')

@section('home')


@if (session('card_message'))
<div class="mb-4 bg-green-100 border border-green-400 text-green-700 px-4 py-4 rounded relative">
    {{ session('card_message') }}
</div>
@endif
 <div class="row p-3 m-5">
    @foreach ($foods as $food )


                    <div class="col-md-4">
                        <div class="card bg-transparent border my-3 my-md-0">
                            <img src="{{asset('food_img/'.$food->food_image)}}" alt="{{$food->food_image}}" class="rounded-0 card-img-top mg-responsive">
                            <div class="card-body">
                                <h1 class="text-center mb-4"><a href="#" class="badge badge-primary">{{$food->food_price}}</a></h1>
                                <h4 class="pt20 pb20">{{$food->food_name}} </h4>
                                <p class="text-white">{{$food->food_details}}</p>
                            </div>
<form action="{{route('addtocard')}}"  method="POST" >
 @csrf
  <div class="mb-2">
    <input type="hidden" name="food_id" value="{{$food->id}}"
    style="padding:8px; border:1px ; solid; #ccc;  ">
    <div class="form-group m-5 " style="">
        <label for="quantity" class="text-white">Quantity:</label>
        <input type="number" class="form-control" id="quantity" name="quantity" value="1" min="1"
        style="background-color:blue color:beige">
    </div>
<div class="row  justify-content-center m-2">
  <button type="submit" class="btn btn-primary  gap-2">
<i class="fas fa-shopping-cart"></i>
    Add To Cart</button></div>

</form>
                        </div>
                    </div>
</div>
                @endforeach

@endsection
