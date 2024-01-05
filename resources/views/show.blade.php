@extends('layouts.main')

@section('content')
    <div class="container mx-auto mt-16 px-9 py-9">

        <div class="header w-full flex justify-center">
            <div class="text-xl flex flex-col items-center justify-center gap-4 w-[600px] h-[250px] relative">
                <div class="head-text text-center">
                    <h3 class="font-bold text-4xl font-arab">{{ $detailSurah['nama'] }}</h3>

                    <div class="detail-surah mt-1 text-base leading-none border-b-2 border-black pb-3">
                        <h3 class="font-semibold">{{ $detailSurah['namaLatin'] }}</h3>
                        <h2 class="mt-1">{{ $detailSurah['tempatTurun'] }} - {{ $detailSurah['jumlahAyat'] }}</h2>
                    </div>

                    <h1 class="font-bold mt-5 text-3xl font-arab">بِسْــــــــــــــــــمِ اللهِ الرَّحْمَنِ الرَّحِيْمِ</h1>
                </div>

                <div class="head-audio">
                    <audio controls>
                        <source src="{{ $detailSurah['audioFull']['05'] }}"
                            type="audio/mpeg">
                    </audio>
                </div>

                <div class="head-btn rounded-sm absolute top-4 right-28">
                    <a href="#" class="surah-info flex flex-row text-sm p-[5px]">
                        <svg 
                            xmlns="http://www.w3.org/2000/svg" 
                            x="0px" 
                            y="0px" 
                            width="20" 
                            height="20"
                            viewBox="0 0 50 50">
                            <title>Deskripsi Surah</title>
                            <path
                                d="M25,2C12.297,2,2,12.297,2,25s10.297,23,23,23s23-10.297,23-23S37.703,2,25,2z M25,11c1.657,0,3,1.343,3,3s-1.343,3-3,3 s-3-1.343-3-3S23.343,11,25,11z M29,38h-2h-4h-2v-2h2V23h-2v-2h2h4v2v13h2V38z">
                            </path>
                        </svg>
                    </a>
                </div>

            </div>
        </div>

        <div class="ayat mt-10 mx-14">
            @foreach ($ayatSurah as $surah)
                <div class="ayat-card mb-9 pt-3 pb-5 px-3 flex w-full gap-x-4 border-b border-gray-300">
                    <div class="side-nav px-3 flex flex-col items-center">
                        <h3 class="font-bold text-md">
                            {{ $detailSurah['nomor'] }}:{{ $surah['nomorAyat'] }}
                        </h3>

                        <div class="tafsir mt-3">
                            <svg 
                                class="tafsiran cursor-pointer" 
                                stroke="currentColor" 
                                fill="currentColor" 
                                stroke-width="0"
                                viewBox="0 0 1024 1024" 
                                height="24" 
                                width="24" 
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <title>Lihat Tafsir</title>
                                <path
                                    d="M928 161H699.2c-49.1 0-97.1 14.1-138.4 40.7L512 233l-48.8-31.3A255.2 255.2 0 0 0 324.8 161H96c-17.7 0-32 14.3-32 32v568c0 17.7 14.3 32 32 32h228.8c49.1 0 97.1 14.1 138.4 40.7l44.4 28.6c1.3.8 2.8 1.3 4.3 1.3s3-.4 4.3-1.3l44.4-28.6C602 807.1 650.1 793 699.2 793H928c17.7 0 32-14.3 32-32V193c0-17.7-14.3-32-32-32zM324.8 721H136V233h188.8c35.4 0 69.8 10.1 99.5 29.2l48.8 31.3 6.9 4.5v462c-47.6-25.6-100.8-39-155.2-39zm563.2 0H699.2c-54.4 0-107.6 13.4-155.2 39V298l6.9-4.5 48.8-31.3c29.7-19.1 64.1-29.2 99.5-29.2H888v488zM396.9 361H211.1c-3.9 0-7.1 3.4-7.1 7.5v45c0 4.1 3.2 7.5 7.1 7.5h185.7c3.9 0 7.1-3.4 7.1-7.5v-45c.1-4.1-3.1-7.5-7-7.5zm223.1 7.5v45c0 4.1 3.2 7.5 7.1 7.5h185.7c3.9 0 7.1-3.4 7.1-7.5v-45c0-4.1-3.2-7.5-7.1-7.5H627.1c-3.9 0-7.1 3.4-7.1 7.5zM396.9 501H211.1c-3.9 0-7.1 3.4-7.1 7.5v45c0 4.1 3.2 7.5 7.1 7.5h185.7c3.9 0 7.1-3.4 7.1-7.5v-45c.1-4.1-3.1-7.5-7-7.5zm416 0H627.1c-3.9 0-7.1 3.4-7.1 7.5v45c0 4.1 3.2 7.5 7.1 7.5h185.7c3.9 0 7.1-3.4 7.1-7.5v-45c.1-4.1-3.1-7.5-7-7.5z">
                                </path>
                            </svg>
                        </div>
                    </div>

                    <div class="ayat-content px-3 ml-3 w-full">
                        <div class="arab text-end text-4xl font-arab font-black leading-[2]">
                            {{ $surah['teksArab'] }}
                        </div>

                        <div class="ml-4">
                            <div class="latin mt-6 text-md font-semibold text-black border-b border-black pb-3">
                                {{ $surah['teksLatin'] }}
                            </div>
        
                            <div class="arti mt-5 text-base">
                                {{ $surah['teksIndonesia'] }}
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
@endsection
