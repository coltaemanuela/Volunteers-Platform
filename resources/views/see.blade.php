
    <!--  $cities = App\User::find(1)->city;-->
    
       @foreach ($users as $user)
         
          <p>Bun venit,{{$user->name}}! </p>
    
        @endforeach
