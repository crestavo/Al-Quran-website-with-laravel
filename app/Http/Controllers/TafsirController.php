<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TafsirController extends Controller
{
    public function index($id)
    {
        $detailSurah = Http::get('https://equran.id/api/v2/tafsir/' . $id)->json()['data'];
        $tafsirSurah = Http::get('https://equran.id/api/v2/tafsir/' . $id)->json()['data']['tafsir'];

        return view('tafsir.tafsir', compact('tafsirSurah', 'detailSurah'));
    }
}
