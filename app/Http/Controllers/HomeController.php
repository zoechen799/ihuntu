<?php namespace App\Http\Controllers;

use App\JobCategory;
use App\JdGroup;
use App\Configure;
use App\JobDescription;

class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
            
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
                $carouselSize = Configure::where('key', 'carouselsize')->first()->intvalue;
                
		return view('home')->with('jobcategories', JobCategory::all())
                ->with('jdgroups', JdGroup::where('active', true)->orderBy('updated_at', 'desc')->take($carouselSize)->get())
                ->with('jds', JobDescription::all());
	}

}
