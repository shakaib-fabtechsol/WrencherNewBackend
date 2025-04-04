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
        $SelectedIndustry=User::leftJoin('industries', 'users.industry', '=', 'industries.id')
        ->where('users.id', Session::get('user')->id)
        ->select('users.industry','industries.name as industry_name')
        ->first();
        $GetIndustry = Industry::where('id','!=',$SelectedIndustry->industry)->get();
        
    
        return view('CommenProfile.EditProfile',compact('GetIndustry','SelectedIndustry'));
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
        if ($request->hasFile('img')) {
            $imagePath = public_path('img/' . $GetUser->img);
            if (!empty($GetUser->img) && file_exists($imagePath)) {
                unlink($imagePath);
            }
            $photo1 = $request->file('img');
            $photo_name1 = time() . '-' . $photo1->getClientOriginalName();
            $photo_destination = public_path('img');
            $photo1->move($photo_destination, $photo_name1);
            $data['img'] = $photo_name1;   
        }
        $user=$GetUser->update($data);
        if ($request->wantsJson() || $request->is('api/*')) {
        
            return response()->json([
                'message' => 'User details successfully updated!',
                'user' => $GetUser,
            ], 200);
        }
     
        return redirect()->route('Profile')->with('success', 'User details successfully updated!');
        
    }
}