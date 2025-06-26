@extends('master.layout')

@section('content')
    <div class="grid grid-cols-2 p-20 px-32 gap-x-5 bg-blue-400 h-screen">
        <div class="text-white">
            <h1 class="text-7xl font-bold mb-5"><span class="text-yellow-400 tracking-wider">Convey Your</span><br /> Ideas to
                Us</h1>
            <h2 class="text-xl mb-20 w-2/3">Contact us for questions, technical assistance, or collaboration opportunities
                via the
                contact information
                provided.</h2>

            <div class="flex flex-col space-y-8">
                <div class="flex items-center space-x-6">
                    <i class="fa-solid fa-phone fa-2x"></i>
                    <div>
                        <h3 class="font-semibold text-2xl">Phone</h3>
                        <p class="text-xl">03-369258</p>
                    </div>
                </div>
                <div class="flex items-center space-x-6">
                    <i class="fa-solid fa-calendar-days fa-2x"></i>
                    <div>
                        <h3 class="font-semibold text-2xl">Operating Hour</h3>
                        <p class="text-xl">MONDAY-SATURDAY</p>
                        <p class="text-xl">08:00-17:50</p>
                    </div>
                </div>
                <div class="flex items-center space-x-6">
                    <i class="fa-solid fa-envelope fa-2x"></i>
                    <div>
                        <h3 class="font-semibold text-2xl">E-Mail</h3>
                        <p class="text-xl">iclinic@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <form action={{ route('feedback.store') }} method="POST" class="flex flex-col space-y-5">
                @csrf
                <div>
                    <label for="name" class="text-white font-semibold text-xl">Name</label>
                    <input type="text" name="name" id="name" required class="w-full rounded-md">
                </div>
                <div class="flex space-x-5">
                    <div class="basis-1/2">
                        <label for="email" class="text-white font-semibold text-xl">Email</label>
                        <input type="email" name="email" id="email" required class="w-full rounded-md">
                    </div>
                    <div class="basis-1/2">
                        <label for="phone_number" class="text-white font-semibold text-xl">Phone Number</label>
                        <input type="text" name="phone_number" id="phone_number" required class="w-full rounded-md">
                    </div>
                </div>
                <div>
                    <label for="message" class="text-white font-semibold text-xl">Message</label>
                    <textarea name="message" id="message" cols="30" rows="10" required class="w-full rounded-md"></textarea>
                </div>

                <button type="submit" class="font-semibold text-black rounded-md bg-yellow-500 w-fit py-2 px-6">Submit
                    Now</button>
            </form>
            @if (session('success'))
                <div class="font-semibold text-2xl">{{ session('success') }}</div>
            @endif
        </div>
    </div>
@endsection
