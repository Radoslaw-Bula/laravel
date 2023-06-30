@extends('People.layout')

@section('content')

<div class="pull-left">
    <h2>People CRUD</h2>
</div>
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-right">

        <a class="btn btn-success" href="{{ route('bula.50216.people.create') }}"> Add new Person</a>
</div>
</div>
</div>

@if ($message=Session::get('success'))
<div class="alert alert-success">
    <p>{{$message}}</p>
</div>

@endif

<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>Name</th>
        <th>Surname</th>
        <th>phone</th>
        <th>Address</th>
        <th>City</th>
        <th>Country</th>
        <th width="280px">Action</th>
</tr>
@foreach ($People as $item)
<tr>
    <td>{{ $loop->iteration}}</td>
    <td>{{ $item->name}}</td>
    <td>{{ $item->surname}}</td>
    <td>{{ $item->phone}}</td>
    <td>{{ $item->address}}</td>
    <td>{{ $item->city}}</td>
    <td>{{ $item->country}}</td>
    <td>
        <form action="{{ route('bula.50216.people.destroy', $item->id) }}" method="POST">


        
        <a class="btn btn-info" href="{{ route('bula.50216.people.show', $item->id) }}">Show</a>

        <a class="btn btn-primary" href="{{ route('bula.50216.people.edit', $item->id) }}">Edit</a>

        

        @csrf

        @method('DELETE')

        <button type="submit" class="btn btn-danger">Delete</button>
</form>
</td>
</tr>

@endforeach
</table>
