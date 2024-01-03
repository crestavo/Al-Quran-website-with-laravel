@extends('layouts.main')

@section('content')
    <div class="search-bar w-full flex justify-center text-black">
        <div class="relative">
            <input type="text"
                class="my-3 rounded-full w-96 py-1 pl-5 pr-9 bg-emerald-500 text-white placeholder:text-white"
                placeholder="Search (Press '/' to focus)">

            <div class="absolute top-[18px] right-3">
                <svg class="fill-current w-5 text-white" viewBox="0 0 24 24">
                    <path class="heroicon-ui"
                        d="M16.32 14.9l5.39 5.4a1 1 0 01-1.42 1.4l-5.38-5.38a8 8 0 111.41-1.41zM10 16a6 6 0 100-12 6 6 0 000 12z" />
                </svg>
            </div>
        </div>
    </div>


    {{-- Surah section --}}
    <div class="container mx-auto mb-10 px-9 pt-9">
        <div class="all-surah">
            <div class="grid grid-cols-3 gap-x-5 gap-y-6">
                @foreach ($surahQuran as $surah)
                    <x-card-surah :surah="$surah" />
                @endforeach
            </div>
        </div>
    </div>
    {{-- End Surah Section --}}


    {{-- Footer --}}
    <footer class="h-[100px] bg-black">
      <h1>Hello World!</h1>
    </footer>
    {{-- End Footer --}}
@endsection
