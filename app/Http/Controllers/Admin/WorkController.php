<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\WorkRequest;
use App\Models\Work;
use App\Repositories\WorkRepository;
use Illuminate\Http\Request;

class WorkController extends Controller
{
    public $workRepository;

    public function __construct(
        WorkRepository $workRepository
    ){
        $this->workRepository = $workRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $works = $this->workRepository->list();

        return view('admin.pages.works.index' ,compact('works'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  WorkRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(WorkRequest $request)
    {
        try {
            $this->workRepository->create($request);

            return add_response();
        } catch (\Throwable $th) {
            return error_response();
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $work = $this->workRepository->showById($id);

        return view('admin.pages.works.edit' ,compact('work'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  WorkRequest  $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(WorkRequest $request, $id)
    {
        try {
            $this->workRepository->edit($request , $id);

            return update_response();
        } catch (\Throwable $th) {
            return error_response();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Work::findOrFail($id)->delete();

        return redirect()->back();
    }
}
