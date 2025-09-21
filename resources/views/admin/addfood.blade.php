@extends('admin.maindesign')

@section('content')

<div class="bg-blue-600 px-6 py-4 " style="text-align: center;">
    <h2 class="text-xl font-semibold text-white"> Add New Food Item</h2>
</div>
<div class="p-2">
@if (session('success'))
<div class="mb-4 bg-green-100 border border-green-400 text-green-700 px-4 py-4 rounded relative">
    {{ session('success') }}
</div>
@endif

<div style="display: flex; justify-content: center; align-items: center; height: 80vh;">

<form action="{{route('postaddfood')}}" method="POST" enctype="multipart/form-data"
style="display: flex;  margin:auto; gap:10px;
 height:100vh ; width 800px;">
 @csrf
  <div class="mb-3">
    <input type="text" name="food_name" placeholder="food title" required
    style="padding: 8px; border:1px ; solid; #ccc;  "><br></br>

    <textarea name="food_details" placeholder="description" cols="20" rows="10"
   required
    style="padding: 8px; border:1px ; solid; #ccc;  " ></textarea><br></br>
<input type="number" name="food_price" placeholder="price" required
    style="padding: 8px; border:1px ; solid; #ccc;  "><br></br>

  <button type="submit" class="btn btn-primary">ADD FOOD</button>
</form>
</div>
</div>

@endsection
