@extends('layouts.master')
@section('content')



   <div class="row" style="padding-top: 50px;">
    	<div class="col s12 m6 l6 offset-l3 offset-m3">
    	<form action="/search" method="get">
		<div class="input-field" class="cyan">
			<input type="text" id="serch" name="search" placeholder="Search People by number......">
				<div class="center">
          <button type="submit" class="btn pink">Search</button>
				</div>
		</div>
		</form>
	</div>
    </div>
    <div class="center">
      @if($message = Session::get('Success'))
     <p class="chip green white-text">{{$message}}</p>
     @endif
    </div>
<div class="row">
    <div class="right" style="padding-right: 20px;">
        <a href="{{ route('people.create') }}" class="pink waves-effect waves-light btn"><i class="material-icons left">add</i>Add New People</a>
    </div>
</div>
    <div class="row" style="padding-top: 0px;">

      <table>
        <thead>
          <tr>
              <th>Image</th>
              <th>Name</th>
              <th>Number</th>
              <th>Hobbieses</th>
              <th>Age</th>
              <th>About</th>
              <th>Action</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            @foreach($peoples as $people)
    <td><div class="user-view">
      <img src="{{ URL::to('/') }}/images/{{$people->image}}" class="circle" width="50" height="60"/>
          <span class="name white-text">Virendra</span>
          <span class="name white-text"></span>
        </div>
    </td>
            <td>{{$people->name}}</td>
            <td>{{$people->phone}}</td>
            <td>{{$people->age}}</td>
            <td>{{$people->hobbies}}</td>
            <td>{{$people->about}}</td>
            <td><a href="{{ route('people.show',$people->id) }}" class="waves-effect waves-light btn blue lighten-5"><span class="black-text">view</span></a></td>

        </tbody>
        @endforeach
      </table>
<span class="blue-text text-darken-2">{{ $peoples->links() }}</span>
    </div>
@endsection

