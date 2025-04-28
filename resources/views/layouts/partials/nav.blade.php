<nav class="bg-white border-b border-gray-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-20">
            <div class="flex">
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('home') }}" class="text-2xl font-bold font-serif text-amber-900">
                        {{ config('app.name', 'Nique') }}
                    </a>
                </div>
                <div class="hidden sm:-my-px sm:ml-10 sm:flex sm:space-x-8">
                    <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'border-amber-800 text-amber-900' : 'border-transparent text-gray-500 hover:text-amber-800 hover:border-amber-800' }} inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium uppercase tracking-wide">
                        Home
                    </a>
                    <a href="{{ route('menu.index') }}" class="{{ request()->routeIs('menu.*') ? 'border-amber-800 text-amber-900' : 'border-transparent text-gray-500 hover:text-amber-800 hover:border-amber-800' }} inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium uppercase tracking-wide">
                        Menu
                    </a>
                    <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'border-amber-800 text-amber-900' : 'border-transparent text-gray-500 hover:text-amber-800 hover:border-amber-800' }} inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium uppercase tracking-wide">
                        About
                    </a>
                    <a href="{{ route('contact.index') }}" class="{{ request()->routeIs('contact.*') ? 'border-amber-800 text-amber-900' : 'border-transparent text-gray-500 hover:text-amber-800 hover:border-amber-800' }} inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium uppercase tracking-wide">
                        Contact
                    </a>
                </div>
            </div>
            <div class="flex items-center">
                <a href="{{ route('reservations.create') }}" class="inline-flex items-center px-4 py-2 border border-amber-800 text-sm font-medium rounded-sm text-amber-800 bg-white hover:bg-amber-800 hover:text-white transition duration-300 uppercase tracking-wide">
                    Reservations
                </a>
            </div>
        </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'bg-amber-50 border-amber-800 text-amber-900' : 'border-transparent text-gray-600 hover:bg-amber-50 hover:border-amber-800 hover:text-amber-900' }} block pl-3 pr-4 py-2 border-l-4 text-base font-medium">
                Home
            </a>
            <a href="{{ route('menu.index') }}" class="{{ request()->routeIs('menu.*') ? 'bg-amber-50 border-amber-800 text-amber-900' : 'border-transparent text-gray-600 hover:bg-amber-50 hover:border-amber-800 hover:text-amber-900' }} block pl-3 pr-4 py-2 border-l-4 text-base font-medium">
                Menu
            </a>
            <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'bg-amber-50 border-amber-800 text-amber-900' : 'border-transparent text-gray-600 hover:bg-amber-50 hover:border-amber-800 hover:text-amber-900' }} block pl-3 pr-4 py-2 border-l-4 text-base font-medium">
                About
            </a>
            <a href="{{ route('contact.index') }}" class="{{ request()->routeIs('contact.*') ? 'bg-amber-50 border-amber-800 text-amber-900' : 'border-transparent text-gray-600 hover:bg-amber-50 hover:border-amber-800 hover:text-amber-900' }} block pl-3 pr-4 py-2 border-l-4 text-base font-medium">
                Contact
            </a>
            <a href="{{ route('reservations.create') }}" class="{{ request()->routeIs('reservations.*') ? 'bg-amber-50 border-amber-800 text-amber-900' : 'border-transparent text-gray-600 hover:bg-amber-50 hover:border-amber-800 hover:text-amber-900' }} block pl-3 pr-4 py-2 border-l-4 text-base font-medium">
                Reservations
            </a>
        </div>
    </div>
</nav>
