@extends('layout')

@section('title')
EDIT PAGE
@endsection

@section('contains')

  <center>
<div class="row container">
  <BR>
    <BR>
  <div class="container-fluid bg-grey">
  <div class="well" style="background-color:GREEN;">
    <h2 class="text-center">EDIT</h2>
  </div>

  <div class="col-sm-6 form-group">

    <input class="form-control" id="fname" name="fname" placeholder="firstName" type="text" value="{{ $project->firstname}}" disabled>
  </div>
  <div class="col-sm-6 form-group">
    <input class="form-control" id="lname" name="lname" placeholder="lastName" type="text"  value="{{ $project->lastname}}" disabled>
  </div>
  <br>
  <br>
  <div class="col-sm-6 form-group">
    <input class="form-control" id="emailid" name="emailid" placeholder="Email" type="email"  value="{{ $project->emailid }} "disabled>
  </div>
  <div class="col-sm-6 form-group">
    <input class="form-control" id="phoneno" name="phoneno" placeholder="phone no" type="text"  value="{{$project->phoneno }}" disabled>
  </div>
  <br>
<form action="/project/{{$project->id}}" method="post">
     @csrf
     @method('patch')
    <textarea class="form-control" value="{{$project->description}}" id="description" name="description" placeholder="Comment" rows="5" cols="8"></textarea><br>

<div class="row">
  <div class="col-sm-10 form-group">
    <button class="btn  btn-lg btn-default " type="submit">EDIT</button>
</div>
       </form>
       <form action="/project/{{$project->id}}" method="post">
            @csrf
            @method('DELETE')

       <div class="row">
         <div class="col-sm-10 form-group">
           <button class="btn  btn-lg btn-denger " type="submit">DELETE</button>
       </div>
              </form>

</div>
</center>
