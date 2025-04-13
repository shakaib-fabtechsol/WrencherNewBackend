<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\BusinessUserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CommenController;
Route::controller(AuthController::class)->group(function () {
    Route::get('Login', 'Login')->name('Login');
    Route::post('ProcessLogin', 'ProcessLogin')->name('ProcessLogin');
    Route::get('Signup', 'Signup')->name('Signup');
    Route::post('ProcessSignup', 'ProcessSignup')->name('ProcessSignup');
    Route::get('NewPassword', 'NewPassword')->name('NewPassword');
    Route::get('ForgetPassword', 'ForgetPassword')->name('ForgetPassword');
    Route::post('ResetPasswordEmail','ResetPasswordEmail')->name('ResetPasswordEmail');
    Route::post('ChangePassword', 'ChangePassword')->name('ChangePassword');
    Route::get('Terms', 'Terms')->name('Terms');
    Route::get('Logout', 'Logout')->name('Logout');
});
Route::controller(CommenController::class)->group(function () {
    Route::get('Profile', 'Profile')->name('Profile');
    Route::post('UpdateProfile', 'UpdateProfile')->name('UpdateProfile');  
      
});
Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'Index')->name('Home');
    Route::get('PlanYourService', 'PlanYourService')->name('PlanYourService');
    Route::get('BookingService', 'BookingService')->name('BookingService');
    Route::get('BookingStepper', 'BookingStepper')->name('BookingStepper');
    Route::get('RequestQuote', 'RequestQuote')->name('RequestQuote');
    Route::get('PersonEstimate', 'PersonEstimate')->name('PersonEstimate');
    Route::get('Features', 'Features')->name('Features');
    Route::get('Pricing', 'Pricing')->name('Pricing');
    Route::get('Resources', 'Resources')->name('Resources');
    Route::get('ResourcesAll', 'ResourcesAll')->name('ResourcesAll');
});

Route::group(['middleware' => ['AdminMiddleware']], function () {
    Route::prefix('Admin')->group(function () {
        Route::controller(AdminController::class)->group(function () {
            Route::get('Dashboard', 'Dashboard')->name('Admin.Dashboard');
            Route::get('BusinessManagement', 'BusinessManagement')->name('Admin.BusinessManagement');
            Route::get('DeleteUser/{id}', 'DeleteUser')->name('Admin.DeleteUser');
            Route::get('EditUser/{id}', 'EditUser')->name('Admin.EditUser');
            Route::post('UpdateUser/{id}', 'UpdateUser')->name('Admin.UpdateUser');
            Route::get('ViewDetail', 'ViewDetail')->name('Admin.ViewDetail');

            Route::get('Chat', 'Chat')->name('Admin.Chat');

            Route::get('Packages', 'Packages')->name('Admin.Packages');
            Route::get('AddNewPackage', 'AddNewPackage')->name('Admin.AddNewPackage');
            Route::post('Savepackage', 'Savepackage')->name('Admin.Savepackage');
            Route::get('DeletePackage/{id}', 'DeletePackage')->name('Admin.DeletePackage');
            Route::get('EditPackage/{id}', 'EditPackage')->name('Admin.EditPackage');
            Route::post('UpdatePackage/{id}', 'UpdatePackage')->name('Admin.UpdatePackage');


            Route::get('Industry', 'Industry')->name('Admin.Industry');
            Route::get('AddNewIndustry', 'AddNewIndustry')->name('Admin.AddNewIndustry');
            Route::post('SaveIndustry', 'SaveIndustry')->name('Admin.SaveIndustry');
            Route::get('DeleteIndustry/{id}', 'DeleteIndustry')->name('Admin.DeleteIndustry');
            Route::get('EditIndustry/{id}', 'EditIndustry')->name('Admin.EditIndustry');
            Route::post('UpdateIndustry/{id}', 'UpdateIndustry')->name('Admin.UpdateIndustry');
            
            Route::get('Notifications', 'Notifications')->name('Admin.Notifications');
            Route::get('Profile', 'Profile')->name('Admin.Profile');
            Route::get('EditProfile', 'EditProfile')->name('Admin.EditProfile');
            Route::get('CreateSubadmin', 'CreateSubadmin')->name('Admin.CreateSubadmin');
        });
    });
});

Route::group(['middleware' => ['ClientMiddleware']], function () {
    Route::prefix('Client')->group(function () {
        Route::controller(ClientController::class)->group(function () {
            Route::get('Dashboard', 'Dashboard')->name('Client.Dashboard');
            Route::get('Payments', 'Payments')->name('Client.Payments');
            Route::get('ClientQuatationDetail', 'ClientQuatationDetail')->name('Client.ClientQuatationDetail');
            Route::get('Setting', 'Setting')->name('Client.Setting');
            Route::get('Notifications', 'Notifications')->name('Client.Notifications');
            Route::get('Profile', 'Profile')->name('Client.Profile');
            Route::get('EditProfile', 'EditProfile')->name('Client.EditProfile');
        });
    });
});

Route::group(['middleware' => ['BusinessUserMiddleware']], function () {
    Route::prefix('BusinessUser')->group(function () {
        Route::controller(BusinessUserController::class)->group(function () {
            Route::get('Dashboard', 'Dashboard')->name('BusinessUser.Dashboard');
            Route::get('WebsiteAnalytics', 'WebsiteAnalytics')->name('BusinessUser.WebsiteAnalytics');
            Route::get('AddNewJob', 'AddNewJob')->name('BusinessUser.AddNewJob');
            Route::get('scheduleCalendar', 'scheduleCalendar')->name('BusinessUser.scheduleCalendar');
            Route::get('Jobs', 'Jobs')->name('BusinessUser.Jobs');
            Route::get('Oppurtunities', 'Oppurtunities')->name('BusinessUser.Oppurtunities');
            Route::get('Conversations', 'Conversations')->name('BusinessUser.Conversations');
            Route::get('Quotation', 'Quotation')->name('BusinessUser.Quotation');
            Route::get('QuotationDetail', 'QuotationDetail')->name('BusinessUser.QuotationDetail');
            Route::get('AddNewQuote', 'AddNewQuote')->name('BusinessUser.AddNewQuote');
            Route::get('AddPackageQuote', 'AddPackageQuote')->name('BusinessUser.AddPackageQuote');
            Route::get('Invoice', 'Invoice')->name('BusinessUser.Invoice');
            Route::get('CreateInvoice', 'CreateInvoice')->name('BusinessUser.CreateInvoice');
            Route::get('ReviewQuote', 'ReviewQuote')->name('BusinessUser.ReviewQuote');
            Route::get('Payment', 'Payment')->name('BusinessUser.Payment');
            Route::get('Contract', 'Contract')->name('BusinessUser.Contract');
            Route::get('AddNewContract', 'AddNewContract')->name('BusinessUser.AddNewContract');
            Route::get('EditContract', 'EditContract')->name('BusinessUser.EditContract');
            Route::get('Reports', 'Reports')->name('BusinessUser.Reports');
            Route::get('AddNewExpenses', 'AddNewExpenses')->name('BusinessUser.AddNewExpenses');
            Route::get('ExpenseDetails', 'ExpenseDetails')->name('BusinessUser.ExpenseDetails');
            Route::get('PriceBook', 'PriceBook')->name('BusinessUser.PriceBook');
            Route::get('Customer', 'Customer')->name('BusinessUser.Customer');
            Route::post('StoreCustomer', 'StoreCustomer')->name('BusinessUser.StoreCustomer');
            Route::get('AddNewCustomer', 'AddNewCustomer')->name('BusinessUser.AddNewCustomer');
            Route::get('CustomerDetails', 'CustomerDetails')->name('BusinessUser.CustomerDetails');
            Route::get('Inventory', 'Inventory')->name('BusinessUser.Inventory');
            Route::get('AddNewInventory', 'AddNewInventory')->name('BusinessUser.AddNewInventory');
            Route::get('Team', 'Team')->name('BusinessUser.Team');
            Route::get('NewTeamMember', 'NewTeamMember')->name('BusinessUser.NewTeamMember');
            Route::get('TeamMemberDetail', 'TeamMemberDetail')->name('BusinessUser.TeamMemberDetail');
            Route::get('Chat', 'Chat')->name('BusinessUser.Chat');
            Route::get('Automations', 'Automations')->name('BusinessUser.Automations');
            Route::get('AutomationSettings', 'AutomationSettings')->name('BusinessUser.AutomationSettings');
            Route::get('Reputation', 'Reputation')->name('BusinessUser.Reputation');
            Route::get('Resources', 'Resources')->name('BusinessUser.Resources');
            Route::get('Setting', 'Setting')->name('BusinessUser.Setting');
            Route::get('SettingsBillingDetails', 'SettingsBillingDetails')->name('BusinessUser.SettingsBillingDetails');
            Route::get('SettingsPaymentSetup', 'SettingsPaymentSetup')->name('BusinessUser.SettingsPaymentSetup');
            Route::get('AddNewService', 'AddNewService')->name('BusinessUser.AddNewService');
            Route::get('Services', 'Services')->name('BusinessUser.Services');
            Route::get('Launchpad', 'Launchpad')->name('BusinessUser.Launchpad');
            Route::get('Notifications', 'Notifications')->name('BusinessUser.Notifications');

            Route::post('CreateInventory', 'CreateInventory')->name('BusinessUser.CreateInventory');
            Route::get('Inventory', 'Inventory')->name('BusinessUser.Inventory');
            Route::get('DeleteInventory/{id}', 'DeleteInventory')->name('BusinessUser.DeleteInventory');
            
            Route::post('CreateExpense', 'CreateExpense')->name('BusinessUser.CreateExpense');
            Route::post('UpdateExpense/{id}', 'UpdateExpense')->name('BusinessUser.UpdateExpense');
            Route::get('EditExpense/{id}', 'EditExpense')->name('BusinessUser.EditExpense');
            Route::get('Expense', 'Expense')->name('BusinessUser.Expense');
            Route::get('DeleteExpense/{id}', 'DeleteExpense')->name('BusinessUser.DeleteExpense');
            Route::get('CreateService', 'CreateService')->name('BusinessUser.CreateService');
        });
    });
});