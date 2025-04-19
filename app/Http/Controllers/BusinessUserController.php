<?php

namespace App\Http\Controllers;

use App\Models\Industry;
use App\Models\Inventory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Expense;
use App\Models\Wjob;
use App\Models\TeamMember;

class BusinessUserController extends Controller
{

    public function Dashboard()
    {
        return view('BusinessUser.Dashboard');
    }

    public function AddNewJob()
    {
        $customers = User::select('id','name','email')->where('businessUserId', Session::get('user')->id)->orderBy('id','desc')->get();
        return view('BusinessUser.AddNewJob', compact('customers'));
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
        $customers = User::where('businessUserId', Session::get('user')->id)->orderBy('id','desc')->get();

        return view('BusinessUser.Customer', compact('customers'));
    }
    public function CreateService()
    {
        return view('BusinessUser.CreateService');
    }
    public function StoreCustomer(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'name' => 'required',
            'phone' => 'required',
            'company' => 'required',
            'location' => 'required',
            'referrance' => 'required',
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
        if(Auth::check()){
            $data['businessUserId'] = Auth::user()->id;
        }else{
            $data['businessUserId'] = Session::get('user')->id;
        }
        $data['role'] = 2;
        $user = User::create($data);

        if ($request->wantsJson() || $request->is('api/*')) {
            return response()->json([
                'message' => 'Customer added successfully!',
                'user' => $user
            ], 200);
        }

        if($request->returnback == 'customer')
        {
            return redirect()->route('BusinessUser.Customer')->with('success','customer has been added successfully');
        }
        return redirect()->back()->with('success','customer has been added successfully');
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
        $loginUser = auth()->user()->id;
        $inventories = Inventory::where('businessUserId', $loginUser)->get();
        $outOfStock = Inventory::where('businessUserId', $loginUser)
        ->where('quantity', 0)
        ->get();
        $lowStock = Inventory::where('businessUserId', $loginUser)
        ->where('quantity', '<', 10)
        ->where('quantity', '>', 0)
        ->get();
        if (request()->is('api/*')) {
            return response()->json([
                'inventories' => $inventories,
                'out_of_stock' => $outOfStock,
                'low_stock' => $lowStock,
            ], 200);
        }
        return view('BusinessUser.Inventory', [
            'inventories' => $inventories,
            'outOfStock' => $outOfStock,
            'lowStock' => $lowStock,
        ]);
    }
    public function CreateInventory(Request $request) {
        $validator = Validator::make($request->all(), [
            '*' => 'required',
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
        $data['businessUserId'] = auth()->user()->id;
        $inventory = Inventory::create($data);

        if ($request->wantsJson() || $request->is('api/*')) {
            return response()->json([
                'message' => 'Inventory added successfully!',
                'inventory' => $inventory
            ], 200);
        }
        return redirect()->route('BusinessUser.Inventory')->with('success','Inventory added successfully');
    }

    // public function UpdateInventory(Request $request, $id)
    // {
    //     $validator = Validator::make($request->all(), [
    //         '*' => 'required',
    //     ]);

    //     if ($validator->fails()) {
    //         if ($request->wantsJson() || $request->is('api/*')) {
    //             return response()->json([
    //                 'errors' => $validator->errors()
    //             ], 400);
    //         }
    //         return redirect()->back()->withErrors($validator)->withInput();
    //     }

    //     $inventory = Inventory::findOrFail($id);
    //     $inventory->update($request->all());

    //     if ($request->wantsJson() || $request->is('api/*')) {
    //         return response()->json([
    //             'message' => 'Inventory updated successfully!',
    //             'inventory' => $inventory
    //         ], 200);
    //     }
    //     return redirect()->route('BusinessUser.Inventory')->with('success', 'Inventory updated successfully');
    // }

    public function DeleteInventory($id)
    {
        $inventory = Inventory::findOrFail($id);
        $inventory->delete();

        if (request()->is('api/*')) {
            return response()->json([
                'message' => 'Inventory deleted successfully!'
            ], 200);
        }
        return redirect()->route('BusinessUser.Inventory')->with('success', 'Inventory deleted successfully');
    }
    public function AddNewExpenses()
    {
        $jobs = Wjob::where('businessUserId', auth()->id())
            ->orderBy('id', 'desc')
            ->get();

        $items = Inventory::where('businessUserId', auth()->id())
            ->orderBy('id', 'desc')
            ->get();

        return view('BusinessUser.AddNewExpenses', compact('jobs', 'items'));
    }
    public function CreateExpense(Request $request)
    {
        $validator = Validator::make($request->all(), [
            '*' => 'required',
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
        $data['businessUserId'] = auth()->user()->id;

        if ($request->hasFile('receipt')) {
            $photo = $request->file('receipt');
            $photo_name = time() . "-" . $photo->getClientOriginalName();
            $photo_destination = public_path('uploads/receipts');
            $photo->move($photo_destination, $photo_name);
            $data['receipt'] = 'uploads/receipts/' . $photo_name;
        }

        $expense = Expense::create($data);

        if ($request->wantsJson() || $request->is('api/*')) {
            return response()->json([
                'message' => 'Expense created successfully!',
                'expense' => $expense
            ], 200);
        }
        return redirect()->route('BusinessUser.Expense')->with('success', 'Expense created successfully');
    }

    public function UpdateExpense(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'job_id' => 'required|exists:jobs,id',
            'item_id' => 'required|exists:inventory,id',
            'quantity' => 'required|integer|min:1',
            'cost' => 'required|numeric|min:0',
            'description' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            if ($request->wantsJson() || $request->is('api/*')) {
                return response()->json([
                    'errors' => $validator->errors()
                ], 400);
            }
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $expense = Expense::findOrFail($id);
        $expense->update($request->all());

        if ($request->wantsJson() || $request->is('api/*')) {
            return response()->json([
                'message' => 'Expense updated successfully!',
                'expense' => $expense
            ], 200);
        }
        return redirect()->route('BusinessUser.Expense')->with('success', 'Expense updated successfully');
    }

    public function DeleteExpense($id)
    {
        $expense = Expense::findOrFail($id);
        $expense->delete();

        if (request()->is('api/*')) {
            return response()->json([
                'message' => 'Expense deleted successfully!'
            ], 200);
        }
        return redirect()->route('BusinessUser.Expense')->with('success', 'Expense deleted successfully');
    }

    public function Expense()
    {
        $expenses = Expense::where('businessUserId', auth()->user()->id)
        ->orderBy('id', 'desc')
        ->get();

        if (request()->is('api/*')) {
            return response()->json([
                'expenses' => $expenses
            ], 200);
        }
        return view('BusinessUser.Expense', compact('expenses'));
    }
    
    public function AddNewInventory()
    {
        return view('BusinessUser.AddNewInventory');
    }

    public function Team()
    {
        $users = TeamMember::where('businessUserId', auth()->user()->id)
        ->orderBy('id', 'desc')
        ->get();

        if (request()->is('api/*')) {
            return response()->json([
                'users' => $users
            ], 200);
        }
        return view('BusinessUser.Team', compact('users'));
    }
    
    public function NewTeamMember()
    {
        return view('BusinessUser.NewTeamMember');
    }
    // public function SaveNewTeamMember(Request $request)
    // {
    //     $validator = Validator::make($request->all(), [
    //         'name' => 'required',
    //         'email' => 'required|email|unique:users',
    //         'password' => 'required',
    //         'phone' => 'required',
    //         'role' => 'required',
    //     ]);

    //     if ($validator->fails()) {
    //         if ($request->wantsJson() || $request->is('api/*')) {
    //             return response()->json([
    //                 'errors' => $validator->errors()
    //             ], 400);
    //         }
    //         return redirect()->back()->withErrors($validator)->withInput();
    //     }

    //     $data = $request->all();
    //     $data['businessUserId'] = auth()->user()->id;
    //     $user = User::create($data);

    //     if ($request->wantsJson() || $request->is('api/*')) {
    //         return response()->json([
    //             'message' => 'Team member added successfully!',
    //             'user' => $user
    //         ], 200);
    //     }
    //     return redirect()->route('BusinessUser.Team')->with('success', 'Team member added successfully');
    // }
    // public function CreateTeam()
    // {
    //     return view('BusinessUser.CreateTeam');
    // }
    // public function EditTeam()
    // {
    //     return view('BusinessUser.EditTeam');
    // }
    // public function UpdateTeam(Request $request, $id)
    // {
    //     $validator = Validator::make($request->all(), [
    //         'name' => 'required',
    //         'email' => 'required|email|unique:users,email,' . $id,
    //         'phone' => 'required',
    //         'role' => 'required',
    //     ]);

    //     if ($validator->fails()) {
    //         if ($request->wantsJson() || $request->is('api/*')) {
    //             return response()->json([
    //                 'errors' => $validator->errors()
    //             ], 400);
    //         }
    //         return redirect()->back()->withErrors($validator)->withInput();
    //     }

    //     $user = User::findOrFail($id);
    //     $user->update($request->all());

    //     if ($request->wantsJson() || $request->is('api/*')) {
    //         return response()->json([
    //             'message' => 'Team member updated successfully!',
    //             'user' => $user
    //         ], 200);
    //     }
    //     return redirect()->route('BusinessUser.Team')->with('success', 'Team member updated successfully');
    // }
    // public function DeleteTeam($id)
    // {
    //     $user = User::findOrFail($id);
    //     $user->delete();

    //     if (request()->is('api/*')) {
    //         return response()->json([
    //             'message' => 'Team member deleted successfully!'
    //         ], 200);
    //     }
    //     return redirect()->route('BusinessUser.Team')->with('success', 'Team member deleted successfully');
    // }
    // public function TeamMemberDetail($id)
    // {
    //     $user = User::findOrFail($id);
    //     $industries = Industry::get();
    //     if (request()->is('api/*')) {
    //         return response()->json([
    //             'user' => $user,
    //             'industries' => $industries
    //         ], 200);
    //     }
    //     return view('BusinessUser.TeamMemberDetail', compact('user', 'industries'));
    // }



    // public function TeamMemberDetail()
    // {
    //     return view('BusinessUser.TeamMemberDetail');
    // }

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
        $industries = Industry::get();
        return view('BusinessUser.AddNewService', [
            'industries' => $industries,
        ]);
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