<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\TermRequest;
use App\Repositories\TermRepository;

class TermController extends Controller
{
    public $termRepository;

    public function __construct(TermRepository $termRepository)
    {
        $this->termRepository = $termRepository;
    }

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $terms = $this->termRepository->show();

        return view('admin.pages.terms.index' , compact('terms'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  TermRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TermRequest $request)
    {
        try {
            $this->termRepository->edit($request);

            return update_response();
        } catch (\Throwable $th) {
            return error_response();
        }
    }
}
