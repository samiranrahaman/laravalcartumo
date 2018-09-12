<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Profile;
use App\Order;
use App\Funnel;
use App\AffiliateProfile;

use Auth;

class AffiliateProgramController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */


	public function __construct() {
		$this->middleware( 'auth' );
	}

	public function index() {

		$affiliateProfile = AffiliateProfile::where( 'user_id', Auth::user()->id )->first();
		if ( ! empty( $affiliateProfile ) ) {
			$affiliateProfile->settings = json_decode( $affiliateProfile->settings );
			$affiliateProfile->address  = json_decode( $affiliateProfile->address );
			$affiliateProfile->payments = json_decode( $affiliateProfile->payments );
		}

		return view( 'affiliate.dashboard', compact( 'profile', 'data', 'affiliateProfile' ) );
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request $request
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function store( Request $request ) {

		$affiliateProfileSearch = AffiliateProfile::where( 'user_id', Auth::user()->id )->first();
		if ( $affiliateProfileSearch->count() == 0 ) {
			$affiliateProfile = new AffiliateProfile();
		} else {
			$affiliateProfile = AffiliateProfile::find( $affiliateProfileSearch->id );
		}

		$affiliateProfile->user_id  = Auth::user()->id;
		$affiliateProfile->settings = json_encode( $request->input( 'settings' ) );
		$affiliateProfile->address  = json_encode( $request->input( 'address' ) );
		$affiliateProfile->payments = json_encode( $request->input( 'payments' ) );
		//$affiliateProfile->user_settings = $request->input( 'payment_gateway' );
		$affiliateProfile->created_at = date( 'Y-m-d h:i:s' );
		$affiliateProfile->updated_at = date( 'Y-m-d h:i:s' );

		if ( $affiliateProfile->save() ) {
			die( json_encode(
				array(
					'status' => "success",
					'url'    => route( 'affiliate.index' )
				)
			) );
		} else {
			die( json_encode(
				array(
					'status'  => 500,
					'message' => 'Something wrong! please try again later'
				)
			) );
		}
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int $id
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function show( $id ) {
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int $id
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function edit( $id ) {
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request $request
	 * @param  int $id
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function update( Request $request, $id ) {
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int $id
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function destroy( $id ) {
		//
	}
}
