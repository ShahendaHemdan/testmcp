<footer class="bg-gray-900 text-white py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Logo and About -->
            <div class="md:col-span-1">
                <h3 class="text-2xl font-serif font-bold text-amber-500 mb-4">{{ config('app.name', 'Nique') }}</h3>
                <p class="text-gray-400 mb-4">Experience fine dining at its best with our curated menu and exceptional service.</p>
                <div class="flex space-x-4">
                    <a href="#" class="text-gray-400 hover:text-white">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white">
                        <i class="fab fa-twitter"></i>
                    </a>
                </div>
            </div>
            
            <!-- Contact Info -->
            <div class="md:col-span-1">
                <h3 class="text-lg font-bold uppercase tracking-wider mb-4">Contact</h3>
                <address class="not-italic text-gray-400">
                    <p class="mb-2">123 Gourmet Avenue</p>
                    <p class="mb-2">New York, NY 10001</p>
                    <p class="mb-2">
                        <a href="tel:+12123456789" class="hover:text-amber-400">+1 (212) 345-6789</a>
                    </p>
                    <p>
                        <a href="mailto:info@niquerestaurant.com" class="hover:text-amber-400">info@niquerestaurant.com</a>
                    </p>
                </address>
            </div>
            
            <!-- Hours -->
            <div class="md:col-span-1">
                <h3 class="text-lg font-bold uppercase tracking-wider mb-4">Hours</h3>
                <ul class="text-gray-400">
                    <li class="mb-2">Monday - Thursday: 5:30pm - 10:00pm</li>
                    <li class="mb-2">Friday - Saturday: 5:30pm - 11:00pm</li>
                    <li class="mb-2">Sunday: 5:30pm - 9:00pm</li>
                    <li>Lunch: Saturday & Sunday 11:30am - 2:00pm</li>
                </ul>
            </div>
        </div>
        
        <div class="border-t border-gray-800 mt-8 pt-8 text-center text-gray-400">
            <p>&copy; {{ date('Y') }} {{ config('app.name', 'Nique') }}. All rights reserved.</p>
        </div>
    </div>
</footer> 