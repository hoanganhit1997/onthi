<?php namespace App\Http\Controllers;

class WelcomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('homePage');
	}
	
	public function toMeo()
	{
		return view('meo');
	}

	public function toBienBao()
	{
		return view('bienBao');
	}

	public function toCauHoi()
	{
		return view('cauHoi');
	}

	public function toDangThi()
	{
		return view('dangThi');
	}

	public function chooseexam()
	{
		return view('chooseExam');
	}
}
