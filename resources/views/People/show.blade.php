
@extends('People.layout')
@section('content')
<div class="card">
  <div class="card-header">People</div>
  <div class="card-body">
  
        <div class="card-body">
    <h5 class="card-title">Name: {{ $People->name }}</h5>
    <p class="card-text">Surname: {{ $People->surname }}</p>
    <p class="card-text">Phone: {{ $People->phone }}</p>
    <p class="card-text">Address: {{ $People->address }}</p>
    <p class="card-text">City: {{ $People->city }}</p>
    <p class="card-text">Country: {{ $People->country }}</p>
</div>

  </div>
      
    </hr>
  
  </div>
</div>