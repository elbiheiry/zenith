<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProgramRequest;
use App\Repositories\ProgramRespository;

class ProgramController extends Controller
{
    public $programRepository;

    public function __construct(ProgramRespository $programRepository)
    {
        $this->programRepository = $programRepository;
    }

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $program = $this->programRepository->show();

        return view('admin.pages.program.index' , compact('program'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  ProgramRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProgramRequest $request)
    {
        try {
            $this->programRepository->edit($request);

            return update_response();
        } catch (\Throwable $th) {
            // dd($th->getMessage());
            return error_response();
        }
    }
}
