@extends('template')
@section('contain')
<form action="{{ route('teacher.store') }}" method="POST">
    @csrf
    Name: <br>
    <input type="text" name="name" id="" class="form-control"><br>
    Address: <br>
    <input type="text" name="address" id="" class="form-control"><br>
    Phone: <br>
    <input type="text" name="phone" id="" class="form-control"><br>
     <button class="btn btn-primary">Submit</button>
</form>
@endsection