@extends('master.layout')

@section('content')
<div class="container mt-5">
    <!-- Form Title -->
    <h1 class="text-center mb-4" style="font-family: 'Poppins', sans-serif; color: #0056b3; font-size: 1.8rem;">User Information Form</h1>

    <!-- Display Success Message -->
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert" style="border-radius: 8px;">
            <strong>Success!</strong> {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <!-- Form Card -->
    <div class="card shadow-sm" style="border-radius: 12px; background-color: #f8f9fa;">
        <div class="card-body">
            <h5 class="card-title text-center mb-4" style="font-family: 'Poppins', sans-serif; color: #333; font-size: 1.2rem;">Fill Your Information</h5>
            <form action="{{ route('news.store') }}" method="POST">
                @csrf
                <!-- Name Input -->
                <div class="mb-3">
                    <label for="name" class="form-label" style="font-weight: 500; font-size: 0.9rem;">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter your full name" style="border-radius: 8px;" required>
                </div>
                <!-- Email Input -->
                <div class="mb-3">
                    <label for="email" class="form-label" style="font-weight: 500; font-size: 0.9rem;">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" style="border-radius: 8px;" required>
                </div>
                <!-- Phone Input -->
                <div class="mb-3">
                    <label for="phone" class="form-label" style="font-weight: 500; font-size: 0.9rem;">Phone Number</label>
                    <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter your phone number" style="border-radius: 8px;" required>
                </div>
                <!-- Address Input -->
                <div class="mb-3">
                    <label for="address" class="form-label" style="font-weight: 500; font-size: 0.9rem;">Address</label>
                    <textarea class="form-control" id="address" name="address" rows="3" placeholder="Enter your address" style="border-radius: 8px;" required></textarea>
                </div>
                <!-- Submit Button -->
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary" style="border-radius: 8px;">Submit</button>
                </div>
            </form>
        </div>
    </div>

    <hr class="my-5" style="border: 1px solid #0056b3;">
</div>
@endsection
