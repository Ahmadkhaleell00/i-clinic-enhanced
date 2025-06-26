@extends('master.layout')

@section('title', 'Medical Records')

@section('content')
<div class="container mt-5">
    <h1 class="text-2xl font-semibold mb-5">Medical Records</h1>
    <a href="{{ route('medical_records.create') }}" class="btn btn-primary mb-3">Add New Record</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Full Name</th>
                <th>Age</th>
                <th>Contact</th>
                <th>Doctor</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($records as $record)
            <tr>
                <td>{{ $record->id }}</td>
                <td>{{ $record->full_name }}</td>
                <td>{{ $record->age }}</td>
                <td>{{ $record->contact }}</td>
                <td>{{ $record->doctor }}</td>
                <td>
                    <a href="{{ route('medical_records.edit', $record->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('medical_records.destroy', $record->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
   
</div>
@endsection