<?php

namespace App\Http\Controllers;

use App\Models\Kwitasi;
use App\Models\Pengeluaran;
use App\Models\Slip;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {

        $slip = Slip::count();
        $kwintansi = Kwitasi::count();
        $pengeluaran = Pengeluaran::count();
        $totalPengeluaran = Pengeluaran::sum('biaya');

        return view('pages.dasboard')->with([
            'pengeluaran' => $pengeluaran,
            'kwintansi' => $kwintansi,
            'slip' => $slip,
            'totalPengeluaran' => $totalPengeluaran
        ]);
    }
}
