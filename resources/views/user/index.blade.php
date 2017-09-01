@extends('main')
@section('title', '| All users')

@section('content')
    <div class="row">
      
            
            <div class="col-md-2">
                <a href="{{ route('user.create') }}" class="btn btn-lg btn-block btn-success ">Adauga nou utilizator</a>
            </div>
                 <div class="col-md-12">
                     <hr>
                 </div>
    </div>
     
    <div class="panel panel-success">
            <div class="panel-heading">
             <h3>Toti voluntarii</h3>
          </div>
            <div class="panel-body">
             <table class="table">
                     <thead>
                            <tr>
                                  <th>#</th>
                                  <th>Nume</th>
                                  <th>Tip</th>
                                  <th>Oras</th>
                                  <th>Email</th>
                                  <th>Descriere</th>
                                  <th>Data Inregistrare </th>    
                                  <th></th>        
                              </tr>
                        </thead>
                        <tbody >
                                
                                  @foreach ($users as $user)
                                                                          
                                          <tr>
                                              <td>{{ $user->id}}</td>
                                              <td>{{ $user->name }} </td>
                                              <td>{{ $user->usertype }} </td>
                                              <td>{{ $user->city }} </td>
                                              <td>{{ $user->email }} </td>    
                                              <td>{{ substr($user->description, 0,55 ) }}</td>
                                              <td>{{ date( 'M d, Y H:i', strtotime($user-> created_at)) }}</td>
                                              <td>{!! Html::linkRoute('user.edit','', array($user->id), array('class'=>'glyphicon glyphicon-pencil', )) !!}</td>
                                             <td>{!! Html::linkRoute('user.show','', array($user->id), array('class'=>'glyphicon glyphicon-eye-open', )) !!}</td>
                                          </tr>
                                  @endforeach
                                  
                         </tbody>
                      </table>
            </div>
</div>
@endsection