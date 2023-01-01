<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PrivacyRequest;
use App\Repositories\PrivacyRepository;

class PrivacyController extends Controller
{
    public $privacyRepository;

    public function __construct(PrivacyRepository $privacyRepository)
    {
        $this->privacyRepository = $privacyRepository;
    }

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $privacy = $this->privacyRepository->show();

        return view('admin.pages.privacy.index' , compact('privacy'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  PrivacyRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PrivacyRequest $request)
    {
        try {
            $this->privacyRepository->edit($request);

            return update_response();
        } catch (\Throwable $th) {
            return error_response();
        }
    }
}
