<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApplicationController extends Controller{
    public function show($application){
        if($application == 'takecontrol'){
            return view('application.takecontrol');
        }elseif($application == 'teamviewer'){
            return redirect('https://get.teamviewer.com/smarttime');
        }else{
            abort(404);
        }
    }

    public function post($application, Request $request){
        if($application == 'takecontrol'){
            return redirect('https://startcontrol.com/'.$request->code);
        }else{
            abort(404);
        }
    }
}
