<?php

namespace App\Http\Controllers;

use App\Models\Industry;
use App\Models\Inventory;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function Dashboard()
    {
        return view('Admin.Dashboard');
    }
    public function WebsiteAnalytics()
    {
        return view('Admin.WebsiteAnalytics');
    }

    public function BusinessManagement()
    {
        $user = User::where('role', 1)->get();
        return view('Admin.BusinessManagement', ['users' => $user]);
    }
    public function ViewDetail()
    {
        return view('Admin.ViewDetail');
    }
    public function ScheduleCalendar()
    {
        return view('Admin.ScheduleCalendar');
    }

    public function Chat()
    {
        return view('Admin.Chat');
    }

    public function Packages()
    {
        return view('Admin.Packages');
    }
    public function AddNewPackage()
    {
        return view('Admin.AddNewPackage');
    }

    public function Services()
    {
        return view('Admin.Services');
    }
    public function AddNewService()
    {
        return view('Admin.AddNewService');
    }

    public function Industry()
    {
        $industries = Industry::get();
        return view('Admin.Industry', ['industries'=> $industries]);
    }
    public function AddNewIndustry()
    {
        return view('Admin.AddNewIndustry');
    }
    public function SaveIndustry(Request $request)
    {
        $request->validate([
            'name'     => 'required|string|max:255',
            'img'    => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $photo = $request->file('img');
        $photo_name = time() . "-" . $photo->getClientOriginalName();
        $photo_destination = public_path('uploads');
        $photo->move($photo_destination, $photo_name);

        $industry = Industry::create([
            'name'     => $request->name,
            'img'    => $photo_name,
        ]);
        return redirect()->route('Admin.Industry');
    }

    public function Notifications()
    {
        return view('Admin.Notifications');
    }

    public function Profile()
    {
        return view('Admin.Profile');
    }
    public function EditProfile()
    {
        return view('Admin.EditProfile');
    }
    public function CreateSubadmin()
    {
        return view('Admin.CreateSubadmin');
    }
}
