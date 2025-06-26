@extends('master.layout')
@section('content')
    <!-- Appointment Section -->
    <section id="appointment" class="appointment section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Appointment</h2>
            <p>Book your appointment with ease</p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

          <form action="{{ route('appointment.store') }}" method="post" role="form" >
            @csrf
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <div class="row">
                <div class="col-md-12 form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required="" value="{{ old('name') }}">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 form-group">
                    <input type="number" name="matric_id" class="form-control" id="matric_id" placeholder="Your Staff ID/Matric No" required="" value="{{ old('matric_id') }}">
                </div>
                <div class="col-md-4 form-group mt-3 mt-md-0">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required="" value="{{ old('email') }}">
                </div>
                <div class="col-md-4 form-group mt-3 mt-md-0">
                    <input type="tel" class="form-control" name="phone_no" id="phone" placeholder="Your Phone e.g. 0123456789" required="" value="{{ old('phone_no') }}">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 form-group mt-3">
                    <input type="datetime-local" name="date" class="form-control datepicker" id="date" required="" value="{{ old('date') }}">
                </div>
                <div class="col-md-4 form-group mt-3">
                    <select name="department" id="department" class="form-select" required="">
                        <option value="" selected>Select Department</option>
                        <option value="Department 1" {{ old('department') == 'Department 1' ? 'selected' : '' }}>Department 1</option>
                        <option value="Department 2" {{ old('department') == 'Department 2' ? 'selected' : '' }}>Department 2</option>
                        <option value="Department 3" {{ old('department') == 'Department 3' ? 'selected' : '' }}>Department 3</option>
                    </select>
                </div>
                <div class="col-md-4 form-group mt-3">
                    <select name="doctor" id="doctor" class="form-select" required="">
                        <option value="" selected>Select Doctor</option>
                        <option value="Doctor 1" {{ old('doctor') == 'Doctor 1' ? 'selected' : '' }}>Doctor 1</option>
                        <option value="Doctor 2" {{ old('doctor') == 'Doctor 2' ? 'selected' : '' }}>Doctor 2</option>
                        <option value="Doctor 3" {{ old('doctor') == 'Doctor 3' ? 'selected' : '' }}>Doctor 3</option>
                    </select>
                </div>
            </div>
            <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="What is your symptoms?">{{ old('message') }}</textarea>
            </div>
            <div class="mt-3">
                <div class="text-center"><button type="submit">Make an Appointment</button></div>
            </div>
        </form>


        </div>

    </section><!-- /Appointment Section -->
@endsection
