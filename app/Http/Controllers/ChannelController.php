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

class ChannelController extends BaseController
{
    public function list($engineId){
        try {
            $result = \DB::select(
                    "SELECT c.id 'id'"
                    .", c.channelNo 'channelNo'"
                    .", c.name 'name'"
                    .", c.side 'side'"
                    .", c.displayUnit 'displayUnit'"
                    ."FROM ChannelView c "
                    ."LEFT OUTER JOIN EngineView e on c.ModelId = e.EngineModelId "
                    ."WHERE e.Id = '" . $engineId . "' "
                    ."ORDER BY c.channelNo");
            
            return response()->json($result);
        } catch (Throwable $e) {
            report($e);
            return "Channel.list()";
        }
    }
    
    public function get($channelId){
        $channelArray = explode(',', $channelId);
        $channelList = '';
        for ($i=0; $i<count($channelArray); $i++){
            $channelList .= '\'' . $channelArray[$i] . '\'';
            if ($i != count($channelArray) - 1) $channelList .= ',';
        }
        
        try{
             $result = \DB::select(
                    "SELECT c.id 'id'"
                    .", c.channelNo 'channelNo'"
                    .", c.name 'name'"
                    .", c.side 'side'"
                    .", c.displayUnit 'displayUnit'"
                    ."FROM ChannelView c "
                    ."WHERE c.Id IN (" . $channelList . ")"
                    );
            return response()->json($result);
        }catch(Throwable $e){
            report($e);
            return "Channel.get()";
        }
    }
}