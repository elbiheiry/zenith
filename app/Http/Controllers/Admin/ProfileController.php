<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = auth()->user();

        return view('admin.pages.profile.index' ,compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $v = validator($request->all() , [
            'name' => ['required' ,'max:225' ,'string'],
            'email' => ['required' ,'max:225' ,'string' ,'email' , 'unique:admins,email,'.auth()->id()]
        ]);

        if ($v->fails()) {
            return response()->json($v->errors()->first() , 400);
        }

        $data = [
            'name' => $request->name,
            'email'=> $request->email
        ];

        if ($request->password) {
            $data['password'] = Hash::make($request->password);
        }

        $user = auth()->user();

        try {
            $user->update($data);

            return update_response();
        } catch (\Throwable $th) {
            return error_response();
        }
    }
}
