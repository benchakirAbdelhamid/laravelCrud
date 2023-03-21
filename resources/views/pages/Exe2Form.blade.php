@extends('layouts.default')
@section('content')

<h3>form2</h3>
<form  action="/homePage" method="post">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <div class="row">
      <div class="form-group col-6 lg">
        <label>Nom & Prenom</label>
        <input type="text" class="form-control" name="prenomNom">
      </div>
      <div class="form-group col-6 lg">
        <label >Email</label>
        <input type="email" class="form-control" name="email">
      </div>
      <div class="form-group col-12 lg">
        <label >Message</label>
        <textarea class="form-control" name="message" rows="4"></textarea>
      </div>

      <button type="submit" class="btn btn-primary">Submit</button>
    
    </div>

</form>


    
@endsection