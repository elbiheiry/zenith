<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SettingRequest;
use App\Repositories\SettingRepository;

class SettingController extends Controller
{
    public $settingRepository;

    public function __construct(SettingRepository $settingRepository)
    {
        $this->settingRepository = $settingRepository;
    }

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.pages.settings.index');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  SettingRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SettingRequest $request)
    {
        try {
            $this->settingRepository->edit($request);

            return update_response();
        } catch (\Throwable $th) {
            return error_response();
        }
    }
}
