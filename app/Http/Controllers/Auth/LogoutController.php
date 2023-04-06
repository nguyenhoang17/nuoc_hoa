<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class LogoutController extends Controller
{
    public function logoutAdmin(Request $request)
    {
        DB::beginTransaction();
        try {
            Auth::guard('admin')->logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
            DB::commit();
            return redirect()->route('admin.login');
        }catch (\Exception $exception) {
            DB::rollBack();
            \Log::error([
                'methor' =>  __METHOD__,
                'line' => __LINE__,
                'message' => $exception->getMessage(),
                'data' => $request->all(),
                'user_id' => Auth::id(),
            ]);
        }
    }
}
