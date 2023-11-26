<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Account;
use DB;

class EdietUsersConreoller extends Controller
{
    public function editaccounts()
    {
        $userse = User::all();
        return view('dash.accounts', compact('userse'));
    }
    public function gneralsetting($id)
    {
        $users = User::find($id);
        return view('dash.setting', compact('users'));
    }
    public function addmoney($id)
    {
        $users = User::find($id);
        return view('dash.addmoney', compact('users'));
    }
    public function edituser($id)
    {
        $users = User::find($id);
        return view('dash.gneralsetting', compact('users'));
    }


    public function creataddmoney(Request $request)
    {
        $account_no = $request->input('account_no');
        $user_id = $request->input('user_id');
        $type = $request->input('type');
        $balance = $request->input('balance');
        $data = array('account_no' => $account_no, "user_id" => $user_id, "type" => $type, "balance" => $balance);
        DB::table('accounts')->insert($data);
        return redirect()->route('admin.edit')->withSuccess('تم ');
    }
    public function updatedata(Request $request, $id)
    {
        $user = User::find($id);
        $user->username = $request->input('username');
        $user->name = $request->input('name');
        $user->phone = $request->input('phone');
        $user->boxnumber = $request->input('boxnumber');
        $user->email = $request->input('email');
        $user->information = $request->input('information');
        $user->contry = $request->input('contry');
        $user->city = $request->input('city');
        $user->update();
        return redirect()->route('admin.edit');
    }
    public function editsetting(Request $request, $id)
    {
        $acc = Account::find($id);
        $acc->balance = $request->input('balance');
        $acc->update();
        return redirect()->route('admin.edit');
    }

}