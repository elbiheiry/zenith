<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CapacityRequest;
use App\Models\Capacity;
use App\Repositories\CapacityRepository;

class CapacityController extends Controller
{
    public $capacityRepository;

    public function __construct(CapacityRepository $capacityRepository)
    {
        $this->capacityRepository = $capacityRepository;
    }

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $capacities = $this->capacityRepository->list();

        return view('admin.pages.capacities.index' , compact('capacities'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CapacityRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CapacityRequest $request)
    {
        try {
            $this->capacityRepository->create($request);

            return add_response();
        } catch (\Throwable $th) {
            return error_response();
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Capacity $capacity
     * @return \Illuminate\Http\Response
     */
    public function edit(Capacity $capacity)
    {
        $capacity = $this->capacityRepository->showById($capacity);

        return view('admin.pages.capacities.edit' ,compact('capacity'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  CapacityRequest  $request
     * @param  Capacity $capacity
     * @return \Illuminate\Http\Response
     */
    public function update(CapacityRequest $request, Capacity $capacity)
    {
        try {
            $this->capacityRepository->edit($request , $capacity);

            return update_response();
        } catch (\Throwable $th) {
            return error_response();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Capacity $capacity
     * @return \Illuminate\Http\Response
     */
    public function destroy(Capacity $capacity)
    {
        $capacity->delete();

        return redirect()->back();
    }
}
