<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ParentRequest;
use App\Repositories\ParentRepository;

class ParentController extends Controller
{
    public $parentRepository;

    public function __construct(ParentRepository $parentRepository)
    {
        $this->parentRepository = $parentRepository;
    }

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $parent = $this->parentRepository->show();

        return view('admin.pages.parent.index' , compact('parent'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  ParentRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ParentRequest $request)
    {
        try {
            $this->parentRepository->edit($request);

            return update_response();
        } catch (\Throwable $th) {
            return error_response();
        }
    }
}
