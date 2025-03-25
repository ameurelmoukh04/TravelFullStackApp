<?php

namespace App\Http\Controllers;

use App\Models\City;
use Auth;
use \Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class TestController extends Controller
{
    public function addcity(Request $request){
        //Log::info('User Role:', ['role' => Auth::user()->role]);
        $user = Auth::user();
        Gate::authorize('add_city',$user);
    
        return response()->json(['message' => 'city added successfully']);
    }
}
