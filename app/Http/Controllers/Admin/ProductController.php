<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProductRequest;
use App\Models\Product;
use App\Repositories\{CapacityRepository , ColorRepository , ProductRepository , SchoolRepository};

class ProductController extends Controller
{
    public $schoolRepository , $productRepository , $colorRepository , $capacityRepository;

    public function __construct(
        SchoolRepository $schoolRepository,
        ProductRepository $productRepository,
        ColorRepository $colorRepository,
        CapacityRepository $capacityRepository
    ){
        $this->schoolRepository = $schoolRepository;
        $this->productRepository = $productRepository;
        $this->colorRepository = $colorRepository;
        $this->capacityRepository = $capacityRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = $this->productRepository->list();

        return view('admin.pages.products.index' , compact('products'));
    }

    /**
     * display create page
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $schools = $this->schoolRepository->list();
        $colors = $this->colorRepository->listExcept();
        $capacities = $this->capacityRepository->list();

        return view('admin.pages.products.create' , compact('schools' , 'colors' , 'capacities'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  ProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        try {
            $this->productRepository->create($request);

            return add_response();
        } catch (\Throwable $th) {
            // dd($th->getMessage());
            return error_response();
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Product $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $product = $this->productRepository->showById($product);
        // $product_schools = $product['schools']['data'];
        // $school_ids = [];
        // foreach ($product_schools as $item) {
        //     array_push($school_ids , $item['id']);
        // }
        // $schools = $this->schoolRepository->list();
        $capacities = $this->capacityRepository->list();

        return view('admin.pages.products.edit' ,compact('product' , 'capacities'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  ProductRequest  $request
     * @param  Product $product
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, Product $product)
    {
        try {
            $this->productRepository->edit($request , $product);

            return update_response();
        } catch (\Throwable $th) {
            // dd($th->getMessage());
            return error_response();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Product $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->back();
    }
}
