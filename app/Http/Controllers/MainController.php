<?php

namespace App\Http\Controllers;

use App\Models\AboutCompany;
use App\Models\Articles;
use App\Models\BlockMenu;
use App\Models\DescAboutCompany;
use App\Models\DescApplications;
use App\Models\DescArticles;
use App\Models\DescBanner;
use App\Models\DescInstruments;
use App\Models\DescJobOrder;
use App\Models\DescLetter;
use App\Models\DescServices;
use App\Models\DescWork;
use App\Models\ImagesInstruments;
use App\Models\ImagesLetter;
use App\Models\ImagesWork;
use App\Models\JobOrder;
use App\Models\Services;
use App\Models\VideoBanner;
use App\Models\Music;


class MainController extends Controller
{
    public function index(){
        $video = VideoBanner::find(1);
        $link = substr($video->video, 19, 50);

        $about_company = AboutCompany::all();
        $articles = Articles::all();
        $block_menu = BlockMenu::all();
        $desc_about_company = DescAboutCompany::all();
        $desc_applications = DescApplications::all();
        $desc_articles = DescArticles::all();
        $desc_banner = DescBanner::all();
        $desc_instruments = DescInstruments::all();
        $desc_job_order = DescJobOrder::all();
        $desc_letter = DescLetter::all();
        $desc_services = DescServices::all();
        $desc_work = DescWork::all();
        
        
        $music = Music::find(2);
        $link_music = $music->music_name;
        
        $images_instruments = ImagesInstruments::all();
        $images_letter = ImagesLetter::all();
        $images_work = ImagesWork::all();
        $job_order = JobOrder::all();
        $services = Services::all();
        return view('index', compact('link','about_company', 'articles',
        'block_menu', 'desc_about_company', 'desc_applications', 'desc_articles',
        'desc_banner', 'desc_instruments', 'desc_job_order', 'desc_letter', 'desc_services',
        'desc_work', 'images_instruments', 'images_letter', 'images_work', 'job_order', 'services', 'music', 'link_music' ));
    }
}
