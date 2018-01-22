<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function insert (Request $req)
    {
        $dag = $req-> input('dag');
        $maand = $req-> input('maand');
        $jaar = $req-> input('jaar');

        $geboorte_datum = $dag + $maand + $jaar;


        $data = array('Date_birth' => $geboorte_datum);

        DB::table('users')->insert($data);
    }
    
}
