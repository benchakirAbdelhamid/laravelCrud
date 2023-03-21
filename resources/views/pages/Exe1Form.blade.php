@extends('layouts.default')
@section('content')

<h3>form1</h3>
<form  action="/homePage" method="post">
    @csrf
    {{-- <input type="hidden" name="_token" value="{{csrf_token()}}"> --}}
    {{-- {{csrf_field()}} --}}
    <div class="row">
      <div class="form-group col-6 lg">
        <label>Nom & Prenom</label>
        <input type="text" class="form-control" name="prenomNom">
        @error('prenomNom')
            <span class="text-danger">{{$message}}</span>
        @enderror
      </div>
      <div class="form-group col-6 lg">
        <label >Email</label>
        <input type="email" class="form-control" name="email">
        @error('email')
        <span class="text-danger">{{$message}}</span>
    @enderror
      </div>
      <div class="form-group col-12 lg">
        <label >password</label>
        <input type="password" class="form-control" name="password">
        @error('password')
        <span class="text-danger">{{$message}}</span>
    @enderror
      </div>

      <button type="submit" class=" mt-4 btn btn-primary">Submit</button>
    
    </div>

</form>


    
@endsection