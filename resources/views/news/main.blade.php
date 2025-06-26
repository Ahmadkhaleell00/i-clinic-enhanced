@extends('master.layout')

@section('content')
<section id="home-section" class="home-section">
    <div class="container py-5 d-flex justify-content-center">
        <div class="col-lg-8">
            <!-- Section Title -->
            <h2 class="text-center mb-5" style="font-family: 'Poppins', sans-serif; font-weight: bold; color: #0b7285; text-transform: uppercase;">
                Upcoming Events
            </h2>

            <!-- Event 1: Blood Donation -->
            <div class="card mb-5 shadow-sm" style="border-radius: 15px; overflow: hidden; border: none;">
                <img src="{{ asset('assets/img/blood_donation.jpg') }}" class="card-img-top" alt="Blood Donation" style="height: 250px; object-fit: cover;">
                <div class="card-body" style="background-color: #f8f9fa;">
                    <h5 class="card-title text-center" style="font-family: 'Poppins', sans-serif; font-weight: bold; color: #0b7285;">
                        Blood Donation Campaign
                    </h5>
                    <p class="card-text text-muted text-center" style="font-family: 'Roboto', sans-serif; font-size: 15px;">
                        Join our blood donation campaign to save lives.<br>
                        <strong>Date:</strong> 2-6 January 2025<br>
                        <strong>Time:</strong> 9:00 AM - 4:00 PM<br>
                        <strong>Place:</strong> SHAS Mosque
                    </p>
                    <a href="{{ route('news-form') }}" class="btn btn-primary d-block mx-auto" style="background-color: #0b7285; border: none; font-family: 'Poppins', sans-serif; width: 80%; border-radius: 10px;">
                        Join Us
                    </a>
                </div>
            </div>

            <!-- Event 2: World Kidney Day -->
            <div class="card mb-5 shadow-sm" style="border-radius: 15px; overflow: hidden; border: none;">
                <img src="{{ asset('assets/img/kidney_day.jpg') }}" class="card-img-top" alt="World Kidney Day" style="height: 250px; object-fit: cover;">
                <div class="card-body" style="background-color: #f8f9fa;">
                    <h5 class="card-title text-center" style="font-family: 'Poppins', sans-serif; font-weight: bold; color: #0b7285;">
                        World Kidney Day 2024 Celebration
                    </h5>
                    <p class="card-text text-muted text-center" style="font-family: 'Roboto', sans-serif; font-size: 15px;">
                        Come and join us celebrating World Kidney Day 2024.<br>
                        <strong>Date:</strong> 27 December 2024<br>
                        <strong>Time:</strong> 9:00 AM<br>
                        <strong>Place:</strong> ICC IIUM
                    </p>
                    <a href="{{ route('news-form') }}" class="btn btn-primary d-block mx-auto" style="background-color: #0b7285; border: none; font-family: 'Poppins', sans-serif; width: 80%; border-radius: 10px;">
                        Join Us
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact Us Section -->
    <div class="container">
        <div class="card shadow-sm mb-5" style="border-radius: 15px; background-color: #e3f2fd; padding: 20px;">
            <h3 class="text-center" style="font-family: 'Poppins', sans-serif; font-weight: bold; color: #0b7285;">Contact Us</h3>
            <p class="text-center" style="font-family: 'Roboto', sans-serif; font-size: 14px; color: #6c757d;">We’re here to help you!</p>
            <ul class="list-unstyled text-center">
                <li><strong>Phone:</strong> 03-369258</li>
                <li><strong>Operating Hours:</strong> Monday-Saturday, 08:00-17:50</li>
                <li><strong>Email:</strong> <a href="mailto:iclinic@gmail.com" style="color: #0b7285; text-decoration: none;">iclinic@gmail.com</a></li>
                <li><strong>Address:</strong> International Islamic University Malaysia, Jalan Gombak, 53100 Kuala Lumpur</li>
            </ul>
        </div>
    </div>
</section>
@endsection
