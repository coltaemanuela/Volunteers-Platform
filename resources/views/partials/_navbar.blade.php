<nav class="navbar navbar-inverse">
   <div class="container-fluid">

    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/"> VOLUNTEERS </a>
    </div>   
   
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="/about">Despre Noi</a></li>
        <li><a href="/city"> Retea Orase si Voluntari</a></li>                   
       <!--  <li><a href="/contact">Contact</a></li> -->
       </ul>
            
<ul class="nav navbar-nav navbar-right">        
     @if(Auth::check())
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Bun venit, {{Auth::user()->name}} !<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="/logout">Logout</a></li>
          </ul>
        </li>
         
     @else      
      <a href="/login" class="btn btn-success">Login</a>       
      @endif    
         
      </ul>         
</nav>