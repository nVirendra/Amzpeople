@extends('layouts.master')
@section('content')
<div class="container">
      <div class="row" style="margin-top:80px">

            <div class="col 16 offset-13 m8 offset-m2 s12">
                <div class="card-pannel center blue lighten-5" style="margin-top:0px">
                   <div class="card-panel hoverable">
                   <div class="row">
                   	<img src="{{ URL::to('/') }}/images/{{$data->image}}" class="circle" width="60" height="60"/>
                   	<h5><span >name :</span>{{ $data->name }}</h5>
                   	<h5><span > phone:</span>{{ $data->phone }}</h5>
                    <h5><span >hobbies :</span>{{ $data->hobbies }}</h5>
                    <h5><span >age :</span>{{ $data->age }}</h5>
                    <h5><span >about :</span>{{ $data->about }}</h5>
                   <a href="{{ route('people.index') }}" class="btn pink">Cancel</a>

                   </div>

           </div>
          </div>
        </div>
    </div>
 </div>@endsection

	