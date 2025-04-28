@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
    <!-- Contact Hero Section -->
    <section class="relative py-24 bg-cover bg-center bg-no-repeat" style="background-image: url('https://images.unsplash.com/photo-1522336572468-97b06e8ef143?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1769&q=80')">
        <div class="absolute inset-0 bg-black bg-opacity-60"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">Contact Us</h1>
            <div class="w-20 h-1 bg-amber-500 mx-auto mb-8"></div>
            <p class="text-xl text-gray-200 max-w-3xl mx-auto">
                We'd love to hear from you. Reach out with questions, feedback, or to plan your next visit.
            </p>
        </div>
    </section>

    <!-- Contact Information Section -->
    <section class="py-16 px-4 sm:px-6 lg:px-8 bg-white">
        <div class="max-w-6xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                <!-- Contact Information -->
                <div>
                    <h2 class="text-3xl font-bold mb-6">Get in Touch</h2>
                    <div class="w-20 h-1 bg-amber-800 mb-8"></div>
                    
                    <div class="space-y-6 text-gray-600">
                        <div class="flex items-start">
                            <div class="shrink-0 mt-1">
                                <i class="fas fa-map-marker-alt text-amber-800 text-xl w-6"></i>
                            </div>
                            <div class="ml-4">
                                <h3 class="font-bold text-lg mb-1">Location</h3>
                                <address class="not-italic">
                                    123 Gourmet Avenue<br>
                                    New York, NY 10001<br>
                                    United States
                                </address>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="shrink-0 mt-1">
                                <i class="fas fa-clock text-amber-800 text-xl w-6"></i>
                            </div>
                            <div class="ml-4">
                                <h3 class="font-bold text-lg mb-1">Hours</h3>
                                <ul class="space-y-1">
                                    <li>Monday - Thursday: 5:30pm - 10:00pm</li>
                                    <li>Friday - Saturday: 5:30pm - 11:00pm</li>
                                    <li>Sunday: 5:30pm - 9:00pm</li>
                                    <li>Lunch (Sat & Sun): 11:30am - 2:00pm</li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="shrink-0 mt-1">
                                <i class="fas fa-phone-alt text-amber-800 text-xl w-6"></i>
                            </div>
                            <div class="ml-4">
                                <h3 class="font-bold text-lg mb-1">Phone</h3>
                                <p>
                                    <a href="tel:+12123456789" class="hover:text-amber-800">+1 (212) 345-6789</a>
                                </p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="shrink-0 mt-1">
                                <i class="fas fa-envelope text-amber-800 text-xl w-6"></i>
                            </div>
                            <div class="ml-4">
                                <h3 class="font-bold text-lg mb-1">Email</h3>
                                <p>
                                    <a href="mailto:info@niquerestaurant.com" class="hover:text-amber-800">info@niquerestaurant.com</a>
                                </p>
                                <p class="mt-1">
                                    <a href="mailto:reservations@niquerestaurant.com" class="hover:text-amber-800">reservations@niquerestaurant.com</a>
                                </p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="shrink-0 mt-1">
                                <i class="fas fa-share-alt text-amber-800 text-xl w-6"></i>
                            </div>
                            <div class="ml-4">
                                <h3 class="font-bold text-lg mb-2">Follow Us</h3>
                                <div class="flex space-x-4">
                                    <a href="#" class="text-gray-600 hover:text-amber-800">
                                        <i class="fab fa-facebook-f text-xl"></i>
                                    </a>
                                    <a href="#" class="text-gray-600 hover:text-amber-800">
                                        <i class="fab fa-instagram text-xl"></i>
                                    </a>
                                    <a href="#" class="text-gray-600 hover:text-amber-800">
                                        <i class="fab fa-twitter text-xl"></i>
                                    </a>
                                    <a href="#" class="text-gray-600 hover:text-amber-800">
                                        <i class="fab fa-yelp text-xl"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Contact Form -->
                <div>
                    <h2 class="text-3xl font-bold mb-6">Send a Message</h2>
                    <div class="w-20 h-1 bg-amber-800 mb-8"></div>
                    
                    <!-- Alert Messages -->
                    @if(session('success'))
                        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6" role="alert">
                            <div class="flex items-center">
                                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <p>{{ session('success') }}</p>
                            </div>
                        </div>
                    @endif
                    
                    @if($errors->any())
                        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-6" role="alert">
                            <div class="font-bold mb-1">Please fix the following errors:</div>
                            <ul class="list-disc list-inside">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    
                    <form action="{{ route('contact.store') }}" method="POST" class="space-y-6">
                        @csrf
                        
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Name *</label>
                            <input type="text" name="name" id="name" value="{{ old('name') }}" required class="block w-full rounded-sm border-gray-300 shadow-sm focus:border-amber-800 focus:ring focus:ring-amber-200 focus:ring-opacity-50">
                        </div>
                        
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email *</label>
                            <input type="email" name="email" id="email" value="{{ old('email') }}" required class="block w-full rounded-sm border-gray-300 shadow-sm focus:border-amber-800 focus:ring focus:ring-amber-200 focus:ring-opacity-50">
                        </div>
                        
                        <div>
                            <label for="message" class="block text-sm font-medium text-gray-700 mb-1">Message *</label>
                            <textarea name="message" id="message" rows="5" required class="block w-full rounded-sm border-gray-300 shadow-sm focus:border-amber-800 focus:ring focus:ring-amber-200 focus:ring-opacity-50">{{ old('message') }}</textarea>
                        </div>
                        
                        <div>
                            <button type="submit" class="inline-block bg-amber-800 text-white px-6 py-3 rounded-sm hover:bg-amber-900 transition duration-300 uppercase tracking-wide">
                                Send Message
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Map Section -->
    <section class="py-12 px-4 sm:px-6 lg:px-8 bg-gray-50">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold mb-4">Find Us</h2>
                <div class="w-20 h-1 bg-amber-800 mx-auto mb-6"></div>
            </div>
            
            <div class="bg-white p-2 rounded-sm shadow-md">
                <!-- Placeholder for map - in a real implementation, you would use Google Maps or another service -->
                <div class="w-full h-96 bg-gray-200 flex items-center justify-center">
                    <p class="text-gray-600">
                        <!-- In a real implementation, this would be replaced with an actual map -->
                        <i class="fas fa-map-marked-alt text-4xl text-amber-800 mb-4 block"></i>
                        <span class="block mb-2">123 Gourmet Avenue, New York, NY 10001</span>
                        <a href="https://maps.google.com" target="_blank" class="text-amber-800 hover:underline">Open in Google Maps</a>
                    </p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Reservation CTA -->
    <section class="py-16 px-4 sm:px-6 lg:px-8 bg-white">
        <div class="max-w-3xl mx-auto text-center">
            <h2 class="text-3xl font-bold mb-4">Ready to Dine With Us?</h2>
            <div class="w-20 h-1 bg-amber-800 mx-auto mb-8"></div>
            <p class="text-gray-600 mb-8">
                Make a reservation for your next dining experience at Nique Restaurant.
            </p>
            <a href="{{ route('reservations.create') }}" class="inline-block bg-amber-800 text-white px-8 py-3 rounded-sm hover:bg-amber-900 transition duration-300 uppercase tracking-wide">
                Reserve a Table
            </a>
        </div>
    </section>
@endsection 