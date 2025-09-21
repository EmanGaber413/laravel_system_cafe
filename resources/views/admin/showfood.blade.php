@extends("admin.maindesign")
@section("content")

@if (session('delete'))
<div class="mb-4 bg-green-100 border border-red-400 text-blue-700 px-4 py-4 rounded relative">
    {{ session('delete') }}
</div>
@endif

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">food name</th>
      <th scope="col">food description</th>
      <th scope="col">food price</th>
      <th scope="col">options</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($foods as $food )


    <tr>
      <th scope="row">{{$food->id}}</th>
      <td>{{$food->food_name}}</td>
      <td>{{$food->food_details}}</td>
      <td>{{$food->food_price}}</td>
      <td><button class="btn btn-danger  m-1"><a href="{{route("deletefood",['id' => $food->id])}}"
        onclick="return confirm('are you sure ?')">
         delete</a></button>
     <a href="{{ route('updatefood', ['id' => $food->id]) }}" class="btn btn-warning m-1">Update</a>
</td>


    </tr>
  @endforeach
  </tbody>
</table>
@endsection
