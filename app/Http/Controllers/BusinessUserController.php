<?php

namespace App\Http\Controllers;

class BusinessUserController extends Controller
{

    public function Dashboard()
    {
        return view('BusinessUser.Dashboard');
    }

    public function AddNewJob()
    {
        return view('BusinessUser.AddNewJob');
    }

    public function WebsiteAnalytics()
    {
        return view('BusinessUser.WebsiteAnalytics');
    }

    public function scheduleCalendar()
    {
        return view('BusinessUser.scheduleCalendar');
    }

    public function Jobs()
    {
        return view('BusinessUser.Jobs');
    }

    public function Appliance()
    {
        return view('BusinessUser.Appliance');
    }

    public function Oppurtunities()
    {
        return view('BusinessUser.Oppurtunities');
    }

    public function Conversations()
    {
        return view('BusinessUser.Conversations');
    }

    public function Quotation()
    {
        return view('BusinessUser.Quotation');
    }

    public function AddNewQuote()
    {
        return view('BusinessUser.AddNewQuote');
    }

    public function AddPackageQuote()
    {
        return view('BusinessUser.AddPackageQuote');
    }

    public function QuotationDetail()
    {
        return view('BusinessUser.QuotationDetail');
    }
    public function ReviewQuote()
    {
        return view('BusinessUser.ReviewQuote');
    }

    public function Invoice()
    {
        return view('BusinessUser.Invoice');
    }

    public function CreateInvoice()
    {
        return view('BusinessUser.CreateInvoice');
    }

    public function Payment()
    {
        return view('BusinessUser.Payment');
    }

    public function Contract()
    {
        return view('BusinessUser.Contract');
    }

    public function AddNewContract()
    {
        return view('BusinessUser.AddNewContract');
    }

    public function EditContract()
    {
        return view('BusinessUser.EditContract');
    }

    public function Reports()
    {
        return view('BusinessUser.Reports');
    }

    public function Expense()
    {
        return view('BusinessUser.Expense');
    }

    public function AddNewExpenses()
    {
        return view('BusinessUser.AddNewExpenses');
    }

    public function ExpenseDetails()
    {
        return view('BusinessUser.ExpenseDetails');
    }

    public function PriceBook()
    {
        return view('BusinessUser.PriceBook');
    }

    public function plumbingDetails()
    {
        return view('BusinessUser.plumbingDetails');
    }

    public function NewServiceFields()
    {
        return view('BusinessUser.NewServiceFields');
    }

    public function Customer()
    {
        return view('BusinessUser.Customer');
    }

    public function AddNewCustomer()
    {
        return view('BusinessUser.AddNewCustomer');
    }

    public function CustomerDetails()
    {
        return view('BusinessUser.customerDetail');
    }

    public function Inventory()
    {
        return view('BusinessUser.Inventory');
    }

    public function AddNewInventory()
    {
        return view('BusinessUser.AddNewInventory');
    }

    public function Team()
    {
        return view('BusinessUser.Team');
    }

    public function NewTeamMember()
    {
        return view('BusinessUser.NewTeamMember');
    }

    public function TeamMemberDetail()
    {
        return view('BusinessUser.TeamMemberDetail');
    }

    public function Chat()
    {
        return view('BusinessUser.Chat');
    }

    public function Automations()
    {
        return view('BusinessUser.Automations');
    }

    public function AutomationSettings()
    {
        return view('BusinessUser.AutomationSettings');
    }

    public function Reputation()
    {
        return view('BusinessUser.Reputation');
    }

    public function Resources()
    {
        return view('BusinessUser.Resources');
    }

    public function Setting()
    {
        return view('BusinessUser.Setting');
    }

    public function SettingsBillingDetails()
    {
        return view('BusinessUser.SettingsBillingDetails');
    }

    public function SettingsPaymentSetup()
    {
        return view('BusinessUser.SettingsPaymentSetup');
    }

    public function Services()
    {
        return view('BusinessUser.Services');
    }
    public function AddNewService()
    {
        return view('BusinessUser.AddNewService');
    }

    public function Launchpad()
    {
        return view('BusinessUser.Launchpad');
    }

    public function Notifications()
    {
        return view('BusinessUser.Notifications');
    }
    public function test()
    {
        return response()->json([
            'message' => 'working'
        ], 200);
    }

}