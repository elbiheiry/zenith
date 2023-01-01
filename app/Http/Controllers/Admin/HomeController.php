<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\HomeRequest;
use App\Repositories\HomeRepository;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public $contentRepository;

    public function __construct(HomeRepository $contentRepository)
    {
        $this->contentRepository = $contentRepository;
    }

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $content = $this->contentRepository->show();

        return view('admin.pages.home.index' , compact('content'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  HomeRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(HomeRequest $request)
    {
        try {
            $this->contentRepository->edit($request);

            return update_response();
        } catch (\Throwable $th) {
            return error_response();
        }
    }
}
