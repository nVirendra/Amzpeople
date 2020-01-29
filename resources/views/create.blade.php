@extends('layouts.master')
@section('content')
<div class="container">
      <div class="row" style="margin-top:80px">

   

            <div class="col 16 offset-13 m8 offset-m2 s12">
                <div class="card-pannel center blue lighten-5" style="margin-top:0px">
                   <div class="card-panel hoverable">
                   <div class="row">
    <form class="col s12" action="{{ route('people.store') }}" method="post" enctype="multipart/form-data">
        @csrf
      <div class="row">
        <div class="input-field col s6">
          <input name="name" type="text" class="validate required">
          <label for="name">Name</label>
          @error('name')
             <div class="chip red black-text">{{ $message }}</div>
          @enderror
        </div>
        <div class="input-field col s6">
          <input name="phone" type="tel" class="validate required">
          <label for="phone">Number</label>
          @error('phone')
             <div class="chip red black-text">{{ $message }}</div>
          @enderror
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input name="age" type="number" class="validate">
          <label for="age">Age</label>
          @error('age')
             <div class="chip red black-text">{{ $message }}</div>
          @enderror
        </div>
        
    
  
  
        <div class="input-field col s6">
          <input name="hobbies" type="text" class="validate">
          <label for="hobbbies">Hobbies</label>
          @error('hobbies')
             <div class="chip red black-text">{{ $message }}</div>
          @enderror
        </div>
      </div>

      <div class="row">
        <div class="input-field col s12">
          <input name="about" type="text" class="validate">
          <label for="about">About</label>
          @error('about')
             <div class="chip red black-text">{{ $message }}</div>
          @enderror
        </div>
      </div>

      <div class="row">
        <div class="col s12">
          Select Image :
          <div class="input-field inline">
            <div class="file-field input-field">
      <div class="btn blue lighten-5 ">
        <span class="black-text">Choose</span>
        <input type="file" name="image">
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text">
      </div>
      @error('image')
             <div class="chip red black-text">{{ $message }}</div>
          @enderror
</div>
          </div>
        </div>
      </div>

        <div class="center">
          <a href="{{ route('people.index') }}" class="btn blue lighten-5 black-text">Cancel</a>
            <button type="submit"  name="add" class="btn blue lighten-5 black-text">Add People </button>
        </div>
    </form>
  </div>

           </div>
          </div>
        </div>
    </div>
 </div>
@endsection
