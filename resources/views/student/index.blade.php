@extends('template')
@section('contain')
hello indx

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Address</th>
            <th>Mobile</th>
            <th>Subject</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($student as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->name }}</td>
            <td>{{ $item->address }}</td>
            <td>{{ $item->mobile }}</td>
            <td>{{ $item->subject }}</td>
            <td>
                <a class="btn btn-success" href="{{ route('student.show', $item->id) }}">View</a>
                <a class="btn btn-warning" href="{{ route('student.edit', $item->id) }}">Edit</a>
                <form action="{{ route('student.destroy', $item->id) }}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
