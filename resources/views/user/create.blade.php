@extends('main')
@section('title', '| Add user')

@section('content')
    
 <div class="row">
     <div class="col-md-8 col-md-offset-2">
	  {{ csrf_field() }}
        <h3>Adauga un nou voluntar in acest oras</h3>
            <hr>
            <br>
                   
                   <form method="POST" action="{{action('UserController@store')}}">
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                     <div class="form-group">
                        <label for="name">Nume</label>
                        <input name="name" id="name" class="form-control">
                      </div>
                      <div class="form-group">
                        <label for="email">Email</label>
                        <input name="email" id="email" class="form-control">
                      </div>
                      <div class="form-group">
                       <!--  <label for="city">Oras</label> -->
                        <input type="hidden" name="city_id" id="city" class="form-control" value='{{$users->city_id}}'>
                      </div>
                      <div class="form-group">
                        <label for="description">Descriere</label>
                        <textarea name="description" id="description" class="form-control"></textarea>
                      </div>
                      <button type="submit" class="btn btn-success btn-block">Ok</button>     
                    </form>                 
 
     </div>
</div>        
@endsection