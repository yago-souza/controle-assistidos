<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SeriesController extends Controller
{
    public function index()
    {
        $series = [
            'Punisher',
            'Lost',
            'Grey\'s Anatomy'
        ];

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
        if (DB::insert('INSERT INTO series (nome) VALUES (?)', [$nomeSerie])) {
            return "OK";
        } else {
            return "Deu erro";
        }
    }
}
