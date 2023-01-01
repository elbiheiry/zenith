<?php

namespace App\Repositories;

use App\Http\Resources\MessageResource;
use App\Models\Message;

class MessageRepository 
{
    public $model;

    public function __construct(Message $model)
    {
        $this->model = $model;
    }

    public function list(): array
    {
        $objects = $this->model->orderBy('id' , 'desc')->paginate(6);

        return MessageResource::collection($objects)->response()->getData(true);
    }

    public function listAjax($data): array
    {
        $objects = $this->model->orderBy( 'id', 'DESC' )->paginate( 6, [ '*' ], 'page', $data->page );
     
        return MessageResource::collection($objects)->response()->getData(true);
    }

    public function showById(Message $message)
    {
        return new MessageResource($message);
    }
}