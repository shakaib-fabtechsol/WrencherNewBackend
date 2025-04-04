<?php

namespace App\Http\Controllers;

class ClientController extends Controller
{
    public function Dashboard()
    {
        return view('Client.Dashboard');
    }

    public function Payments()
    {
        return view('Client.Payments');
    }

    public function ClientQuatationDetail()
    {
        return view('Client.ClientQuatationDetail');
    }

    public function Setting()
    {
        return view('Client.Setting');
    }

    public function Notifications()
    {
        return view('Client.Notifications');
    }

    public function Profile()
    {
        return view('Client.Profile');
    }

    public function EditProfile()
    {
        return view('Client.EditProfile');
    }
}