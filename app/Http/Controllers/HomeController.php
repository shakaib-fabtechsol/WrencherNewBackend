<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function Index()
    {
        return view('Index');
    }

    public function Features()
    {
        return view('Features');
    }

    public function Pricing()
    {
        return view('Pricing');
    }

    public function ResourcesAll()
    {
        return view('ResourcesAll');
    }

    public function Resources()
    {
        return view('Resources');
    }

    public function PlanYourService()
    {
        return view('PlanYourService');
    }
    public function BookingService()
    {
        return view('BookingService');
    }
    public function BookingStepper()
    {
        return view('BookingStepper');
    }
    public function RequestQuote()
    {
        return view('RequestQuote');
    }
    public function PersonEstimate()
    {
        return view('PersonEstimate');
    }
}
