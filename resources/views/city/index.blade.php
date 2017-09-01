@extends('main')
@section('title', '| Toate Orasele')

@section('content')
    <div class="row">
                  
            <div class="col-md-2">
             <a href="{{ route('city.create') }}" class="btn btn-lg btn-success ">Adauga Oras</a> 
            </div>
                 <div class="col-md-12">
                     <hr>
                 </div>
    </div>
     
    <div class="panel panel-success">
            <div class="panel-heading">
             <h3>Toate orasele din retea</h3>
          </div>
            <div class="panel-body">
             <table class="table">
                     <thead>
                            <tr>
                                  <th>#</th>
                                  <th>Nume</th>
                                  <th>Judet</th> 
                                  <th>Vezi Voluntarii <br/> din acest oras</th>
                                  <th></th>         
                              </tr>
                        </thead>
                        <tbody >
                                
                                  @foreach ($cities as $city)
                                                                          
                                          <tr>
                                            <td>{{ $city->id}} </td>   
                                            <td>{{ $city->name }} </td>
                                            <td>{{ $city->county }} </td>
                                            <td><a href="{{route('city.show', $city->id)}}" class="glyphicon glyphicon-eye-open" style="color:green;"></a></td>
<!--                                             <td><a href="{{route('city.destroy', $city->id)}}" class="glyphicon glyphicon-trash" style= "color:green; "></a></td>
                                             -->
                                          </tr>             
                                  @endforeach
                                  
                        </tbody>
                </table>
             </div>
        </div>
 
@endsection