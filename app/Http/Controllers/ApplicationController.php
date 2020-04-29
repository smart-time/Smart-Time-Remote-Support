<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApplicationController extends Controller{
    public function show($application){
        if($application == 'takecontrol'){
            return view('application.takecontrol');
        }elseif($application == 'teamviewer'){
            return redirect('https://get.teamviewer.com/smarttime');
        }elseif($application == 'datto'){
            return redirect('https://merlot.centrastage.net/csm/profile/downloadAgent/08563c7a-2087-4f3f-a410-6fd7cd8bd423');
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
