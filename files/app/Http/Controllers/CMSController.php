<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\CMSPage;

class CMSController extends Controller
{
	public function aboutUs()
	{
        $cmsPage = CMSPage::where('slug', 'about_us')->first();
        
		return view('about-us', ['content' => $cmsPage->description]);
	}

	public function contactUs()
	{
		$cmsPage = CMSPage::where('slug', 'contact_us')->first();

		return view('contact-us', ['content' => $cmsPage->description]);
	}

	public function howItWorks()
	{
		$cmsPage = CMSPage::where('slug', 'how_it_works')->first();

		return view('how-it-works', ['content' => $cmsPage->description]);
	}

	public function testimonial()
	{
		$cmsPage = CMSPage::where('slug', 'testimonial')->first();

		return view('testimonial', ['content' => $cmsPage->description]);
	}

	public function termsAndConditions()
	{
		$cmsPage = CMSPage::where('slug', 'terms_and_conditions')->first();

		return view('terms-and-conditions', ['content' => $cmsPage->description]);
	}
}