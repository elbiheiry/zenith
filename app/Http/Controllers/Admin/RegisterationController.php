<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\RegisterationRequest;
use App\Repositories\RegisterationRepository;

class RegisterationController extends Controller
{

    public $messageRepository;

    public function __construct(RegisterationRepository $messageRepository)
    {
        $this->messageRepository =$messageRepository;
    }

    public function index(Request $request)
    {
        $messages = $this->messageRepository->list();

        if ($request->ajax()) {
            $messages = $this->messageRepository->listAjax($request);

            return view( 'admin.pages.requests.templates.messages', compact( 'messages' ) );
        }

        return view('admin.pages.requests.index' ,compact('messages'));
    }

    public function show(RegisterationRequest $registerationRequest)
    {
        $data = $this->messageRepository->showById($registerationRequest);

        return view('admin.pages.requests.show' ,compact('data'));
    }

    public function destroy( $id)
    {
        RegisterationRequest::findOrFail($id)->delete();

        return redirect()->route('admin.requests.index');
    }
}
