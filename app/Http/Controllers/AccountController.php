<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;


class AccountController extends Controller
{
    public function index()
    {
        $accounts = Account::all();
        return view('accounts.index', compact('accounts'));
    }

    public function create()
    {
        return view('accounts.create', compact('create'));
    }

    public function edit($id)
    {
        $account = Account::find($id);
        return view('accounts.edit', compact('account'));
    }
    public function update(Request $request, $account)
    {
        $account->nama = $request->nama;
        $account->email = $request->email;
        $account->save();
        return redirect('/account');
    }
}
