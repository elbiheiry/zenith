<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Repositories\{SliderRepository , SchoolRepository , BenefitRepository , AboutRepository, HomeRepository, OfferRepository, WorkRepository};

class HomeController extends Controller
{
    public $sliderRepository , $benefitRepository , $schoolRepository , $aboutRepository , $homeRepository, $offerRepository , $workRepository;

    public function __construct(
        SliderRepository $sliderRepository ,
        BenefitRepository $benefitRepository ,
        SchoolRepository $schoolRepository ,
        AboutRepository $aboutRepository ,
        HomeRepository $homeRepository,
        OfferRepository $offerRepository , 
        WorkRepository $workRepository
    )
    {
        $this->sliderRepository = $sliderRepository;
        $this->benefitRepository = $benefitRepository;
        $this->schoolRepository = $schoolRepository;
        $this->aboutRepository = $aboutRepository;
        $this->homeRepository = $homeRepository;
        $this->offerRepository = $offerRepository;
        $this->workRepository = $workRepository;
    }
    public function index()
    {
        $sliders = $this->sliderRepository->list();
        $benefits = $this->benefitRepository->list();
        $schools = $this->schoolRepository->list();
        $about = $this->aboutRepository->show();
        $home = $this->homeRepository->show();
        $offers = $this->offerRepository->list('parents');
        $works = $this->workRepository->list();

        return view('site.pages.index' , compact('sliders' , 'benefits' , 'schools' , 'about' , 'home' , 'offers' , 'works'));
    }
}
