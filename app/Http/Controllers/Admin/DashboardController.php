<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Message;
use App\Models\RegisterationRequest;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index()
    {
        $messages = Message::all()->sortByDesc('id')->take(5);
        $requests = RegisterationRequest::all()->sortByDesc('id')->take(5);
        
        return view('admin.pages.index' ,compact('messages' , 'requests'));
    }
}
