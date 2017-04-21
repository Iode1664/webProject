<?php

namespace App\Http\Controllers;

use App\Activite;
use App\User_activite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use DateTime;


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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $now = new DateTime();

        $incomming = DB::table('horaires')
            ->join('activites', 'horaires.id_activite', '=', 'activites.id')
            ->where('id_statut', '!=', 3)
            ->where('Debut', '>', $now)
            ->orderBy('Debut', 'asc')
            ->first();

        $most_popular = User_activite::selectRaw('COUNT(`id`) as `participants`, `id_activite`')
            ->groupBy('id_activite')
            ->orderBy('participants', 'desc')
            ->first();

        $latest_vote = Activite::where('id_statut', '=', 3)
            ->latest()
            ->first();

        $most_popular = Activite::find($most_popular->id_activite);
        $incomming = Activite::find($incomming->id_activite);
        return view('home', ['most_popular' => $most_popular], ['incomming' => $incomming])->with('latest_vote' , $latest_vote);
    }
}
