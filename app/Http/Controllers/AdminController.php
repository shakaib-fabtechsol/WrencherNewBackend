<?php

namespace App\Http\Controllers;

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
        return view('Admin.BusinessManagement');
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
        return view('Admin.Industry');
    }
    public function AddNewIndustry()
    {
        return view('Admin.AddNewIndustry');
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