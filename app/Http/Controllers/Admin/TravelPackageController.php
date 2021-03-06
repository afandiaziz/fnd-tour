<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\TravelPackageRequest;
use Illuminate\Support\Str;
use App\TravelPackage;
use Illuminate\Http\Request;

class TravelPackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = TravelPackage::all();
        return view('pages.admin.travel-package.index', ['items' => $items]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.travel-package.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TravelPackageRequest $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->title);

        TravelPackage::create($data);
        return redirect()->route('travel-package.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TravelPackage  $travelPackage
     * @return \Illuminate\Http\Response
     */
    public function show(TravelPackage $travelPackage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TravelPackage  $travelPackage
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = TravelPackage::FindOrFail($id);
        return view('pages.admin.travel-package.edit', ['item' => $item]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TravelPackage  $travelPackage
     * @return \Illuminate\Http\Response
     */
    public function update(TravelPackageRequest $request, $id)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->title);

        $item = TravelPackage::FindOrFail($id);
        $item->update($data);

        return redirect()->route('travel-package.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TravelPackage  $travelPackage
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = TravelPackage::FindOrFail($id);
        $item->delete();
        return redirect()->route('travel-package.index');
    }
}
