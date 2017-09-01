@extends('main')
@section('title', '|View User')
    
@section('content')
    <div class="row">  
        <div class="col-md-8">  
            <h2>{{$user->name}}</h2>
            <p class="lead">{{$user->description}}</p>
         <hr>            
        </div>
        <div class="col-md-4">
            <div class="well">
             
             <dl class="dl-horizontal">
                <label>Email</label>
                <p>{{$user->email}}</p>
              </dl>
                
           <dl class="dl-horizontal">
                <label>City</label>
                <p>{{ $user->city->name}}, {{$user->city->county}} </p>
              </dl>
                
              <dl class="dl-horizontal">
               <label>Joined at:</label>
                <p>{{ date( 'M d, Y H:i', strtotime($user-> created_at))}}</p>
              </dl>
                
            <hr>
            <br></br>
             <div class="row">
                <div class="col-md-6">
                {!! Html::linkRoute('user.edit','Edit', array($user->id), array('class'=>'btn btn-primary btn-block')) !!}
                           
                </div>
                <div class="col-md-6">
               {!! Form::open([ 'route'=>['user.destroy', $user->id],'method'=>'DELETE']) !!}
                
               {!! Form::submit('Delete', ['class'=>'btn btn-danger btn-block']) !!}
             {!!Form::close() !!}
                </div>
             </div>
                {{ Html:: linkRoute('user.index', '<< Go back to all NGOs', [], array('class'=>'btn btn-default btn-block')) }}

           </div>
        </div>
  </div>
@endsection