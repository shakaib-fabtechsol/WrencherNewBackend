<?php

namespace App\Http\Controllers;

use App\Models\Industry;
use App\Models\Inventory;
use App\Models\Packages;
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
        $packages = Packages::get();
        return view('Admin.Packages', ['packages' => $packages]);
    }
    public function AddNewPackage()
    {
        return view('Admin.AddNewPackage');
    }
    public function Savepackage(Request $request)
    {
        $request->validate([
            'name'     => 'required|string|max:255',
            'price'    => 'required|string|max:255',
            'discount'    => 'required|string|max:255',
        ]);

        $discounted = $request->price - ($request->price * $request->discount / 100);

        $package = Packages::create([
            'name'     => $request->name,
            'price'     => $request->price,
            'discount'     => $request->discount,
            'discountedprice'     => $discounted
        ]);
        return redirect()->route('Admin.Packages');
    }
    public function EditPackage($id)
    {
        $package = Packages::findOrFail($id);
        return view('Admin.EditPackage', compact('package'));
    }
    public function UpdatePackage(Request $request, $id)
    {
        $request->validate([
            'name'     => 'required|string|max:255',
            'price'    => 'required|numeric',
            'discount' => 'required|numeric|min:0|max:100',
        ]);

        $package = Packages::findOrFail($id);

        $discounted = $request->price - ($request->price * $request->discount / 100);

        $package->update([
            'name'             => $request->name,
            'price'            => $request->price,
            'discount'         => $request->discount,
            'discountedprice'  => round($discounted, 2),
        ]);

        return redirect()->route('Admin.Packages')->with('success', 'Package updated successfully.');
    }
    public function DeletePackage($id)
    {
        $package = Packages::findOrFail($id);
        $package->delete();

        return redirect()->route('Admin.Packages')->with('success', 'Package deleted successfully.');
    }




    public function Industry()
    {
        $industries = Industry::get();
        return view('Admin.Industry', ['industries' => $industries]);
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
    public function DeleteIndustry($id)
    {
        $industry = Industry::findOrFail($id);
        $imagePath = public_path('uploads/' . $industry->img);
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }
        $industry->delete();
        return redirect()->route('Admin.Industry')->with('success', 'Industry deleted successfully.');
    }
    public function EditIndustry($id)
    {
        $industry = Industry::findOrFail($id);
        return view('admin.EditIndustry', compact('industry'));
    }
    public function UpdateIndustry(Request $request, $id)
    {
        $industry = Industry::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'img' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $industry->name = $request->name;

        if ($request->hasFile('img')) {
            $oldPath = public_path('uploads/' . $industry->img);
            if (file_exists($oldPath)) {
                unlink($oldPath);
            }
            $photo = $request->file('img');
            $photo_name = time() . "-" . $photo->getClientOriginalName();
            $photo->move(public_path('uploads'), $photo_name);

            $industry->img = $photo_name;
        }

        $industry->save();

        return redirect()->route('Admin.Industry')->with('success', 'Industry updated successfully.');
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




    public function Services()
    {
        return view('Admin.Services');
    }
    public function AddNewService()
    {
        return view('Admin.AddNewService');
    }
}
