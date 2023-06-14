<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\alternatif;
use App\Models\kriteria;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $kriteria = kriteria::sum('bobot');

        $bobot1 = 0.259;
        $bobot2 = 0.175;
        $bobot3 = 0.134;
        $bobot4 = 0.106;
        $bobot5 = 0.085;
        $bobot6 = 0.068;
        $bobot7 = 0.054;
        $bobot8 = 0.043;
        $bobot9 = 0.032;
        $bobot10 = 0.023;
        $bobot11 = 0.015;
        $bobot12 = 0.007;


        $weight1 = [
            'kriterias' => $bobot1,
        ];
        $weight2 = [
            'kriterias' => $bobot2,
        ];
        $weight3 = [
            'kriterias' => $bobot3,
        ];
        $weight4 = [
            'kriterias' => $bobot4,
        ];
        $weight5 = [
            'kriterias' => $bobot5,
        ];
        $weight6 = [
            'kriterias' => $bobot6,
        ];
        $weight7 = [
            'kriterias' => $bobot7,
        ];
        $weight8 = [
            'kriterias' => $bobot8,
        ];
        $weight9 = [
            'kriterias' => $bobot9,
        ];
        $weight10 = [
            'kriterias' => $bobot10,
        ];
        $weight11 = [
            'kriterias' => $bobot11,
        ];
        $weight12 = [
            'kriterias' => $bobot12,
        ];


        $minC1 = alternatif::min('C1');
        $maxC1 = alternatif::max('C1');
        $minC2 = alternatif::min('C2');
        $maxC2 = alternatif::max('C2');
        $minC3 = alternatif::min('C3');
        $maxC3 = alternatif::max('C3');
        $minC4 = alternatif::min('C4');
        $maxC4 = alternatif::max('C4');
        $minC5 = alternatif::min('C5');
        $maxC5 = alternatif::max('C5');
        $minC6 = alternatif::min('C6');
        $maxC6 = alternatif::max('C6');
        $minC7 = alternatif::min('C7');
        $maxC7 = alternatif::max('C7');
        $minC8 = alternatif::min('C8');
        $maxC8 = alternatif::max('C8');
        $minC9 = alternatif::min('C9');
        $maxC9 = alternatif::max('C9');
        $minC10 = alternatif::min('C10');
        $maxC10 = alternatif::max('C10');
        $minC11 = alternatif::min('C11');
        $maxC11 = alternatif::max('C11');
        $minC12 = alternatif::min('C12');
        $maxC12 = alternatif::max('C12');


        $C1min = [
            'mapel' => $minC1,
        ];
        $C1max = [
            'mapel' => $maxC1,
        ];
        $C2min = [
            'mapel' => $minC2,
        ];
        $C2max = [
            'mapel' => $maxC2,
        ];
        $C3min = [
            'mapel' => $minC3,
        ];
        $C3max = [
            'mapel' => $maxC3,
        ];
        $C4min = [
            'mapel' => $minC4,
        ];
        $C4max = [
            'mapel' => $maxC4,
        ];
        $C5min = [
            'mapel' => $minC5,
        ];
        $C5max = [
            'mapel' => $maxC5,
        ];
        $C6min = [
            'mapel' => $minC6,
        ];
        $C6max = [
            'mapel' => $maxC6,
        ];
        $C7min = [
            'mapel' => $minC7,
        ];
        $C7max = [
            'mapel' => $maxC7,
        ];
        $C8min = [
            'mapel' => $minC8,
        ];
        $C8max = [
            'mapel' => $maxC8,
        ];
        $C9min = [
            'mapel' => $minC9,
        ];
        $C9max = [
            'mapel' => $maxC9,
        ];
        $C10min = [
            'mapel' => $minC10,
        ];
        $C10max = [
            'mapel' => $maxC10,
        ];
        $C11min = [
            'mapel' => $minC11,
        ];
        $C11max = [
            'mapel' => $maxC11,
        ];
        $C12min = [
            'mapel' => $minC12,
        ];
        $C12max = [
            'mapel' => $maxC12,
        ];


        // $hasil = $minC1/$maxC1;
        // $hasil1 =[
        //     'mapel' => $hasil,
        // ];


        $data = alternatif::orderby('nama', 'asc')->get();
        $kriterias = kriteria::orderby('nama', 'asc')->get();


        // $norm = 1 / $C2min['mapel'];

        // dd($norm);

        return view('home', compact(
            'kriterias',
            'data',
            'weight1',
            'weight2',
            'weight3',
            'weight4',
            'weight5',
            'weight6',
            'weight7',
            'weight8',
            'weight9',
            'weight10',
            'weight11',
            'weight12',
            'C1min',
            'C1max',
            'C2min',
            'C2max',
            'C3min',
            'C3max',
            'C4min',
            'C4max',
            'C5min',
            'C5max',
            'C6min',
            'C6max',
            'C7min',
            'C7max',
            'C8min',
            'C8max',
            'C9min',
            'C9max',
            'C10min',
            'C10max',
            'C11min',
            'C11max',
            'C12min',
            'C12max',
        ));
    }
}
