<?php

namespace App\Http\Controllers\admin;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\CMSPage;

class CmsController extends Controller
{
	public function edit()
	{
		$aboutUs     		  = CMSPage::where('slug', 'about_us')->first();
		$howItWorks  		  = CMSPage::where('slug', 'how_it_works')->first();
		$testimonial 		  = CMSPage::where('slug', 'testimonial')->first();
		$contactUs   		  = CMSPage::where('slug', 'contact_us')->first();
		$termsAndConditions   = CMSPage::where('slug', 'terms_and_conditions')->first();
		/*echo "<pre>";
		print_r($aboutUs->description);
		die;*/

		return view('admin.cms_pages.edit', ['aboutUs' => $aboutUs, 'howItWorks' => $howItWorks, 'testimonial' => $testimonial, 'contactUs' => $contactUs, 'termsAndConditions' => $termsAndConditions]);
	}

	public function update(Request $request)
	{
		if( isset($request->aboutUs) )
		{
			CMSPage::where('slug', 'about_us')->update(['description' => $request->aboutUs]);	
		}
		elseif( isset($request->howItWorks) )
		{
			CMSPage::where('slug', 'how_it_works')->update(['description' => $request->howItWorks]);
		}
		elseif( isset($request->testimonial) )
		{
			CMSPage::where('slug', 'testimonial')->update(['description' => $request->testimonial]);
		}
		elseif( isset($request->contactUs) )
		{
			CMSPage::where('slug', 'contact_us')->update(['description' => $request->contactUs]);
		}
		elseif( isset($request->termsAndConditions) )
		{
			CMSPage::where('slug', 'terms_and_conditions')->update(['description' => $request->termsAndConditions]);
		}

		return redirect()->route('admin.cms-pages')->with('success', 'Content Edited successfully .');
	}

}