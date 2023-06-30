
@extends('People.layout')

@section('content')
<div class="row">
    <div class="col-12 margin-tb">
        <div class="pull-left">
            <h2>Edit</h2>
</div>
<div class="pull-right">
    <a class="btn btn-primary" href="{{route('bula.50216.people.index')}}">Back</a>
</div>
</div>
</div>

@if($errors->any())
<div class="alert alert-danger">
    <strong>Whoops</strong>There were some problems with your input.<br><br>
    <ul>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
</ul>
</div>
@endif

<form action="{{ route('bula.50216.people.update', $People->id) }}" method="POST">

@csrf
@method('PUT')

<div class="row">

<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>Name:</strong>
        <input type="text" name="name" value="{{$People->Name }}"
        class="form-control" placeholder="name">
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>Surname:</strong>
        <input type="text" name="surname" value="{{$People->Surname }}"
        class="form-control" placeholder="surname">
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>phone:</strong>
        <input type="text" name="phone" value="{{$People->phone }}"
        class="form-control" placeholder="phone">
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>Address:</strong>
        <input type="text" name="address" value="{{$People->Address }}"
        class="form-control" placeholder="address">
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>City:</strong>
        <input type="text" name="city" value="{{$People->City }}"
        class="form-control" placeholder="city">
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>Country:</strong>
        <input type="text" name="country" value="{{$People->Country }}"
        class="form-control" placeholder="country">
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12 text-center">
    <button type="submit" class="btn btn-primary">Submit</button>
</div>
</div>
</form>
@endsection