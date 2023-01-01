<?php

namespace App\Repositories;

use App\Http\Resources\RegisterationRequestResource;
use App\Models\RegisterationRequest;

class RegisterationRepository 
{
    public $model;

    public function __construct(RegisterationRequest $model)
    {
        $this->model = $model;
    }

    public function list(): array
    {
        $objects = $this->model->orderBy('id' , 'desc')->paginate(6);

        return RegisterationRequestResource::collection($objects)->response()->getData(true);
    }

    public function listAjax($data): array
    {
        $objects = $this->model->orderBy( 'id', 'DESC' )->paginate( 6, [ '*' ], 'page', $data->page );
     
        return RegisterationRequestResource::collection($objects)->response()->getData(true);
    }

    public function showById(RegisterationRequest $registerationRequest)
    {
        return new RegisterationRequestResource($registerationRequest);
    }
}