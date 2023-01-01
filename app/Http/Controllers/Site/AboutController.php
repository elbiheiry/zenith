<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Repositories\{BenefitRepository , AboutRepository , HomeRepository};
use Illuminate\Http\Request;

class AboutController extends Controller
{
    //
    public $benefitRepository , $aboutRepository , $homeRepository;

    public function __construct(
        BenefitRepository $benefitRepository ,
        AboutRepository $aboutRepository ,
        HomeRepository $homeRepository
    )
    {
        $this->benefitRepository = $benefitRepository;
        $this->aboutRepository = $aboutRepository;
        $this->homeRepository = $homeRepository;
    }
    public function index()
    {
        $benefits = $this->benefitRepository->list();
        $about = $this->aboutRepository->show();
        $home = $this->homeRepository->show();
    
        return view('site.pages.about.index' , compact('benefits' , 'about' , 'home'));
    }
}
