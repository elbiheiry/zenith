<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\BundleRequest;
use App\Models\Bundle;
use App\Repositories\BundleRepository;
use App\Repositories\ProductRepository;
use App\Repositories\ProductSpecificationRepository;
use App\Repositories\SchoolRepository;
use Illuminate\Http\Request;

class BundleController extends Controller
{
    public $productRespository , $schoolRepository , $bundleRepository , $productSpecificationRepository;

    public function __construct(
        ProductRepository $productRespository,
        SchoolRepository $schoolRepository,
        BundleRepository $bundleRepository,
        ProductSpecificationRepository $productSpecificationRepository
    ){
        $this->productRespository = $productRespository;
        $this->schoolRepository = $schoolRepository;
        $this->bundleRepository = $bundleRepository;
        $this->productSpecificationRepository = $productSpecificationRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @param Product $id
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bundles = $this->bundleRepository->list();

        return view('admin.pages.bundles.index' ,compact('bundles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $schools = $this->schoolRepository->list();
        $products = $this->productRespository->list();

        return view('admin.pages.bundles.create' , compact('schools' , 'products'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  BundleRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BundleRequest $request)
    {
        try {
            $this->bundleRepository->create($request);

            return add_response();
        } catch (\Throwable $th) {
            return error_response();
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Bundle $bundle
     * @return \Illuminate\Http\Response
     */
    public function edit(Bundle $bundle)
    {
        
        $schools = $this->schoolRepository->list();
        $products = $this->productRespository->list();
        $bundle = $this->bundleRepository->showById($bundle);
        $specifications = $this->productSpecificationRepository->list($bundle['product_id']);
        
        return view('admin.pages.bundles.edit' ,compact('schools' , 'products' , 'bundle' , 'specifications'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  BundleRequest  $request
     * @param  Bundle $bundle
     * @return \Illuminate\Http\Response
     */
    public function update(BundleRequest $request, Bundle $bundle)
    {
        try {
            $this->bundleRepository->edit($request , $bundle);

            return update_response();
        } catch (\Throwable $th) {
            return error_response();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Bundle $bundle
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bundle $bundle)
    {
        $bundle->delete();

        return redirect()->back();
    }

    public function specifications(Request $request)
    {
        $specifications = $this->productSpecificationRepository->list($request['id']);

        return response()->json(view('admin.pages.bundles.templates.products' ,compact('specifications'))->render() , 200);
    }
}
