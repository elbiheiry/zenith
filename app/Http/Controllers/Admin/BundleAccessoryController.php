<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\BundleAccessoryRequest;
use App\Models\Bundle;
use App\Models\BundleAccessory;
use App\Repositories\AccessorySpecificationRepository;
use App\Repositories\BundleAccessoryRepository;
use App\Repositories\ProductRepository;
use Illuminate\Http\Request;

class BundleAccessoryController extends Controller
{
    public $specificationRepository , $productRepository , $bundleAccessoryRepository;

    public function __construct(
        AccessorySpecificationRepository $specificationRepository,
        BundleAccessoryRepository $bundleAccessoryRepository,
        ProductRepository $productRepository
    )
    {
        $this->specificationRepository = $specificationRepository;
        $this->productRepository = $productRepository;
        $this->bundleAccessoryRepository = $bundleAccessoryRepository;
    }

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $bundle = Bundle::findOrFail($id);
        $specifications = $this->bundleAccessoryRepository->list($id);
        $product = $this->productRepository->showById($bundle->product()->first());
        $accessories = $product['accessories'];

        return view('admin.pages.bundles.specifications.index' , compact('specifications' , 'id' , 'accessories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  BundleAccessoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BundleAccessoryRequest $request , $id)
    {
        $specification = BundleAccessory::where([
            ['bundle_id' ,'=' , $id] ,
            ['accessory_id' , '=' , $request->accessory_id],
            ['accessory_specification_id' , '=' , $request->accessory_specification_id]
        ])->first();

        try {
            if ($specification) {
                return response()->json('You have added this option already', 400);
            }
            $this->bundleAccessoryRepository->create($request , $id);

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
        $specification = $this->bundleAccessoryRepository->showById($id);
        $bundle = Bundle::findOrFail($specification['bundle_id']);
        $product = $this->productRepository->showById($bundle->product()->first());
        $accessories = $product['accessories'];
        $specifications = $this->specificationRepository->list($specification['accessory_id']);

        return view('admin.pages.bundles.specifications.edit' ,compact('specification' , 'specifications' , 'accessories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  BundleAccessoryRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BundleAccessoryRequest $request, $id)
    {
        $bundle_id = BundleAccessory::findOrFail($id)->bundle_id;
        $specification = BundleAccessory::where([
            ['bundle_id' , '=' , $bundle_id],
            ['accessory_id' ,'=' , $request->accessory_id] ,
            ['accessory_specification_id' , '=' , $request->accessory_specification_id]
        ])->first();

        try {
            if ($specification) {
                return response()->json('You have add this option already', 400);
            }
            $this->bundleAccessoryRepository->edit($request , $id);

            return update_response();
        } catch (\Throwable $th) {
            
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
        BundleAccessory::findOrFail($id)->delete();

        return redirect()->back();
    }

    public function specifications(Request $request)
    {
        $specifications = $this->specificationRepository->list($request->id);

        return response()->json(view('admin.pages.bundles.templates.accessories' ,compact('specifications'))->render() , 200);
    }
}
