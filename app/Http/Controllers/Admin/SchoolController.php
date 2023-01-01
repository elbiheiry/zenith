<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SchoolRequest;
use App\Models\School;
use App\Repositories\SchoolRepository;

class SchoolController extends Controller
{
    public $schoolRepository;

    public function __construct(SchoolRepository $schoolRepository)
    {
        $this->schoolRepository = $schoolRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $schools = $this->schoolRepository->list();

        return view('admin.pages.schools.index' , compact('schools'));
    }

    /**
     * display create page
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.schools.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  SchoolRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SchoolRequest $request)
    {
        try {
            $this->schoolRepository->create($request);

            return add_response();
        } catch (\Throwable $th) {
            return error_response();
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  School $school
     * @return \Illuminate\Http\Response
     */
    public function edit(School $school)
    {
        $school = $this->schoolRepository->showById($school);

        return view('admin.pages.schools.edit' ,compact('school'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  SchoolRequest  $request
     * @param  school $school
     * @return \Illuminate\Http\Response
     */
    public function update(SchoolRequest $request, School $school)
    {
        try {
            $this->schoolRepository->edit($request , $school);

            return update_response();
        } catch (\Throwable $th) {
            return error_response();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  school $school
     * @return \Illuminate\Http\Response
     */
    public function destroy(School $school)
    {
        $school->delete();

        return redirect()->back();
    }
}
