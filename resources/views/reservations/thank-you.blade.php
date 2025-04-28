@extends('layouts.app')

@section('title', 'Reservation Confirmed')

@section('content')
    <section class="py-24 px-4 sm:px-6 lg:px-8 bg-white">
        <div class="max-w-3xl mx-auto text-center">
            <div class="bg-amber-50 border border-amber-200 rounded-sm p-8 shadow-md">
                <div class="text-amber-800 mb-6">
                    <svg class="h-16 w-16 mx-auto" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                </div>
                
                <h1 class="text-3xl md:text-4xl font-bold mb-4">Thank You for Your Reservation</h1>
                
                @if(session('success'))
                    <p class="text-green-700 font-medium mb-6">{{ session('success') }}</p>
                @endif
                
                <p class="text-gray-600 mb-8">
                    We look forward to welcoming you to Nique Restaurant. 
                    You will receive a confirmation email shortly with the details of your reservation.
                </p>
                
                <div class="bg-white p-6 rounded-sm border border-gray-200 mb-8 inline-block mx-auto text-left">
                    <h3 class="font-bold text-lg mb-4 text-center">Reservation Details</h3>
                    <div class="space-y-2 text-gray-600">
                        <p>If you need to modify or cancel your reservation, please contact us at:</p>
                        <p class="flex items-center justify-center">
                            <i class="fas fa-phone-alt mr-2 text-amber-800"></i> 
                            <a href="tel:+12123456789" class="hover:text-amber-800">+1 (212) 345-6789</a>
                        </p>
                    </div>
                </div>
                
                <div class="flex flex-col sm:flex-row justify-center gap-4">
                    <a href="{{ route('home') }}" class="inline-block bg-amber-800 text-white px-6 py-3 rounded-sm hover:bg-amber-900 transition duration-300 uppercase tracking-wide">
                        Return to Homepage
                    </a>
                    <a href="{{ route('menu.index') }}" class="inline-block border border-amber-800 text-amber-800 px-6 py-3 rounded-sm hover:bg-amber-800 hover:text-white transition duration-300 uppercase tracking-wide">
                        View Our Menu
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection 