<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AccessorySpecificationRequest;
use App\Models\AccessorySpecification;
use App\Repositories\{ColorRepository,AccessorySpecificationRepository};
use Illuminate\Http\Request;

class AccessorySpecificationController extends Controller
{
    public $specificationRepository , $colorRepository;

    public function __construct(
        AccessorySpecificationRepository $specificationRepository,
        ColorRepository $colorRepository
    )
    {
        $this->specificationRepository = $specificationRepository;
        $this->colorRepository = $colorRepository;
    }

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $specifications = $this->specificationRepository->list($id);
        $colors = $this->colorRepository->listExcept();

        return view('admin.pages.accessories.specifications.index' , compact('specifications' , 'id' , 'colors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  AccessorySpecificationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AccessorySpecificationRequest $request , $id)
    {
        $specification = AccessorySpecification::where([
            ['accessory_id' ,'=' , $id] ,
            ['color_id' , '=' , $request->color_id],
            ['locale' , '=' , $request->locale]
        ])->first();

        try {
            if ($specification) {
                return response()->json('You have added this option already', 400);
            }
            $this->specificationRepository->create($request , $id);

            return add_response();
        } catch (\Throwable $th) {
            return error_response();
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $specification = $this->specificationRepository->showById($id);
        $colors = $this->colorRepository->listExcept();

        return view('admin.pages.accessories.specifications.edit' ,compact('specification' , 'colors'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  AccessorySpecificationRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AccessorySpecificationRequest $request, $id)
    {
        $accessory_id = AccessorySpecification::findOrFail($id)->accessory_id;
        $specification = AccessorySpecification::where([
            ['accessory_id' ,'=' , $accessory_id] ,
            ['color_id' , '=' , $request->color_id],
            ['locale' , '=' , $request->locale]
        ])->first();

        try {
            if ($specification) {
                return response()->json('You have add this option already', 400);
            }
            $this->specificationRepository->edit($request , $id);

            return update_response();
        } catch (\Throwable $th) {
            // dd($th->getMessage());
            return error_response();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        AccessorySpecification::findOrFail($id)->delete();

        return redirect()->back();
    }
}
