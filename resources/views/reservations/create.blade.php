@extends('layouts.app')

@section('title', 'Make a Reservation')

@section('content')
    <!-- Reservation Hero -->
    <section class="relative py-24 bg-cover bg-center bg-no-repeat" style="background-image: url('https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80')">
        <div class="absolute inset-0 bg-black bg-opacity-70"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">Make a Reservation</h1>
            <div class="w-20 h-1 bg-amber-500 mx-auto mb-8"></div>
            <p class="text-xl text-gray-200 max-w-3xl mx-auto">
                Reserve your table for an unforgettable dining experience at Nique Restaurant.
            </p>
        </div>
    </section>

    <!-- Reservation Form -->
    <section class="py-16 px-4 sm:px-6 lg:px-8 bg-white">
        <div class="max-w-3xl mx-auto">
            <!-- Alert Messages -->
            @if(session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-8" role="alert">
                    <div class="flex items-center">
                        <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <p>{{ session('success') }}</p>
                    </div>
                </div>
            @endif

            @if($errors->any())
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-8" role="alert">
                    <div class="font-bold mb-1">Please fix the following errors:</div>
                    <ul class="list-disc list-inside">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="bg-gray-50 p-8 rounded-sm shadow-md">
                <form action="{{ route('reservations.store') }}" method="POST" class="space-y-6">
                    @csrf
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Name -->
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Name *</label>
                            <input type="text" name="name" id="name" value="{{ old('name') }}" required class="block w-full rounded-sm border-gray-300 shadow-sm focus:border-amber-800 focus:ring focus:ring-amber-200 focus:ring-opacity-50">
                        </div>
                        
                        <!-- Email -->
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email *</label>
                            <input type="email" name="email" id="email" value="{{ old('email') }}" required class="block w-full rounded-sm border-gray-300 shadow-sm focus:border-amber-800 focus:ring focus:ring-amber-200 focus:ring-opacity-50">
                        </div>
                        
                        <!-- Phone -->
                        <div>
                            <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">Phone *</label>
                            <input type="tel" name="phone" id="phone" value="{{ old('phone') }}" required class="block w-full rounded-sm border-gray-300 shadow-sm focus:border-amber-800 focus:ring focus:ring-amber-200 focus:ring-opacity-50">
                        </div>
                        
                        <!-- Number of Guests -->
                        <div>
                            <label for="guests" class="block text-sm font-medium text-gray-700 mb-1">Number of Guests *</label>
                            <select name="guests" id="guests" required class="block w-full rounded-sm border-gray-300 shadow-sm focus:border-amber-800 focus:ring focus:ring-amber-200 focus:ring-opacity-50">
                                @for($i = 1; $i <= 20; $i++)
                                    <option value="{{ $i }}" {{ old('guests') == $i ? 'selected' : '' }}>{{ $i }} {{ $i === 1 ? 'person' : 'people' }}</option>
                                @endfor
                            </select>
                            <p class="mt-1 text-xs text-gray-500">For parties larger than 20, please call us directly.</p>
                        </div>
                        
                        <!-- Date -->
                        <div>
                            <label for="date" class="block text-sm font-medium text-gray-700 mb-1">Date *</label>
                            <input type="date" name="date" id="date" value="{{ old('date', date('Y-m-d')) }}" required min="{{ date('Y-m-d') }}" class="block w-full rounded-sm border-gray-300 shadow-sm focus:border-amber-800 focus:ring focus:ring-amber-200 focus:ring-opacity-50">
                        </div>
                        
                        <!-- Time -->
                        <div>
                            <label for="time" class="block text-sm font-medium text-gray-700 mb-1">Time *</label>
                            <select name="time" id="time" required class="block w-full rounded-sm border-gray-300 shadow-sm focus:border-amber-800 focus:ring focus:ring-amber-200 focus:ring-opacity-50">
                                <!-- Lunch Times (Weekends only) -->
                                <optgroup label="Lunch (Sat & Sun only)">
                                    <option value="11:30" {{ old('time') == '11:30' ? 'selected' : '' }}>11:30 AM</option>
                                    <option value="12:00" {{ old('time') == '12:00' ? 'selected' : '' }}>12:00 PM</option>
                                    <option value="12:30" {{ old('time') == '12:30' ? 'selected' : '' }}>12:30 PM</option>
                                    <option value="13:00" {{ old('time') == '13:00' ? 'selected' : '' }}>1:00 PM</option>
                                    <option value="13:30" {{ old('time') == '13:30' ? 'selected' : '' }}>1:30 PM</option>
                                </optgroup>
                                
                                <!-- Dinner Times (All days) -->
                                <optgroup label="Dinner (All days)">
                                    <option value="17:30" {{ old('time') == '17:30' ? 'selected' : '' }}>5:30 PM</option>
                                    <option value="18:00" {{ old('time') == '18:00' ? 'selected' : '' }}>6:00 PM</option>
                                    <option value="18:30" {{ old('time') == '18:30' ? 'selected' : '' }}>6:30 PM</option>
                                    <option value="19:00" {{ old('time') == '19:00' ? 'selected' : '' }}>7:00 PM</option>
                                    <option value="19:30" {{ old('time') == '19:30' ? 'selected' : '' }}>7:30 PM</option>
                                    <option value="20:00" {{ old('time') == '20:00' ? 'selected' : '' }}>8:00 PM</option>
                                    <option value="20:30" {{ old('time') == '20:30' ? 'selected' : '' }}>8:30 PM</option>
                                    <option value="21:00" {{ old('time') == '21:00' ? 'selected' : '' }}>9:00 PM</option>
                                </optgroup>
                            </select>
                        </div>
                    </div>
                    
                    <!-- Special Requests -->
                    <div>
                        <label for="special_requests" class="block text-sm font-medium text-gray-700 mb-1">Special Requests</label>
                        <textarea name="special_requests" id="special_requests" rows="4" class="block w-full rounded-sm border-gray-300 shadow-sm focus:border-amber-800 focus:ring focus:ring-amber-200 focus:ring-opacity-50">{{ old('special_requests') }}</textarea>
                        <p class="mt-1 text-xs text-gray-500">Please let us know about any dietary restrictions, allergies, or special occasions.</p>
                    </div>
                    
                    <!-- Submit Button -->
                    <div class="text-center pt-4">
                        <button type="submit" class="inline-block bg-amber-800 text-white px-8 py-3 rounded-sm hover:bg-amber-900 transition duration-300 uppercase tracking-wide">
                            Reserve Table
                        </button>
                    </div>
                </form>
            </div>
            
            <!-- Contact Information -->
            <div class="mt-12 bg-gray-50 p-8 rounded-sm shadow-md">
                <h3 class="text-xl font-bold mb-4">Reservation Information</h3>
                <div class="space-y-4 text-gray-600">
                    <p>For immediate assistance or large party reservations, please contact us directly:</p>
                    <p class="flex items-center">
                        <i class="fas fa-phone-alt mr-3 text-amber-800"></i> 
                        <a href="tel:+12123456789" class="hover:text-amber-800">+1 (212) 345-6789</a>
                    </p>
                    <p class="flex items-center">
                        <i class="fas fa-envelope mr-3 text-amber-800"></i>
                        <a href="mailto:reservations@niquerestaurant.com" class="hover:text-amber-800">reservations@niquerestaurant.com</a>
                    </p>
                    
                    <div class="border-t border-gray-200 pt-4 mt-4">
                        <h4 class="font-bold mb-2">Hours of Operation</h4>
                        <ul class="space-y-1">
                            <li>Monday - Thursday: 5:30pm - 10:00pm</li>
                            <li>Friday - Saturday: 5:30pm - 11:00pm</li>
                            <li>Sunday: 5:30pm - 9:00pm</li>
                            <li>Lunch (Saturday & Sunday): 11:30am - 2:00pm</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection 