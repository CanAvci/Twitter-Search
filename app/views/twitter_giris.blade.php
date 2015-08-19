@extends('layout.master')

@section('content')


<div class="container">
<h3>Search Word ve Max Word Count alanı dışındaki tüm alanlar boş kalabilir..</h3>
	<form action="{{URL::to('tweet')}}" method="POST">

  <div class="form-group">
    <label for="exampleInputEmail1">Consumer Key</label>
    <input type="text" name="consumer_key" class="form-control" id="exampleInputEmail1" >
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Consumer Secret</label>
    <input type="text" name="consumer_secret" class="form-control" id="exampleInputEmail1" >
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Acsess Token</label>
    <input type="text" name="access_token" class="form-control" id="exampleInputEmail1" >
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Access Token Secret</label>
    <input type="text" name="access_token_secret" class="form-control" id="exampleInputEmail1" >
  </div>
 <div class="form-group">
    <label for="exampleInputEmail1">Search Word</label>
    <input type="text" name="search_word" class="form-control" id="exampleInputEmail1" >
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Max Word Count</label>
    <input type="text" name="max_word_count" class="form-control" id="exampleInputEmail1" >
  </div>

  <button type="submit" class="btn btn-default">Search</button>
</form>

</div>

@stop