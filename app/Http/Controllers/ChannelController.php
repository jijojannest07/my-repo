<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\StatusLiked;
use Exception;

class ChannelController extends Controller
{
    public function index(){
        return view('create');
    }
    public function send(Request $request){
        try{
            event(new StatusLiked($request['value']));
            return view('create');
        }
        catch(Exception $e){
            return ('No internet');
        }
    }
}
