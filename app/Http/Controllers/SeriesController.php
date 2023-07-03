<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SeriesController extends Controller
{
    public function index()
    {
        #$series = DB::select('SELECT nome FROM series;');
        $series = Serie::query()->orderBy('nome')->get();

        #return $request->get('id');
        #return $request->query('id');
        #return redirect('https://google.com.br');
        #return response('', 301, ['Location' => 'https://google.com.br']);
        #return $html;
        /*return view(
            'listar-series', ['series' => $series]
        ); a função compact retorna o mesmo resultado que ['series' => $series]*/
        #return view('listar-series', compact('series'));
        return view('series.index')->with('series', $series);
    }

    public function create() {
        return view('series.create');
    }

    public function store (Request $request) {
        $nomeSerie = $request->input('nome');
        $serie = new Serie();
        $serie->nome = $nomeSerie;
        $serie->save();
        #DB::insert('INSERT INTO series (nome) VALUES (?)', [$nomeSerie]);
        return redirect('/series');
    }
}
