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
       <th scope="col">customer name</th>
        <th scope="col">customer address</th>
         <th scope="col">customer email</th>
      <th scope="col">food name</th>
      <th scope="col">food description</th>

      <th scope="col">food price</th>
      <th scope="col">order status</th>

    </tr>
  </thead>
  <tbody>
    @foreach ($orders as $order )


    <tr>
      <th scope="row">{{$order->id}}</th>
      <td>{{$order->customer_name}}</td>
      <td>{{$order->customer_address}}</td>
      <td>{{$order->customer_email}}</td>
      <td>{{$order->food_name}}</td>
      <td>{{$order->food_quantity}}</td>
      <td>{{$order->food_price	}}</td>
      <td>{{$order->order_status}}</td>
      <td><button class="btn btn-danger  m-1"><a href="{{route("cancel",$order->id)}}">
         Cancel</a></button>
     <a href="{{ route('delivered',$order->id) }}" class="btn btn-warning m-1">Done</a>
</td>


    </tr>
  @endforeach
  </tbody>
</table>
@endsection
