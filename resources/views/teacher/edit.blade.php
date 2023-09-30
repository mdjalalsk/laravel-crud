@extends('template')
@section('contain')
<form action="{{ route('teacher.update',$teacher->id) }}" method="Post">
 @method("PUT")
    @csrf
    Name: <br>
    <input type="text" name="name" id="" value="{{ $teacher->name }}" class="form-control"><br>
    Address: <br>
    <input type="text" name="address" id="" value="{{ $teacher->address}}" class="form-control"><br>
    Phone: <br>
    <input type="text" name="phone" id="" value="{{ $teacher->phone }}" class="form-control"><br>
     <button class="btn btn-primary">Submit</button>
</form>
@endsection