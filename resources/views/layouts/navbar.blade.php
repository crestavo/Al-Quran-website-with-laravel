<nav class="bg-emerald-500 text-white fixed w-full z-50">
    <div class="container mx-auto flex items-center justify-between px-7 py-6">
        <ul class="flex items-center text-xl">
            <li class="mr-8">
                <h1 class="text-3xl font-['Acme']">
                    <a href="{{ route('surah.index') }}">Al-Quran</a>
                </h1>
            </li>

            <li class="ml-6"> 
                <a href="{{ route('surah.index') }}" class="hover:text-gray-200">Home</a>
            </li>

            <li class="ml-6">
                <a href="#" class="hover:text-gray-200">Tafsir</a>
            </li>

            <li class="ml-6">
                <a href="#" class="hover:text-gray-200">About</a>
            </li>
        </ul>

        <div class="dark-mode">
            {{-- Nanti aja, masih blm paham --}}
            <h1>DarkMode</h1>
        </div>
    </div>


</nav>
