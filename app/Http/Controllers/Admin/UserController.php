<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $users = User::paginate(15);
        return view('admin.users.list',['users'=>$users]);
    }

    public function lock($id)
    {
        $user = User::findOrFail($id);
        $user->status = User::STATUS['DE_ACTIVE'];
        $user->save();
        return redirect()->route('admin.users.list');
    }

    public function unLock($id)
    {
        $user = User::findOrFail($id);
        $user->status = User::STATUS['ACTIVE'];
        $user->save();
        return redirect()->route('admin.users.list');
    }
}
