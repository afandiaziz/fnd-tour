<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\TransactionRequest;
use Illuminate\Support\Str;
use App\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Transaction::with(['details', 'travel_package', 'users'])->get();
        return view('pages.admin.transaction.index', ['items' => $items]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.transaction.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TransactionRequest $request)
    {
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Transaction  $Transaction
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = Transaction::with(['details', 'travel_package', 'users'])->FindOrFail($id);
        return view('pages.admin.transaction.detail', ['item' => $item]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Transaction  $Transaction
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Transaction::FindOrFail($id);
        return view('pages.admin.transaction.edit', ['item' => $item]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Transaction  $Transaction
     * @return \Illuminate\Http\Response
     */
    public function update(TransactionRequest $request, $id)
    {
        $data = $request->all();
        $item = Transaction::FindOrFail($id);
        $item->update($data);

        return redirect()->route('transaction.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Transaction  $Transaction
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Transaction::FindOrFail($id);
        $item->delete();
        return redirect()->route('transaction.index');
    }
}
