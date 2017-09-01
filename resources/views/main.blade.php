 <!DOCTYPE html>
<html lang="en">
    @include('partials._head')

  <body>
      @include('partials._navbar')
    
    <div class="container">
     @include('partials._messages')
     @include('partials._sidebar')
    
        @yield('content')
       
        @include('partials._footer')
     </div>
        
              
    @include('partials._javascript')
  
    @yield('scripts')
    
  </body>
</html>