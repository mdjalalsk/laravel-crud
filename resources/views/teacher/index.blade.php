@extends('template')
@section('contain')
<button class="btn btn-success"><a class="text-white text-decoration-none " href="{{ route('teacher.create') }}">Add teacher</a></button>
<table class="table">
 <thead>
    <td>id</td>
    <td>name</td>
    <td>address</td>
    <td>phone</td>
    <td>action</td>
 </thead>
 @foreach ( $teacher as $t)
 <tbody>
    <td>{{ $t->id }}</td>
    <td>{{ $t->name }}</td>
    <td>{{ $t->address }}</td>
    <td>{{ $t->phone }}</td>
    <td class="d-flex gap-2">
        <button class="btn btn-warning "><a class="text-decoration-none" href="{{ route('teacher.edit',$t->id) }}">edit</a></button>
          <form action="{{ route('teacher.destroy',$t->id )}}" method="POST">
             @method('delete')
            @csrf
            <button class="btn btn-danger">Delete</button>
        </form>
      
    </td>
 </tbody>
 @endforeach
</table>


@endsection