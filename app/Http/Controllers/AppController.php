<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Transaction;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function index()
    {
        $jumlahAccount = Account::count();

        $accounts = Account::all();

        $jumlahTracnsaction = Transaction::count();

        $trancastion = Transaction::count();
        return view('index', compact('jumlahAccount', 'jumlahTransaction', 'accounts', 'transaction'));
    }


}
