@extends('layouts.app')

@section('title', 'About Us')

@section('content')
    <!-- About Hero Section -->
    <section class="relative py-24 bg-cover bg-center bg-no-repeat" style="background-image: url('https://images.unsplash.com/photo-1470337458703-46ad1756a187?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1769&q=80')">
        <div class="absolute inset-0 bg-black bg-opacity-60"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">Our Story</h1>
            <div class="w-20 h-1 bg-amber-500 mx-auto mb-8"></div>
            <p class="text-xl text-gray-200 max-w-3xl mx-auto">
                Nique Restaurant was founded with a passion for exceptional cuisine and memorable dining experiences.
            </p>
        </div>
    </section>

    <!-- History Section -->
    <section class="py-16 px-4 sm:px-6 lg:px-8 bg-white">
        <div class="max-w-6xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl font-bold mb-6">Our Beginning</h2>
                    <div class="w-20 h-1 bg-amber-800 mb-8"></div>
                    <div class="prose prose-lg text-gray-600">
                        <p>Founded in 2010 by award-winning Chef Michael Laurent, Nique Restaurant quickly established itself as a culinary destination in the heart of the city.</p>
                        <p>What began as a small bistro with just 30 seats has evolved into one of the most celebrated dining establishments in the region, known for its innovative approach to classic cuisine and unwavering commitment to quality.</p>
                        <p>Over the years, we've maintained our original vision: to create a warm, inviting atmosphere where guests can enjoy exceptional food crafted from the finest ingredients.</p>
                    </div>
                </div>
                <div>
                    <img src="https://images.unsplash.com/photo-1565538420870-da08ff96a207?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80" alt="Restaurant interior" class="w-full h-auto rounded-sm shadow-lg">
                </div>
            </div>
        </div>
    </section>

    <!-- Philosophy Section -->
    <section class="py-16 px-4 sm:px-6 lg:px-8 bg-gray-50">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold mb-4">Our Philosophy</h2>
                <div class="w-20 h-1 bg-amber-800 mx-auto mb-8"></div>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    At Nique, we believe that exceptional dining goes beyond just serving delicious food.
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-sm shadow-md">
                    <div class="text-amber-800 mb-4">
                        <i class="fas fa-leaf text-4xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Seasonal Ingredients</h3>
                    <p class="text-gray-600">We source the finest seasonal ingredients from local farmers and producers, ensuring peak flavor and freshness in every dish.</p>
                </div>
                
                <div class="bg-white p-8 rounded-sm shadow-md">
                    <div class="text-amber-800 mb-4">
                        <i class="fas fa-utensils text-4xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Culinary Craftsmanship</h3>
                    <p class="text-gray-600">Our team of skilled chefs combines classical techniques with innovative approaches to create dishes that are both familiar and exciting.</p>
                </div>
                
                <div class="bg-white p-8 rounded-sm shadow-md">
                    <div class="text-amber-800 mb-4">
                        <i class="fas fa-glass-cheers text-4xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Memorable Experiences</h3>
                    <p class="text-gray-600">Every aspect of your visit is thoughtfully considered to create a dining experience that engages all the senses and creates lasting memories.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="py-16 px-4 sm:px-6 lg:px-8 bg-white">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold mb-4">Meet Our Team</h2>
                <div class="w-20 h-1 bg-amber-800 mx-auto mb-8"></div>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    The heart and soul of Nique is our dedicated team of culinary professionals and service staff.
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="text-center">
                    <div class="relative mb-6">
                        <img src="https://images.unsplash.com/photo-1566554273541-37a9ca77b91f?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1180&q=80" alt="Chef Michael Laurent" class="w-full h-80 object-cover rounded-sm">
                    </div>
                    <h3 class="text-xl font-bold mb-1">Michael Laurent</h3>
                    <p class="text-amber-800 font-medium mb-3">Executive Chef & Founder</p>
                    <p class="text-gray-600">Chef Michael brings over 20 years of experience from Michelin-starred restaurants across Europe and the United States.</p>
                </div>
                
                <div class="text-center">
                    <div class="relative mb-6">
                        <img src="https://images.unsplash.com/photo-1581299894007-aaa50297cf16?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1974&q=80" alt="Chef Sophia Chen" class="w-full h-80 object-cover rounded-sm">
                    </div>
                    <h3 class="text-xl font-bold mb-1">Sophia Chen</h3>
                    <p class="text-amber-800 font-medium mb-3">Pastry Chef</p>
                    <p class="text-gray-600">Sophia's innovative desserts combine classic techniques with unexpected flavors, creating the perfect finale to your meal.</p>
                </div>
                
                <div class="text-center">
                    <div class="relative mb-6">
                        <img src="https://images.unsplash.com/photo-1571942676516-bcab84649e44?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=987&q=80" alt="James Holden" class="w-full h-80 object-cover rounded-sm">
                    </div>
                    <h3 class="text-xl font-bold mb-1">James Holden</h3>
                    <p class="text-amber-800 font-medium mb-3">Sommelier</p>
                    <p class="text-gray-600">With an encyclopedic knowledge of wines, James expertly pairs selections from our cellar to complement each dish.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Reservation CTA -->
    <section class="py-16 px-4 sm:px-6 lg:px-8 bg-amber-50">
        <div class="max-w-3xl mx-auto text-center">
            <h2 class="text-3xl font-bold mb-4">Join Us for Dinner</h2>
            <div class="w-20 h-1 bg-amber-800 mx-auto mb-8"></div>
            <p class="text-gray-600 mb-8">
                We'd be honored to have you as our guest. Make a reservation today to experience Nique.
            </p>
            <a href="{{ route('reservations.create') }}" class="inline-block bg-amber-800 text-white px-8 py-3 rounded-sm hover:bg-amber-900 transition duration-300 uppercase tracking-wide">
                Reserve Your Table
            </a>
        </div>
    </section>
@endsection