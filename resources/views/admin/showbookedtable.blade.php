@extends("admin.maindesign")
@section("content")


<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Email</th>
      <th scope="col">number_of_guests</th>
      <th scope="col">time</th>
      <th scope="col">date</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($bookedtables as $bookedtable )
    <tr>
      <th scope="row">{{$bookedtable->id}}</th>
      <td>{{$bookedtable->Email}}</td>
      <td>{{$bookedtable->number_of_guests}}</td>
      <td>{{$bookedtable->time}}</td>
            <td>{{$bookedtable->date}}</td>

      <td><button class="btn btn-danger  m-1"><a href="{{route("cancel",$bookedtable->id)}}">
         Cancel</a></button>
     <a href="{{ route('delivered',$bookedtable->id) }}" class="btn btn-warning m-1">Done</a>
</td>

    </tr>
  @endforeach
  </tbody>
</table>
@endsection
