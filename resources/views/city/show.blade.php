@extends('main')

@section('title', '| View City')

@section('content')
<div class="row" style="padding-bottom: 30px;">
<div class="col-md-2">
<a href="{{action('UserController@userCityCreate', $city->id)}}">ADAUGA VOLUNTAR</a>
</div>
 
</div>
  <div class="row">     
 
    <div class="panel panel-success">
      <div class="panel-heading">
        <h2>Voluntarii din orasul  {{ $city-> name }}, {{$city->county}}</h2>
    </div>
      <div class="panel-body">
       <table class="table">
           <thead>
              <tr>
                <th>Nume</th>
               <!--  <th>Description</th> -->
                <th>Email</th> 
                <th> Contacteaza </th>  
              </tr>
              </thead>
              <tbody >                      
                @foreach ($city->users as $user)                                                                     
                  <tr>                      
                     <td>{{ $user->name }} </td>
                     <!-- <td>{{ $user->description}} </td>  --> 
                      <td>{{ $user->email}} </td>      
                     <td> 
                     <form method="POST" action="{{action('PageController@getContact')}}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                       <input type="hidden" name="useremail" value="{{ $user->email}} ">                      
                        <input type="submit" href="/contact" class="btn btn-default glyphicon glyphicon-envelope" style= "color:green; background-color:green; width: 10px; height: 10px; ">
                       <!--  <a  type="submit" href="{{action('PageController@getContact')}}" class="glyphicon glyphicon-envelope" style= "color:green; width: 10px; height: 10px;"></a> -->
                     </form>
                      
                       </td> 
                  </tr>          
            
                @endforeach                        
                </tbody>
        </table>
    </div>
  </div>
</div>
@endsection
