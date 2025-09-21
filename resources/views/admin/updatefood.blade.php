@extends('admin.maindesign')

@section('content')

<div class="bg-blue-600 px-6 py-4 " style="text-align: center;">
    <h2 class="text-xl font-semibold text-white"> Add New Food Item</h2>
</div>
<div class="p-2">
@if (session('updatefood'))
<div class="mb-4 bg-green-100 border border-yellow-400 text-yellow-700 px-4 py-4 rounded relative">
    {{ session('updatefood') }}
</div>
@endif

<div style="display: flex; justify-content: center; align-items: center; height: 80vh;">

<form action="" method="POST" enctype="multipart/form-data"
style="display: flex;  margin:auto; gap:10px;
 height:100vh ; width: 800px;">
 @csrf
  <div class="mb-3">
    <input type="text" name="food_name" value="{{$foods->food_name}}" required
    style="padding: 8px; border:1px ; solid; #ccc;  "><br></br>

    <textarea name="food_details"  cols="20" rows="10"
   required
    style="padding: 8px; border:1px ; solid; #ccc;  " >{{$foods->food_details}}
   </textarea>
   <br></br>
<input type="number" name="food_price" value="{{$foods->food_price}}" required
    style="padding: 8px; border:1px ; solid; #ccc;  ">
    <br></br>
    </div>
{{-- <div>
    <h3>old_image</h3>
    <img style="width: 100px" src="{{asset(food_img/'.$foods->food_image')}}" alt="">
</div>
<label style="background-color: greenyellow;" for="updateimage">update image from here</label>
<input type="file" name="food_image" accept="image/*" style="padding: 8px;">--}}
  <button type="submit" class="btn btn-primary">ADD FOOD</button>
</form>
</div>
</div>

@endsection
