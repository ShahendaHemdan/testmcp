<nav class="bg-white shadow-sm">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('home') }}">
                        {{-- Placeholder for Logo --}}
                        <span class="font-bold text-lg">{{ config('app.name', 'Agency') }}</span>
                    </a>
                </div>
                <div class="hidden sm:-my-px sm:ml-6 sm:flex sm:space-x-8">
                    {{-- Navigation Links - TODO: Populate based on Figma --}}
                    <a href="{{ route('home') }}" class="border-indigo-500 text-gray-900 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium" aria-current="page">Home</a>
                    {{-- <a href="#services" class="border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">Services</a> --}}
                    {{-- <a href="#portfolio" class="border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">Portfolio</a> --}}
                    {{-- <a href="#contact" class="border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">Contact</a> --}}
                </div>
            </div>
            {{-- Placeholder for potential right-side elements (e.g., button) --}}
        </div>
    </div>
</nav> 