<?php

namespace App\Http\Controllers;

use App\Models\Enquiry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('pages.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect()->route('dashboard');
        }

        return back()->with('error', 'Invalid credentials');
    }

    public function dashboard()
    {
        $sellCount = Enquiry::query()->where('enquiry_type', 'sell')->count();
        $rentCount = Enquiry::query()->where('enquiry_type', 'rent')->count();
        $ticketCount = Enquiry::query()->where('enquiry_type', 'ticket')->count();
        $totalEnquiries = $sellCount + $rentCount + $ticketCount;

        return view('pages.dashboard.index', [
            'sellCount' => $sellCount,
            'rentCount' => $rentCount,
            'ticketCount' => $ticketCount,
            'sellPercentage' => $totalEnquiries > 0 ? round(($sellCount / $totalEnquiries) * 100) : 0,
            'rentPercentage' => $totalEnquiries > 0 ? round(($rentCount / $totalEnquiries) * 100) : 0,
            'ticketPercentage' => $totalEnquiries > 0 ? round(($ticketCount / $totalEnquiries) * 100) : 0,
            'chartTotal' => $sellCount + $rentCount,
            'allEnquiryTotal' => $totalEnquiries,
        ]);
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('login');
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|min:6|confirmed',
        ]);

        $user = Auth::user();

        if (!Hash::check($request->old_password, $user->password)) {
            return back()->with('error', 'Old password incorrect');
        }

        $user->password = Hash::make($request->new_password);
        $user->save();

        return back()->with('success', 'Password updated successfully');
    }
}
