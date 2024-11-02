<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Lista de juegos que se enviará a la vista
        $games = [
            [
                'title' => 'Gears E-Day',
                'price' => 49.99,
                'image' => 'images/gears.jpg', // Asegúrate de que esta ruta sea válida
                'trailer' => 'https://www.youtube.com/watch?v=EC20gLfUHeA'
            ],
            [
                'title' => 'Halo Infinite',
                'price' => 39.99,
                'image' => 'images/halo.jpg',
                'trailer' => 'https://www.youtube.com/watch?v=Fmdb-KmlzD8&t=6s'
            ],
            [
                'title' => 'Call of Duty Zombies',
                'price' => 29.99,
                'image' => 'images/callofduty.jpg',
                'trailer' => 'https://www.youtube.com/watch?v=A1pEAIVfxWE'
            ],
            [
                'title' => 'God Of War',
                'price' => 49.99,
                'image' => 'images/godofwar.jpg', // Asegúrate de que esta ruta sea válida
                'trailer' => 'https://www.youtube.com/watch?v=C44_HrseDSs'
            ]
        ];

        // Retornar la vista 'home' con los datos de juegos
        return view('home', ['games' => $games]);
    }
}
