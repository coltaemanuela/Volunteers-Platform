@extends('main')

@section('title', '| Edit User')

@section('content')

        <h3>Edit User</h3>
            <hr>
            <br>
	<div class="row">
	{!! Form::model($user, ['route' => ['user.update', $user->id], 'method' => 'POST']) !!} 
		
 {{--{!! Form::open() !!} --}}
 
        <div class="col-md-8">
			  {{Form::label('name','Name:') }}
                    {{Form::text('name',null, array('class'=>'form-control')) }}
                    
                   <br> 
                    {{Form::label('email','Email:') }}
                    {{Form::email('email',null, array('class'=>'form-control')) }}
                   <br>
					 {{Form::label('password','Password:') }}
                     {{Form::password('password',array('class'=>'form-control')) }}				   

				<br>   
                     {{Form::label('usertype','User type:') }}
						<select class="form-control" name="usertype" >
							 <option value='0'>Admin</option>
							 <option value='1'>NGO</option>
							  <option value='2'>Volunteer</option>
						  </select>
						 
			<br>
			         {{Form::label('city','City:') }}
                    <select class="form-control" name="city" >
						   @foreach($cities as $city)
                                 <option value='{{$city->id}}'>{{$city->name}}</option>
                            @endforeach
							 
					</select>
		</div>
<br>
		<div class="col-md-4">
			<div class="well">
				<dl class="dl-horizontal">
					<dt>Created At:</dt>
					<dd>
                    {{ date('M j, Y h:ia', strtotime($user->created_at)) }} 
                    </dd>
				</dl>

				<dl class="dl-horizontal">
					<dt>Last Updated:</dt>
					<dd>
                {{ date('M j, Y h:ia', strtotime($user->updated_at)) }} 
                    </dd>
				</dl>
				
                <hr>
                
				<div class="row">
					<div class="col-sm-6">
				  {!! Html::linkRoute('user.index', 'Cancel', array($user->id), array('class' => 'btn btn-danger btn-block')) !!}
					</div>
					<div class="col-sm-6">
						{{ Form::submit('Save Changes', ['class' => 'btn btn-success btn-block']) }}
					</div>
				</div>

			</div>
		</div>
		{!! Form::close() !!}
	</div>	

@endsection

