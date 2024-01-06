@extends('layouts.main')

@section('content')
    <div class="container mx-auto mt-16 px-9 py-9">
        <div class="back-button ">
            <a href="{{ route('surah.show', $detailSurah['nomor']) }}"
                class="bg-emerald-500 rounded-md p-3 text-md tracking-wide font-semibold text-white hover:bg-emerald-600 hover:text-slate-200 transition delay-75">
                kembali
            </a>
        </div>

        <div class="header w-full p-5 flex justify-center">
            <div class="header-text text-center w-1/2 text-3xl font-bold">
                <h3>{{ $detailSurah['namaLatin'] }}</h3>
                <p class="mt-2 font-arab text-4xl">{{ $detailSurah['nama'] }}</p>
            </div>
        </div>

        <div class="content mt-10 w-full px-3">
            @foreach ($tafsirSurah as $tafsir)
                <div class="content-text px-3 py-4 mb-5 border-b border-gray-300">
                    <h3 class="font-bold text-xl">{{ $detailSurah['nomor'] }}:{{ $tafsir['ayat'] }}</h3>
                    <p class="mt-4 text-justify">{!! str_replace("\n", '<br/>', $tafsir['teks']) !!}</p>
                </div>
            @endforeach
        </div>
    </div>
@endsection
