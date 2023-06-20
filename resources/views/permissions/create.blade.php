@extends('layouts.app')

@section('content')

<form action="{{route('permissions.store')}}" method="post">
    @csrf
    <input name="name" class="form-control" required/>
    <input type="submit" class="btn btn-primary" value="Add Permission">
</form>
@endsection