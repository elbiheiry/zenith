<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Mail\RegisteraionRequestMail;
use App\Models\RegisterationRequest;
use App\Models\Setting;
use App\Repositories\{ProgramRespository , ParentRepository ,BenefitRepository , OfferRepository, SchoolRepository};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ParentalController extends Controller
{
    public $parentalRepository , $benefitRepository , $schoolRepository , $programRepo , $offerRepository ;
    
    public function __construct(
        ParentRepository $parentalRepository , 
        SchoolRepository $schoolRepository ,
        BenefitRepository $benefitRepository , 
        ProgramRespository $programRepo ,
        OfferRepository $offerRepository)
    {
        $this->parentalRepository = $parentalRepository;
        $this->benefitRepository = $benefitRepository;
        $this->programRepo = $programRepo;
        $this->schoolRepository = $schoolRepository;
        $this->offerRepository = $offerRepository;
    }

    public function index()
    {
        $parent = $this->parentalRepository->show();
        $offers = $this->offerRepository->list('parental');
        $schools = $this->schoolRepository->list();

        return view('site.pages.parent.index' ,compact('parent' , 'offers' , 'schools'));
    }

    public function program()
    {
        $program = $this->programRepo->show();
        // $benefits = $this->benefitRepository->list();
        $schools = $this->schoolRepository->list();
        $offers = $this->offerRepository->list('parental');

        return view('site.pages.program.index' ,compact('program' , 'schools' , 'offers'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $validator = validator($request->all() , [
            'name' => ['required' , 'string' , 'max:255'],
            'role' => ['required' , 'string' , 'max:255'],
            'phone' => ['required'],
            'email' => ['required' , 'string' , 'email' , 'max:255'],
            'school' => ['required' , 'string' , 'max:255'],
            'region' => ['required' , 'string' , 'max:255']
        ] , [] , [
            'name' => locale() == 'en' ? 'Name' : 'الإسم بالكامل',
            'role' => locale() == 'en' ? 'Role' : 'الدور',
            'phone' => locale() == 'en' ? 'Phone nubmer' : 'رقم الهاتف',
            'email' => locale() == 'en' ? 'Email Address' : 'البريد الإلكتروني',
            'school' => locale() == 'en' ? 'School Name' : 'إسم المدرسة',
            'region' => locale() == 'en' ? 'Region' : 'المنطقة'
        ]);

        if ($validator->fails()) {
            return failed_validation($validator->errors()->first());
        }

        try {
            $data = RegisterationRequest::create($request->all());

            $email = Setting::firstOrFail()->email; 

            Mail::to($email)->send(new RegisteraionRequestMail($data));

            return response()->json(
                locale() == 'en' ? 'Your request has been sent successfully , we will call you ASAP' : 'تم إرسال طلبك بنجاح وسيتم التواصل معك في أقرب وقت ممكن' 
                , 200);
        } catch (\Throwable $th) {
            // dd($th->getMessage());
            return error_response();
        }
    }
}
