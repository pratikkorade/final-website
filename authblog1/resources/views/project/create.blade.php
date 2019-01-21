@extends('layout')

@section('title')
CONTACT PAGE
@endsection

@section('contains')
<div class="container-fluid bg-grey">
<div class="well" style="background-color:red;">
  <h2 class="text-center">CONTACT</h2>
</div>
  <div class="row">
    <div class="col-sm-5">
      <div style='padding:10%;'>
      <p>Contact us and we'll get back to you within 24 hours.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> MUMBAI, INDIA</p>
      <p><span class="glyphicon glyphicon-phone"></span> +91 9898709390</p>
      <p><span class="glyphicon glyphicon-envelope"></span> myemail@gmail.com</p>
    </div>
    </div>
    <div class="col-sm-7">
      <div class="row">
        <br>
        <br>
        <br>
        <form action="/project" method="post">
          @csrf;
          <center>
        <div class="col-sm-6 form-group">

          <input class="form-control" id="fname" name="fname" placeholder="firstName" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="lname" name="lname" placeholder="lastName" type="text" required>
        </div>
        <br>
        <br>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="emailid" name="emailid" placeholder="Email" type="email" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="phoneno" name="phoneno" placeholder="phone no" type="text" required>
        </div>
<textarea class="form-control" id="description" name="description" placeholder="Comment" rows="5" cols="8"></textarea><br>

      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn  btn-lg btn-default " type="submit">Send</button>
    </div>
             </form>
                 </center>
      </div>
    </div>
  </div>
</div>
@endsection
