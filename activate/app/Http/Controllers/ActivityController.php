<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class ActivityController extends Controller
{
    private function activities(): array
    {
        return [
            1 => ['id' => 1, 'title' => 'Taller de Git y GitHub', 'category' => 'taller', 'location' => 'Aula 101', 'starts_at' => '2026-12-02 16:00', 'capacity' => 20],
            2 => ['id' => 2, 'title' => 'Charla: ciberseguridad para developers', 'category' => 'charla', 'location' => 'Salón de actos', 'starts_at' => '2026-12-05 11:00', 'capacity' => 120],
            3 => ['id' => 3, 'title' => 'Excursión al Museo de la Ciencia', 'category' => 'excursion', 'location' => 'Salida desde la entrada principal', 'starts_at' => '2026-12-12 09:00', 'capacity' => 45],
            4 => ['id' => 4, 'title' => 'Torneo de fútbol sala', 'category' => 'deporte', 'location' => 'Polideportivo', 'starts_at' => '2026-12-15 17:30', 'capacity' => 40],
            5 => ['id' => 5, 'title' => 'Taller de Docker desde cero', 'category' => 'taller', 'location' => 'Laboratorio 2', 'starts_at' => '2027-01-14 16:00', 'capacity' => 18],
            6 => ['id' => 6, 'title' => 'Prueba1', 'category' => 'taller', 'location' => 'Laboratorio 2', 'starts_at' => '2027-01-14 16:00', 'capacity' => 18],
            7 => ['id' => 7, 'title' => 'Prueba2', 'category' => 'taller', 'location' => 'Laboratorio 2', 'starts_at' => '2027-01-14 16:00', 'capacity' => 18],
            8 => ['id' => 8, 'title' => 'Prueba3', 'category' => 'taller', 'location' => 'Laboratorio 2', 'starts_at' => '2027-01-14 16:00', 'capacity' => 18],
        ];
    }

    public function index(Request $request){
        $activities = $this -> activities();

        return view('activities.index', ['activities' => $activities]);

    }
    
    public function show(int $id): View{
        $activities = $this->activities();

        $activity = $activities[$id] ?? null;
        
        if(!$activity){
            abort(404);
        }

        return view('activities.detalle', ['activity' => $activity]);
    }
    

}
