@extends('layouts.app')

@section('title', 'Our Menu')

@section('content')
    <!-- Menu Hero Section -->
    <section class="relative py-24 bg-cover bg-center bg-no-repeat" style="background-image: url('https://images.unsplash.com/photo-1555396273-367ea4eb4db5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1374&q=80')">
        <div class="absolute inset-0 bg-black bg-opacity-60"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">Our Menu</h1>
            <div class="w-20 h-1 bg-amber-500 mx-auto mb-8"></div>
            <p class="text-xl text-gray-200 max-w-3xl mx-auto">
                Discover our exceptional cuisine, featuring locally-sourced ingredients and seasonal specialties.
            </p>
        </div>
    </section>

    <!-- Menu Categories -->
    <section class="py-16 px-4 sm:px-6 lg:px-8 bg-white">
        <div class="max-w-7xl mx-auto">
            <!-- Featured Items Section -->
            @if(isset($featuredItems) && $featuredItems->count() > 0)
                <div class="mb-20">
                    <h2 class="text-3xl font-bold mb-4 text-center">Chef's Recommendations</h2>
                    <div class="w-20 h-1 bg-amber-800 mx-auto mb-12"></div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                        @foreach($featuredItems as $item)
                            <div class="bg-gray-50 rounded-sm overflow-hidden shadow-md hover:shadow-lg transition-shadow duration-300">
                                <img src="{{ $item->image_path ?? 'https://images.unsplash.com/photo-1504674900247-0877df9cc836?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80' }}" alt="{{ $item->name }}" class="w-full h-48 object-cover">
                                <div class="p-6">
                                    <h3 class="font-bold text-lg mb-2">{{ $item->name }}</h3>
                                    <p class="text-gray-600 text-sm mb-4">{{ $item->description }}</p>
                                    <p class="text-amber-800 font-bold">{{ $item->formattedPrice() }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif
            
            <!-- Menu Categories -->
            @if(isset($categories) && $categories->count() > 0)
                @foreach($categories as $category)
                    <div class="mb-20">
                        <h2 class="text-3xl font-bold mb-4 text-center">{{ $category->name }}</h2>
                        <div class="w-20 h-1 bg-amber-800 mx-auto mb-8"></div>
                        @if($category->description)
                            <p class="text-gray-600 text-center max-w-3xl mx-auto mb-12">{{ $category->description }}</p>
                        @endif
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                            @foreach($category->menuItems as $item)
                                <div class="flex border-b border-gray-200 pb-6">
                                    @if($item->image_path)
                                        <div class="w-24 h-24 mr-4 shrink-0">
                                            <img src="{{ $item->image_path }}" alt="{{ $item->name }}" class="w-full h-full object-cover rounded-sm">
                                        </div>
                                    @endif
                                    <div class="flex-1">
                                        <div class="flex justify-between items-start">
                                            <h3 class="font-bold text-lg mb-1">{{ $item->name }}</h3>
                                            <p class="text-amber-800 font-bold ml-2">{{ $item->formattedPrice() }}</p>
                                        </div>
                                        <p class="text-gray-600 text-sm">{{ $item->description }}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            @else
                <!-- Sample Menu Categories if no categories exist in the database -->
                <div class="mb-20">
                    <h2 class="text-3xl font-bold mb-4 text-center">Appetizers</h2>
                    <div class="w-20 h-1 bg-amber-800 mx-auto mb-8"></div>
                    <p class="text-gray-600 text-center max-w-3xl mx-auto mb-12">Begin your culinary journey with our selection of exquisite appetizers.</p>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <!-- Sample Menu Items -->
                        <div class="flex border-b border-gray-200 pb-6">
                            <div class="flex-1">
                                <div class="flex justify-between items-start">
                                    <h3 class="font-bold text-lg mb-1">Truffle Arancini</h3>
                                    <p class="text-amber-800 font-bold ml-2">$18</p>
                                </div>
                                <p class="text-gray-600 text-sm">Crispy risotto balls infused with black truffle and Parmesan, served with truffle aioli.</p>
                            </div>
                        </div>
                        
                        <div class="flex border-b border-gray-200 pb-6">
                            <div class="flex-1">
                                <div class="flex justify-between items-start">
                                    <h3 class="font-bold text-lg mb-1">Tuna Tartare</h3>
                                    <p class="text-amber-800 font-bold ml-2">$22</p>
                                </div>
                                <p class="text-gray-600 text-sm">Fresh yellowfin tuna, avocado, cucumber, and wasabi tobiko with sesame-ginger dressing.</p>
                            </div>
                        </div>
                        
                        <div class="flex border-b border-gray-200 pb-6">
                            <div class="flex-1">
                                <div class="flex justify-between items-start">
                                    <h3 class="font-bold text-lg mb-1">Burrata & Heirloom Tomato</h3>
                                    <p class="text-amber-800 font-bold ml-2">$19</p>
                                </div>
                                <p class="text-gray-600 text-sm">Creamy burrata cheese, colorful heirloom tomatoes, basil oil, aged balsamic, and toasted sourdough.</p>
                            </div>
                        </div>
                        
                        <div class="flex border-b border-gray-200 pb-6">
                            <div class="flex-1">
                                <div class="flex justify-between items-start">
                                    <h3 class="font-bold text-lg mb-1">Lobster Bisque</h3>
                                    <p class="text-amber-800 font-bold ml-2">$16</p>
                                </div>
                                <p class="text-gray-600 text-sm">Rich and creamy lobster soup with cognac, finished with lobster meat and herb oil.</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Main Courses Sample -->
                <div class="mb-20">
                    <h2 class="text-3xl font-bold mb-4 text-center">Main Courses</h2>
                    <div class="w-20 h-1 bg-amber-800 mx-auto mb-8"></div>
                    <p class="text-gray-600 text-center max-w-3xl mx-auto mb-12">Indulge in our chef's carefully crafted entrées, showcasing the finest ingredients.</p>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <!-- Sample Menu Items -->
                        <div class="flex border-b border-gray-200 pb-6">
                            <div class="flex-1">
                                <div class="flex justify-between items-start">
                                    <h3 class="font-bold text-lg mb-1">Filet Mignon</h3>
                                    <p class="text-amber-800 font-bold ml-2">$46</p>
                                </div>
                                <p class="text-gray-600 text-sm">8oz prime beef tenderloin, truffled mashed potatoes, seasonal vegetables, red wine reduction.</p>
                            </div>
                        </div>
                        
                        <div class="flex border-b border-gray-200 pb-6">
                            <div class="flex-1">
                                <div class="flex justify-between items-start">
                                    <h3 class="font-bold text-lg mb-1">Pan-Seared Sea Bass</h3>
                                    <p class="text-amber-800 font-bold ml-2">$42</p>
                                </div>
                                <p class="text-gray-600 text-sm">Wild-caught sea bass, saffron risotto, asparagus, cherry tomato confit, and lemon beurre blanc.</p>
                            </div>
                        </div>
                        
                        <div class="flex border-b border-gray-200 pb-6">
                            <div class="flex-1">
                                <div class="flex justify-between items-start">
                                    <h3 class="font-bold text-lg mb-1">Rack of Lamb</h3>
                                    <p class="text-amber-800 font-bold ml-2">$44</p>
                                </div>
                                <p class="text-gray-600 text-sm">Herb-crusted New Zealand lamb, roasted garlic polenta, ratatouille, and rosemary jus.</p>
                            </div>
                        </div>
                        
                        <div class="flex border-b border-gray-200 pb-6">
                            <div class="flex-1">
                                <div class="flex justify-between items-start">
                                    <h3 class="font-bold text-lg mb-1">Wild Mushroom Risotto</h3>
                                    <p class="text-amber-800 font-bold ml-2">$32</p>
                                </div>
                                <p class="text-gray-600 text-sm">Creamy Arborio rice with wild mushrooms, white truffle oil, Parmigiano-Reggiano, and fresh herbs.</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Desserts Sample -->
                <div class="mb-20">
                    <h2 class="text-3xl font-bold mb-4 text-center">Desserts</h2>
                    <div class="w-20 h-1 bg-amber-800 mx-auto mb-8"></div>
                    <p class="text-gray-600 text-center max-w-3xl mx-auto mb-12">Complete your dining experience with our decadent dessert offerings.</p>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <!-- Sample Menu Items -->
                        <div class="flex border-b border-gray-200 pb-6">
                            <div class="flex-1">
                                <div class="flex justify-between items-start">
                                    <h3 class="font-bold text-lg mb-1">Chocolate Soufflé</h3>
                                    <p class="text-amber-800 font-bold ml-2">$14</p>
                                </div>
                                <p class="text-gray-600 text-sm">Warm chocolate soufflé with vanilla bean ice cream and raspberry coulis (15 minute preparation).</p>
                            </div>
                        </div>
                        
                        <div class="flex border-b border-gray-200 pb-6">
                            <div class="flex-1">
                                <div class="flex justify-between items-start">
                                    <h3 class="font-bold text-lg mb-1">Crème Brûlée</h3>
                                    <p class="text-amber-800 font-bold ml-2">$12</p>
                                </div>
                                <p class="text-gray-600 text-sm">Classic vanilla bean custard with caramelized sugar crust and fresh berries.</p>
                            </div>
                        </div>
                        
                        <div class="flex border-b border-gray-200 pb-6">
                            <div class="flex-1">
                                <div class="flex justify-between items-start">
                                    <h3 class="font-bold text-lg mb-1">Tiramisu</h3>
                                    <p class="text-amber-800 font-bold ml-2">$13</p>
                                </div>
                                <p class="text-gray-600 text-sm">Layers of espresso-soaked ladyfingers, mascarpone cream, and cocoa powder.</p>
                            </div>
                        </div>
                        
                        <div class="flex border-b border-gray-200 pb-6">
                            <div class="flex-1">
                                <div class="flex justify-between items-start">
                                    <h3 class="font-bold text-lg mb-1">Seasonal Fruit Tart</h3>
                                    <p class="text-amber-800 font-bold ml-2">$11</p>
                                </div>
                                <p class="text-gray-600 text-sm">Buttery shortcrust pastry with vanilla pastry cream and fresh seasonal fruits.</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </section>
    
    <!-- Reservation CTA -->
    <section class="py-16 px-4 sm:px-6 lg:px-8 bg-gray-100">
        <div class="max-w-3xl mx-auto text-center">
            <h2 class="text-3xl font-bold mb-4">Make a Reservation</h2>
            <div class="w-20 h-1 bg-amber-800 mx-auto mb-8"></div>
            <p class="text-gray-600 mb-8">
                Reserve your table today and experience our exceptional cuisine and service.
            </p>
            <a href="{{ route('reservations.create') }}" class="inline-block bg-amber-800 text-white px-8 py-3 rounded-sm hover:bg-amber-900 transition duration-300 uppercase tracking-wide">
                Book a Table
            </a>
        </div>
    </section>
@endsection 