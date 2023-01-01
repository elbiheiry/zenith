<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ContentRequest;
use App\Repositories\ContentRepository;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    public $contentRepository;

    public function __construct(ContentRepository $contentRepository)
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

        return view('admin.pages.content.index' , compact('content'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  ContentRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ContentRequest $request)
    {
        try {
            $this->contentRepository->edit($request);

            return update_response();
        } catch (\Throwable $th) {
            return error_response();
        }
    }
}
