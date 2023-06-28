<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index(Request $request)
    {
        $series = [
            'Punisher',
            'Lost',
            'Grey\'s Anatomy'
        ];

        $html = '<ul>';
        foreach ($series as $serie) {
            $html .= "<li>$serie</li>";
        }
        $html .= '</ul>';

        #return $request->get('id');
        #return $request->query('id');
        #return redirect('https://google.com.br');
        #return response('', 301, ['Location' => 'https://google.com.br']);
        return $html;
    }
}
