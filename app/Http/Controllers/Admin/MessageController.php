<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Message;
use App\Repositories\MessageRepository;

class MessageController extends Controller
{

    public $messageRepository;

    public function __construct(MessageRepository $messageRepository)
    {
        $this->messageRepository =$messageRepository;
    }

    public function index(Request $request)
    {
        $messages = $this->messageRepository->list();

        if ($request->ajax()) {
            $messages = $this->messageRepository->listAjax($request);

            return view( 'admin.pages.messages.templates.messages', compact( 'messages' ) );
        }

        return view('admin.pages.messages.index' ,compact('messages'));
    }

    public function show(Message $message)
    {
        $data = $this->messageRepository->showById($message);

        return view('admin.pages.messages.show' ,compact('data'));
    }

    public function destroy(Message $message)
    {
        $message->delete();

        return redirect()->route('admin.messages.index');
    }
}
