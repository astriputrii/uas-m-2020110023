<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class TransactionController extends Controller
{
    public function index()
    {
        $transaction = Transaction::all();
        return view('transaction.index', compact('transaction'));
    }

    public function create()
    {
        return view('transaction.create');
    }
    public function store(Request $request)
    {
        DB::beginTransaction();

        try {
            $transaction = new Transaction;
            $transaction->nama = $request->nama;
            $transaction->email = $request->email;
            $transaction->password = bcrypt($request->getPassword);
            $transaction->save();

            DB::commit();

            return redirect('/transaction');
        } catch (\Exception $e)
        {
            DB::rollBack();

            return back()->withInput()->withErrors(['message' => 'Registrasi Gagal']);
        }
    }
}
