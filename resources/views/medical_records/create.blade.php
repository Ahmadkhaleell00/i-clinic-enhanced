@extends('master.layout')

@section('title', 'Add Medical Record')

@section('content')
<div class="container mt-5">
    <h1>Add Medical Record</h1>

    <form action="{{ route('medical_records.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="full_name" class="form-label">Full Name</label>
            <input type="text" class="form-control" id="full_name" name="full_name" value="{{ old('full_name') }}" required>
            @error('full_name')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="age" class="form-label">Age</label>
            <input type="number" class="form-control" id="age" name="age" value="{{ old('age') }}" required>
            @error('age')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="contact" class="form-label">Contact</label>
            <input type="text" class="form-control" id="contact" name="contact" value="{{ old('contact') }}" required>
            @error('contact')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="medical_history" class="form-label">Medical History</label>
            <textarea class="form-control" id="medical_history" name="medical_history" rows="4" required>{{ old('medical_history') }}</textarea>
            @error('medical_history')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="doctor" class="form-label">Doctor</label>
            <input type="text" class="form-control" id="doctor" name="doctor" value="{{ old('doctor') }}">
            @error('doctor')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-success">Save Record</button>
        <a href="{{ route('medical_records.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
    <form action="{{ route('medical_records.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <!-- Other inputs -->
        <div class="mb-3">
            <label for="image" class="form-label">Upload Image</label>
            <input type="file" class="form-control" id="image" name="image">
        </div>
        <button type="submit" class="btn btn-success">Save Record</button>
    </form>

</div>
@endsection