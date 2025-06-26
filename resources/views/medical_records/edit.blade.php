@extends('master.layout')

@section('title', 'Edit Medical Record')

@section('content')
<div class="container mt-5">
    <h1>Edit Medical Record</h1>

    <form action="{{ route('medical_records.update', $record->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="full_name" class="form-label">Full Name</label>
            <input type="text" class="form-control" id="full_name" name="full_name" value="{{ old('full_name', $record->full_name) }}" required>
            @error('full_name')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="age" class="form-label">Age</label>
            <input type="number" class="form-control" id="age" name="age" value="{{ old('age', $record->age) }}" required>
            @error('age')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="contact" class="form-label">Contact</label>
            <input type="text" class="form-control" id="contact" name="contact" value="{{ old('contact', $record->contact) }}" required>
            @error('contact')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="medical_history" class="form-label">Medical History</label>
            <textarea class="form-control" id="medical_history" name="medical_history" rows="4" required>{{ old('medical_history', $record->medical_history) }}</textarea>
            @error('medical_history')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="doctor" class="form-label">Doctor</label>
            <input type="text" class="form-control" id="doctor" name="doctor" value="{{ old('doctor', $record->doctor) }}">
            @error('doctor')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-success">Update Record</button>
        <a href="{{ route('medical_records.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
    <form action="{{ route('medical_records.update', $record->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <!-- Other inputs -->
        <div class="mb-3">
            <label for="image" class="form-label">Upload Image</label>
            <input type="file" class="form-control" id="image" name="image">
            @if($record->image)
                <img src="{{ asset('storage/' . $record->image) }}" alt="Record Image" class="img-thumbnail mt-3" width="150">
            @endif
        </div>
        <button type="submit" class="btn btn-success">Update Record</button>
    </form>

</div>
@endsection