@extends('template')
@section('contain')
hello create

<h3>add student</h3>

<div class="container">

    <form action="{{ route('student.store') }}" method="POST">
@csrf
        Name:
        <input type="text" name="name" id="name" class="from-control"> <br>
        Address:
        <input type="text" name="address" id="address" class="from-control"> <br>
        Mobile:
        <input type="text" name="mobile" id="mobile" class="from-control"><br>
        Subjct:
        <input type="text" name="subject" id="subject" class="from-control"><br>

        <button type="submit">Create</button>
    </form>
</div>
@endsection