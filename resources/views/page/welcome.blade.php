@extends('layouts.app')
@section('homeActive', '')
@section('domainsActive', '')
@section('content')
<div class="jumbotron">
  <h1>Welcome!</h1>
  <hr class="my-4">
  <p>Here you can analyze the domains</p>  
  <form class="form-inline" method="POST" action="{{ route('domains.store') }}" accept-charset="UTF-8">
    <input name="_token" type="hidden">            
    <div class="form-group mb-2">
      <label for="inputAddress" class="sr-only">address</label>
      <input type="text" class="form-control" id="inputAddress" name="name" placeholder="enter the address" value = "<?= htmlspecialchars($domain ?? "") ?>">
    </div>
    <button type="submit" class="btn btn-primary mb-2">Аnalyze</button>
  </form>  
@endsection