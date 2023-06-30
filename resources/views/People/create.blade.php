@extends('People.layout')


@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add new Person</h2>
</div>
<div class="pull-right">
    <a class="btn btn-primary" href="{{ route('bula.50216.people.index') }}">Back</a>
</div>
</div>
</div>
 
@if($errors->any())
<div class="alert alert-danger">
    <strong>Whopps</strong>There were some problems with your input.<br><br>
    <ul>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
</ul>
</div>
@endif
<form action="{{ route('bula.50216.people.store')}}" method="POST">
    @csrf
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" class="form-control" placeholder="name">
</div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Surname:</strong>
                <input type="text" name="surname" class="form-control" placeholder="surname">
</div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>phone:</strong>
                <input type="text" name="phone" class="form-control" placeholder="phone">
</div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Address:</strong>
                <input type="text" name="address" class="form-control" placeholder="address">
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>City:</strong>
                <input type="text" name="city" class="form-control" placeholder="city">
</div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Country:</strong>
                <input type="text" name="country" class="form-control" placeholder="country">
</div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12 text-center">
    <button type="submit" class="btn btn-primary">Submit</button>
</div>
</div>
</form>
@endsection