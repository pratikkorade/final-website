@extends('layout')

@section('title')
INFORMATION
@endsection

@section('contains')
<style>

.jumbotron {
  background-color: RGB(249,166,2);
  color: #ffffff;
  font-family: Montserrat, sans-serif;
}
</style>
<div class="container-fluid "style="margin-top:5px;">
  <div class="well" style="background-color:red;">
  <h2 style="background-color:red" class="text-center">INFORMATION</h2>
</div>
      <div class="jumbotron" style=';margin:5% 25%;color:rgba(0, 0,210,);'>
    <a href='/project/{{ $project->id}}'>first name:{{ $project->firstname }}</a>
      <br><br>
      Last Name:{{ $project->lastname }}
      <br><br>
      Phone No:{{ $project->phoneno }}
      <br><br>
      Email Id:{{ $project->emailid }}
      <br><br>
      Comment :    {{ $project->description }}
      </div>

@can('update',$project)
  <button class="btn btn-default btn-lg " style="margin-left:45%"><a class="button" href="/project/{{$project->id}}/edit">EDIT</a></button
        </div>

@endcan
@endsection
