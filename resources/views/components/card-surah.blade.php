<div class="border border-emerald-500 rounded-lg">
    <a href="{{ route('surah.show') }}" class="flex items-center justify-between py-3 px-6">
        <div class="number relative">
            <div class="background bg-emerald-500 rounded-full w-12 h-12">
                <p 
                    class="font-bold absolute 
                        @if($surah['nomor'] < 10)
                            right-[19.5px] top-[11px]
                        @elseif($surah['nomor'] < 20)
                            right-[15.5px] top-[11px]
                        @elseif($surah['nomor'] < 100)
                            right-[14.5px] top-[11px]
                        @else
                            right-[10px] top-[11px]
                        @endif
                        {{-- kayanya ada yang masih kurang tengah, kalau niat nanti di update --}}
                        "
                >
                    {{ $surah['nomor'] }}
                </p>
            </div>
        </div>

        <div class="detail">
            <h3 class="font-bold text-xl">{{ $surah['namaLatin'] }}</h3>
            <p class="text-sm">{{ $surah['tempatTurun'] }} - {{ $surah['jumlahAyat'] }} ayat</p>
        </div>

        <div class="arab-name">
            <h3 class="font-bold text-2xl">{{ $surah['nama'] }}</h3>
        </div>
    </a>
</div>