<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProductSpecificationRequest;
use App\Models\ProductSpecification;
use App\Repositories\{ProductSpecificationRepository,CapacityRepository , ColorRepository};

class ProductSpecificationController extends Controller
{
    public $specificationRepository , $capacityRepository , $colorRepository;

    public function __construct(
        ProductSpecificationRepository $specificationRepository,
        CapacityRepository $capacityRepository,
        ColorRepository $colorRepository
    )
    {
        $this->specificationRepository = $specificationRepository;
        $this->capacityRepository = $capacityRepository;
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
        $capacities = $this->capacityRepository->list();
        $colors = $this->colorRepository->listExcept();

        return view('admin.pages.products.specifications.index' , compact('specifications' , 'id' , 'capacities' , 'colors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  ProductSpecificationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductSpecificationRequest $request , $id)
    {
        $specification = ProductSpecification::where([
            ['product_id' ,'=' , $id] ,
            ['capacity_id' , '=' , $request->capacity_id],
            ['connectivity' , '=' , $request->connectivity],
            ['color_id' , '=' , $request->color_id]
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
        $capacities = $this->capacityRepository->list();
        $colors = $this->colorRepository->listExcept();

        return view('admin.pages.products.specifications.edit' ,compact('specification' , 'capacities' , 'colors'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  ProductSpecificationRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductSpecificationRequest $request, $id)
    {
        $product_id = ProductSpecification::findOrFail($id)->product_id;

        $specification = ProductSpecification::where([
            ['product_id' ,'=' , $product_id] ,
            ['capacity_id' , '=' , $request->capacity_id],
            ['connectivity' , '=' , $request->connectivity],
            ['color_id' , '=' , $request->color_id]
        ])->first();
        try {
            if ($specification) {
                return response()->json('You have added this option already', 400);
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
        ProductSpecification::findOrFail($id)->delete();

        return redirect()->back();
    }
}
