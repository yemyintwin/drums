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
use stdClass;

class VesselController extends BaseController
{
    public function list(){
        try {
            $vesselList = \DB::select("select id 'id', vesselName 'vesselName' from VesselView");
            
            for ($i=0; $i < count($vesselList); $i++){
                $v = $vesselList[$i];
                $v->engines =  \DB::select(
                        "select id 'id'"
                        . ", serialNo 'serialNo'"
                        . ", side 'side'"
                        . "from drums.engineview e "
                        . "where e.vesselId = '" . $v->id . "'");
            }
            $result = new StdClass();
            $result->data = $vesselList;
            return response()->json($result);
        } catch (Throwable $e) {
            report($e);
            return "Vessle.list()";
        }
    }
}