@extends('main')
@section('title', '| Contact')
    @section('content')
        <div class="well well-lg">
            <h2>CONTACT</h2>
                <br>
             <h4><strong>VOLUNTEERS ROMANIA</strong></h4>
                <br>
                <div class="row">
                    <div class="col-md-5">
                        <p>Contacteaza voluntari  </p>
                      <!--   <p>Zip code: 4000699, Cluj-Napoca, Cluj County</p>
                        <p>email: contact@volunteers.com </p>
                        <p>Phone:(+4)0700 111 222</p> -->
                    </div>                                       
                </div> <br>

           <!--  <form action="/contact" method="POST"> -->
            <form action=" {{action('PageController@sendEmail')}}" method="POST">
               <input type="hidden" name="_token" value="{{ csrf_token() }}">
                 <div class="form-group">
                    <input id="email" name="email" class="form-control" placeholder="Email" value="{{ $useremail}} ">
                </div>
                <div class="form-group">           
                    <input id="subject" name="subject" class="form-control" placeholder="Subiect">
                </div>
                <div class="form-group">          
                    <textarea id="message"   rows="6" cols="30" name="message" class="form-control" placeholder= "Scrie un mesaj acestui voluntar..."></textarea>
                </div>
                <input type="submit" value="Trimite Mesaj" class="btn btn-success">
            </form>                    
       </div>
    @endsection