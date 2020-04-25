<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class MonitoringController extends BaseController
{
    public function trending($vesselId, $engineId, $channels, $from, $to){
        try {
            $monitoring = \DB::select('call sp_Trending(?,?,?,?,?)', [$vesselId, $engineId, $channels, $from, $to]);
            return response()->json($monitoring);
        } catch (Throwable $e) {
            report($e);
            return "Error..";
        }
    }
}