@extends('template')
@section('contain')
<div class="container">

    <form action="{{ route('student.update',  $student->id) }}" method="POST">
@csrf
@method('PUT')
        Name:
        <input type="text" name="name" id="name" class="from-control" value="{{ $student->name }}"> <br>
        Address:
        <input type="text" name="address" id="address" class="from-control" value="{{ $student->address }}"> <br>
        Mobile:
        <input type="text" name="mobile" id="mobile" class="from-control" value="{{ $student->mobile }}"><br>
        Subjct:
        <input type="text" name="subject" id="subject" class="from-control" value="{{ $student->subject }}"><br>

        <button type="submit">update</button>
    </form>
</div>
@endsection