<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AccessoryRequest;
use App\Models\Accessory;
use App\Repositories\{AccessoryRepository,ColorRepository, ProductRepository};
use Illuminate\Http\Request;

class AccessoryController extends Controller
{
    public $accessoryRepository , $colorRepository , $productRespository;

    public function __construct(
        AccessoryRepository $accessoryRepository,
        ColorRepository $colorRepository,
        ProductRepository $productRespository
    ){
        $this->accessoryRepository = $accessoryRepository;
        $this->colorRepository = $colorRepository;
        $this->productRespository = $productRespository;
    }
    /**
     * Display a listing of the resource.
     *
     * @param Product $id
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $accessories = $this->accessoryRepository->list();

        return view('admin.pages.accessories.index' ,compact('accessories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $colors = $this->colorRepository->list();
        $products = $this->productRespository->list();

        return view('admin.pages.accessories.create' , compact('colors' , 'products'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  AccessoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AccessoryRequest $request)
    {
        try {
            $this->accessoryRepository->create($request);

            return add_response();
        } catch (\Throwable $th) {
            return error_response();
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Accessory $accessory
     * @return \Illuminate\Http\Response
     */
    public function edit(Accessory $accessory)
    {
        
        $colors = $this->colorRepository->list();
        $products = $this->productRespository->list();
        

        $product_accessories = $accessory->products()->get();
        $product_ids = [];
        foreach ($product_accessories as $item) {
            array_push($product_ids , $item['id']);
        }
        $accessory = $this->accessoryRepository->showById($accessory);
        
        return view('admin.pages.accessories.edit' ,compact('colors' , 'products' , 'accessory' , 'product_ids'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Accessory $accessory
     * @return \Illuminate\Http\Response
     */
    public function update(AccessoryRequest $request, Accessory $accessory)
    {
        try {
            $this->accessoryRepository->edit($request , $accessory);

            return update_response();
        } catch (\Throwable $th) {
            // dd($th->getMessage());
            return error_response();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Accessory $accessory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Accessory $accessory)
    {
        $accessory->delete();

        return redirect()->back();
    }
}
