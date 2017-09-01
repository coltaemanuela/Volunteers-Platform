@extends('main')
@section('title', '| Add City')

@section('content')
    
 <div class="row">
     <div class="col-md-8 col-md-offset-2">
	  {{ csrf_field() }}
        <h3>Adauga un nou oras in reteaua nationala</h3>
            <hr>
            <br>
                   
             <form method="POST" action="{{action('CityController@store')}}">          				 
                 <input type="hidden" name="_token" value="{{ csrf_token() }}">
                     <div class="form-group">
                        <label for="name">Nume Oras:</label>
                        <input name="name" id="name" class="form-control">
                      </div>
                      <div class="form-group">
                        <label for="county">Judet:</label>
                        <input name="county" id="county" class="form-control">
                      </div>                      
                        <button type="submit" class="btn btn-success btn-block">Ok</button>     
                      </form >
                   <br>                      
 
     </div>
</div>        
@endsection