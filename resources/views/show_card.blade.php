@extends("admin.maindesign")

@section("content")

@if (session('delete'))
<div class="mb-4 bg-green-100 border border-red-400
 text-blue-700 px-4 py-4 rounded relative">
    {{ session('delete') }}
</div>
@endif

@if (session('confirm_order'))
<div class="mb-4 bg-green-100 border border-blue-400
 text-blue-700 px-4 py-4 rounded relative">
    {{ session('confirm_order') }}
</div>
@endif

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">food name</th>
      <th scope="col">food description</th>
      <th scope="col">quantity</th>
      <th scope="col">food price</th>
    </tr>
  </thead>
  <tbody>
@php
    $total_price=0;
@endphp


  @foreach ($card_food_info as $user_card_foods)



    <tr>
      <th scope="row">{{$user_card_foods->id}}</th>
      <td>{{$user_card_foods->food_name}}</td>
      <td>{{$user_card_foods->food_details}}</td>
      <td>{{$user_card_foods->food_quantity}}</td>
      <td>${{$user_card_foods->food_price}}</td>
      <td><button class="btn   m-1"><a href="{{route("removefromcard",$user_card_foods->id)}}"
        onclick="return confirm('are you sure ?')">
         Remove</a></button>

</td>


    </tr>
    @php
$total_price=$total_price + $user_card_foods->food_price;
    @endphp

  @endforeach
  </tbody>
</table>
<h1 class= "m-auto text-center text-danger">Total Price is: ${{ $total_price}}</h1>
<div>
    <form action="{{route('card.confirm')}}" method="POST" class=" text-center m-5">
        @csrf
        <input class="btn text-center" style="background-color: greenyellow" type="submit" value="order_confirmation">
    </form>
</div>
@endsection
