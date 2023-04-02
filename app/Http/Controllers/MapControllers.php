<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
  
class MapControllers extends Controller
{
    public function index()
    {
        $initialMarkers = [
            [
                'position' => [
                    'lat' => 28.625485,
                    'lng' => 79.821091
                ],
                'draggable' => true
            ],
            [
                'position' => [
                    'lat' => 28.625293,
                    'lng' => 79.817926
                ],
                'draggable' => false
            ],
            [
                'position' => [
                    'lat' => 28.625182,
                    'lng' => 79.81464
                ],
                'draggable' => true
            ],
          [
                'position' => [
                    'lat' => 28.628300,
                    'lng' => 79.81464
                ],
                'draggable' => false
            ]
        ];
        return view('peta', compact('initialMarkers'));
    }
}
