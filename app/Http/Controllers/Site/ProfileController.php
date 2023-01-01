<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\UserChildren;
use App\Repositories\SchoolRepository;
use App\Rules\{IsValidPassword , MatchOldPassword};
use App\Traits\ImageTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ProfileController extends Controller
{
    use ImageTrait;

    public $schoolRepository;

    public function __construct(SchoolRepository $schoolRepository)
    {
        $this->schoolRepository = $schoolRepository;
    }
    
    public function index()
    {
        $user = auth()->guard('site')->user();
        

        return view('site.pages.profile.index' ,compact('user'));
    }

    public function settings()
    {
        $user = auth()->guard('site')->user();
        

        return view('site.pages.profile.settings' ,compact('user'));
    }

    public function children()
    {
        $user = auth()->guard('site')->user();
        $schools = $this->schoolRepository->list();

        return view('site.pages.profile.children' ,compact('user' , 'schools'));
    }

    public function orders()
    {
        $user = auth()->guard('site')->user();
        
        $orders = $user->orders()->orderBy('id' , 'desc')->get();
        
        foreach ($orders as $order) {
            $order['items_data'] = array_values(json_decode($order->items , true));
        }
        // dd($orders);

        return view('site.pages.profile.orders' ,compact('user' , 'orders'));
    }

    public function show_order($id)
    {
        $user = auth()->guard('site')->user();
        
        $order = Order::where('order_no' , $id)->firstOrFail();
        $order['items_data'] = array_values(json_decode($order->items , true));

        return view('site.pages.profile.order' , compact('user' , 'order'));
    }

    public function edit_profile()
    {
        $user = auth()->guard('site')->user();
        
        $schools = $this->schoolRepository->list();

        return view('site.pages.profile.edit' ,compact('user' , 'schools'));
    }

    /**
     * update profile data
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function update_profile(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'parent' => ['required' , 'string' , 'max:255'],
            'phone' => ['required'],
        ] ,[] ,[
            'name' => locale() == 'en' ? 'Student name' : 'إسم الطالب',
            'phone' => locale() == 'en' ? 'Phone number' : 'رقم الهاتف',
            'code' => locale() == 'en' ? 'School code' : 'الكود المدرسي',
            'school_id' => locale() == 'en' ? 'School' : 'المدرسة',
            'parent' => locale() == 'en' ? 'Parent name' : 'إسم ولي الأمر',
            'grade' => locale() == 'en' ? 'Year grade' : 'السنة الدراسية'
        ]);

        if ($validator->fails()) {
            return failed_validation($validator->errors()->first());
        }

        $user = auth()->guard('site')->user();

        try {
            $user->update($request->all());

            return response()->json(
                locale() == 'en' ? 'Profile has been updated successfully' : 'تم تحديث بيانات الملف الشخصي بنجاح'
            , 200);
        } catch (\Throwable $th) {
            return error_response();
        }
    }

    /**
     * update current logged in user password.
     *
     * @return \Illuminate\Http\Response
     */
    public function update_password(Request $request)
    {
        $validator = validator($request->all() , [
            'old_password' => ['required' , new MatchOldPassword],
            'password' => ['required' , new IsValidPassword , 'confirmed' ]
        ] ,[] ,[
            'old_password' => locale() == 'en' ? 'Old password' : 'كلمة المرور القديمة',
            'password' => locale() == 'en' ? 'New password' : 'كلمة المرور الجديدة'
        ]);

        if ($validator->fails()) {
            return failed_validation($validator->errors()->first());
        }

        $user = auth()->guard('site')->user();

        try {
            $user->update([
                'password' => Hash::make($request->password)
            ]);

            return response()->json(locale() == 'en' ? 'Password has been updated successfully' :'تم تحديث كلمة المرور بنجاح' , 200);
        } catch (\Throwable $th) {
            return error_response();
        }
    }

    /**
     * update current logged in user email.
     *
     * @return \Illuminate\Http\Response
     */
    public function update_email(Request $request)
    {
        $validator = validator($request->all() , [
            'email' => ['required' , 'string' , 'email' , 'max:255' , 'unique:users,email,'.auth()->guard('site')->id()],
            'password' => ['required' , new MatchOldPassword]
        ] ,[] ,[
            'email' => locale() == 'en' ? 'Email address' : 'البريد الإلكتروني',
            'password' => locale() == 'en' ? 'password' : 'كلمة المرور'
        ]);

        if ($validator->fails()) {
            return failed_validation($validator->errors()->first());
        }

        $user = auth()->guard('site')->user();

        try {
            $user->update([
                'email' => $request->email
            ]);

            return response()->json(locale() == 'en' ? 'Email has been updated successfully' :'تم تحديث البريد الإلكتروني بنجاح' , 200);
        } catch (\Throwable $th) {
            return error_response();
        }
    }

    public function addChild(Request $request)
    {
        $validation = Validator::make($request->all() , [
            'code' => ['required'],
            'school_id' => ['required' , 'not_in:0'],
            'name' => ['required' , 'string' , 'max:225'],
            'grade' => ['required' , 'numeric']
        ] ,[] ,[
            'code' => locale() == 'en' ? 'School code' : 'الكود المدرسي',
            'school_id' => locale() == 'en' ? 'School' : 'المدرسة',
            'name' => locale() == 'en' ? 'Name' : 'الإسم',
            'grade' => locale() == 'en' ? 'Year' : 'السنة الدراسية'
        ]);

        if ($validation->fails()) {
            return failed_validation($validation->errors()->first());
        }

        $user = auth()->guard('site')->user();

        try {
            $user->childrens()->create($request->all());

            return response()->json(
                locale() == 'en' ? 'Child has been added successfully' : 'تم إضافة الابن بنجاح'
                ,200);
        } catch (\Throwable $th) {
            return error_response();
        }
    }

    public function showChild($id)
    {
        $child = UserChildren::findOrFail($id);
        $schools = $this->schoolRepository->list();

        return view('site.pages.profile.templates.children' ,compact('child' , 'schools'));
    }

    public function editChild(Request $request , $id)
    {
        $validation = Validator::make($request->all() , [
            'code' => ['required'],
            'school_id' => ['required' , 'not_in:0'],
            'name' => ['required' , 'string' , 'max:225'],
            'grade' => ['required' , 'numeric']
        ] ,[] ,[
            'code' => locale() == 'en' ? 'School code' : 'الكود المدرسي',
            'school_id' => locale() == 'en' ? 'School' : 'المدرسة',
            'name' => locale() == 'en' ? 'Name' : 'الإسم',
            'grade' => locale() == 'en' ? 'Year' : 'السنة الدراسية'
        ]);

        if ($validation->fails()) {
            return failed_validation($validation->errors()->first());
        }

        try {
            UserChildren::findOrFail($id)->update($request->all());

            return response()->json(
                locale() == 'en' ? 'Child data has been update successfully' : 'تم تعديل بيانات الابن بنجاح'
                ,200);
        } catch (\Throwable $th) {
            return error_response();
        }
    }

    public function removeChild($id)
    {
        UserChildren::findOrFail($id)->delete();

        return redirect()->back();
    }
}
