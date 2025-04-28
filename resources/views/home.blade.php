@extends('layouts.app')

@section('title', 'Fine Dining Restaurant')

@section('content')
    <!-- Hero Section -->
    <section class="relative">
        <!-- Hero Image -->
        <div class="h-screen bg-cover bg-center bg-no-repeat" style="background-image: url('https://images.unsplash.com/photo-1592861956120-e524fc739696?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80')">
            <div class="absolute inset-0 bg-black bg-opacity-50"></div>
            <div class="absolute inset-0 flex items-center justify-center">
                <div class="text-center px-4 sm:px-6 lg:px-8">
                    <h1 class="text-4xl md:text-6xl font-bold text-white mb-4">Nique Restaurant</h1>
                    <p class="text-xl md:text-2xl text-gray-200 mb-8">Fine dining & exceptional experience</p>
                    <div class="flex flex-col sm:flex-row justify-center gap-4">
                        <a href="{{ route('menu.index') }}" class="bg-amber-800 text-white px-8 py-3 rounded-sm hover:bg-amber-900 transition duration-300 uppercase tracking-wide">
                            View Menu
                        </a>
                        <a href="{{ route('reservations.create') }}" class="bg-transparent border-2 border-white text-white px-8 py-3 rounded-sm hover:bg-white hover:text-amber-900 transition duration-300 uppercase tracking-wide">
                            Reservations
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="py-16 px-4 sm:px-6 lg:px-8 bg-white">
        <div class="max-w-5xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">Our Story</h2>
                <div class="w-20 h-1 bg-amber-800 mx-auto mb-8"></div>
                <p class="text-lg text-gray-600 mb-8 leading-relaxed">
                    Founded in 2010, Nique Restaurant has been serving exceptional cuisine in a sophisticated atmosphere. 
                    Our award-winning chef combines classic techniques with innovative ideas to create dishes that are 
                    both familiar and exciting. We believe in using only the freshest, locally-sourced ingredients to 
                    create an unforgettable dining experience.
                </p>
                <a href="{{ route('about') }}" class="inline-block border border-amber-800 text-amber-800 px-6 py-3 rounded-sm hover:bg-amber-800 hover:text-white transition duration-300 uppercase tracking-widest text-sm">
                    Learn More
                </a>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="aspect-w-3 aspect-h-2">
                    <img src="https://images.unsplash.com/photo-1581349485608-9469926a8e5e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=764&q=80" alt="Restaurant interior" class="object-cover w-full h-full">
                </div>
                <div class="aspect-w-3 aspect-h-2">
                    <img src="https://images.unsplash.com/photo-1551218808-94e220e084d2?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80" alt="Chef preparing food" class="object-cover w-full h-full">
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Menu Items -->
    <section class="py-16 px-4 sm:px-6 lg:px-8 bg-gray-50">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">Featured Dishes</h2>
                <div class="w-20 h-1 bg-amber-800 mx-auto mb-8"></div>
                <p class="text-lg text-gray-600 mb-4 max-w-2xl mx-auto">
                    Signature dishes crafted with passion and creativity by our talented culinary team.
                </p>
            </div>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                @if(isset($featuredItems) && $featuredItems->count() > 0)
                    @foreach($featuredItems as $item)
                        <div class="bg-white shadow-lg rounded-sm overflow-hidden transition-transform duration-300 hover:shadow-xl hover:-translate-y-1">
                            <img src="{{ $item->image_path ?? 'https://images.unsplash.com/photo-1504674900247-0877df9cc836?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80' }}" alt="{{ $item->name }}" class="w-full h-48 object-cover">
                            <div class="p-6">
                                <h3 class="font-bold text-lg mb-2">{{ $item->name }}</h3>
                                <p class="text-gray-600 text-sm mb-4 line-clamp-2">{{ $item->description }}</p>
                                <p class="text-amber-800 font-bold">{{ $item->formattedPrice() }}</p>
                            </div>
                        </div>
                    @endforeach
                @else
                    <!-- Placeholder items if no featured items are in the database -->
                    <div class="bg-white shadow-lg rounded-sm overflow-hidden transition-transform duration-300 hover:shadow-xl hover:-translate-y-1">
                        <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80" alt="Seared Scallops" class="w-full h-48 object-cover">
                        <div class="p-6">
                            <h3 class="font-bold text-lg mb-2">Seared Scallops</h3>
                            <p class="text-gray-600 text-sm mb-4 line-clamp-2">Pan-seared scallops with lemon butter sauce and asparagus.</p>
                            <p class="text-amber-800 font-bold">$32</p>
                        </div>
                    </div>
                    
                    <div class="bg-white shadow-lg rounded-sm overflow-hidden transition-transform duration-300 hover:shadow-xl hover:-translate-y-1">
                        <img src="https://images.unsplash.com/photo-1544025162-d76694265947?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1769&q=80" alt="Beef Wellington" class="w-full h-48 object-cover">
                        <div class="p-6">
                            <h3 class="font-bold text-lg mb-2">Beef Wellington</h3>
                            <p class="text-gray-600 text-sm mb-4 line-clamp-2">Classic beef Wellington with foie gras and wild mushrooms.</p>
                            <p class="text-amber-800 font-bold">$48</p>
                        </div>
                    </div>
                    
                    <div class="bg-white shadow-lg rounded-sm overflow-hidden transition-transform duration-300 hover:shadow-xl hover:-translate-y-1">
                        <img src="https://images.unsplash.com/photo-1551024506-0bccd828d307?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80" alt="Lobster Risotto" class="w-full h-48 object-cover">
                        <div class="p-6">
                            <h3 class="font-bold text-lg mb-2">Lobster Risotto</h3>
                            <p class="text-gray-600 text-sm mb-4 line-clamp-2">Creamy risotto with fresh Maine lobster and Parmesan.</p>
                            <p class="text-amber-800 font-bold">$36</p>
                        </div>
                    </div>
                    
                    <div class="bg-white shadow-lg rounded-sm overflow-hidden transition-transform duration-300 hover:shadow-xl hover:-translate-y-1">
                        <img src="https://images.unsplash.com/photo-1563805042-7684c019e1cb?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1452&q=80" alt="Chocolate Soufflé" class="w-full h-48 object-cover">
                        <div class="p-6">
                            <h3 class="font-bold text-lg mb-2">Chocolate Soufflé</h3>
                            <p class="text-gray-600 text-sm mb-4 line-clamp-2">Warm chocolate soufflé with vanilla ice cream and berries.</p>
                            <p class="text-amber-800 font-bold">$14</p>
                        </div>
                    </div>
                @endif
            </div>
            
            <div class="text-center mt-12">
                <a href="{{ route('menu.index') }}" class="inline-block bg-amber-800 text-white px-8 py-3 rounded-sm hover:bg-amber-900 transition duration-300 uppercase tracking-wide text-sm">
                    View Full Menu
                </a>
            </div>
        </div>
    </section>

    <!-- Reservation CTA -->
    <section class="py-20 bg-cover bg-center bg-no-repeat relative" style="background-image: url('https://images.unsplash.com/photo-1414235077428-338989a2e8c0?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80')">
        <div class="absolute inset-0 bg-black bg-opacity-70"></div>
        <div class="relative max-w-3xl mx-auto text-center px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Reserve Your Table</h2>
            <div class="w-20 h-1 bg-amber-500 mx-auto mb-8"></div>
            <p class="text-lg text-gray-300 mb-8">
                Experience the finest dining at Nique. Reservations recommended for dinner service.
                Large parties welcome with advanced notice.
            </p>
            <a href="{{ route('reservations.create') }}" class="inline-block bg-amber-800 text-white px-8 py-3 rounded-sm hover:bg-amber-900 transition duration-300 uppercase tracking-wide">
                Make a Reservation
            </a>
        </div>
    </section>
@endsection 