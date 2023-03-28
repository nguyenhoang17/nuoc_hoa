<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\Staff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function login(LoginRequest $request)
    {
        try{
            $staff = Staff::where('email',$request->input('email'))->first();
            if($staff && $staff->status == Staff::STATUS['DE_ACTIVE']){
                return back()->withErrors([
                    'login' => 'Tài khoản của bạn đã bị khóa'
                ])->withInput();
            }
            $email = $request->get('email');
            $password = $request->get('password');
            if (Auth::guard('admin')->attempt(array('email' => $email,'password' => $password,'status' => Staff::STATUS['ACTIVE']))) {
                $request->session()->regenerate();
                return redirect()->intended('admin/dashboard');
            }
            return back()->withErrors([
                'login' => 'Thông tin đăng nhập không chính xác'
            ])->withInput();
        }catch (\Exception $exception){
            DB::rollBack();
            \Log::error([
                'method' => __METHOD__,
                'line' => __LINE__,
                'message' => $exception->getMessage(),
                'data' => $request->all()
            ]);
            $request->session()->flash('error','Có lỗi xảy ra khi đăng nhập');
            return redirect()->back();
        }
    }
}
