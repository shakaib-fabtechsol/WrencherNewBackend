<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use App\Models\Industry;
use Illuminate\Support\Facades\Validator;
class CommenController extends Controller
{
    public function Profile(){
        
        $GetIndustry = Industry::all();
        return view('CommenProfile.EditProfile',compact('GetIndustry'));
    }

    public function UpdateProfile(Request $request){

        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
        if ($validator->fails()) {
            if ($request->wantsJson() || $request->is('api/*')) {
                return response()->json([
                    'errors' => $validator->errors()
                ], 400);
            }
            
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $data = $request->all();

        $GetUser=User::find($request->id);
        $user=$GetUser->update($data);
        if ($request->wantsJson() || $request->is('api/*')) {
        
            return response()->json([
                'message' => 'User details successfully updated!',
                'user' => $user,
            ], 200);
        }
     
        return back();
        
    }
}