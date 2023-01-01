<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Mail\MessageMail;
use App\Models\Message;
use App\Models\Setting;
use App\Repositories\{ContentRepository, OfferRepository, TermRepository , ShippingRepository , RefundRepository , PrivacyRepository , SchoolRepository, WorkRepository};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class PageController extends Controller
{
    public $termRepository , $privacyRepository , $refundRepository , $shippingRepository ,$schoolRepository , $offerRepository , $workRepository , $contentRepository;

    public function __construct(
        TermRepository $termRepository,
        PrivacyRepository $privacyRepository,
        RefundRepository $refundRepository,
        ShippingRepository $shippingRepository,
        SchoolRepository $schoolRepository,
        OfferRepository $offerRepository ,
        WorkRepository $workRepository,
        ContentRepository $contentRepository
    ){
        $this->termRepository = $termRepository;
        $this->privacyRepository = $privacyRepository;
        $this->refundRepository = $refundRepository;
        $this->shippingRepository = $shippingRepository;
        $this->schoolRepository = $schoolRepository;
        $this->offerRepository = $offerRepository;
        $this->workRepository = $workRepository;
        $this->contentRepository = $contentRepository;
    }

    public function privacy()
    {
        $privacy = $this->privacyRepository->show();

        return view('site.pages.static.privacy' , compact('privacy'));
    }

    public function terms()
    {
        $term = $this->termRepository->show();

        return view('site.pages.static.term' , compact('term'));
    }

    public function refund()
    {
        $refund = $this->refundRepository->show();

        return view('site.pages.static.refund' , compact('refund'));
    }

    public function shipping()
    {
        $shipping = $this->shippingRepository->show();

        return view('site.pages.static.shipping' , compact('shipping'));
    }

    public function contact()
    {
        return view('site.pages.static.contact');
    }

    public function parent()
    {
        $schools = $this->schoolRepository->list();
        $offers = $this->offerRepository->list('parents');
        $works = $this->workRepository->list();
        $content = $this->contentRepository->show();

        return view('site.pages.static.parent' , compact('schools' , 'offers' , 'works' , 'content'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all() , [
            'name' => ['required' , 'string' , 'max:255'],
            'email' => ['required' , 'email' , 'string' , 'max:225'],
            'phone' => ['required'],
            'subject' => ['required' , 'string' , 'max:255'],
            'message' => ['required']
        ] , [] ,[
            'email' => locale() == 'en' ? 'Email address' : 'البريد الإلكتروني',
            'name' => locale() == 'en' ? 'Full name' : 'الإسم بالكامل',
            'phone' => locale() == 'en' ? 'Phone number' : 'رقم الهاتف',
            'subject' => locale() == 'en' ? 'Subject' : 'عنوان الرسالة',
            'message' => locale() == 'en' ? 'Message' : ' الرسالة',
        ]);

        if ($validator->fails()) {
            return response()->json( $validator->errors()->first(), 400);
        }

        try {
            $message = Message::create($request->all());

            $email = Setting::firstOrFail()->email; 
            Mail::to($email)->send(new MessageMail($message));

            return response()->json(
                locale() == 'en' ? 'Your message has been sent , we will contact you later' : 'تم إرسال رسالتك وسيتم التواصل معك لاحقا'
                , 200);
        } catch (\Throwable $th) {
            return error_response();
        }

    }
}
