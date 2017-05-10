<?php 
namespace App\Http\Controllers;
session_start();
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;
use App\TestOnline;
use App\question_img;
class DoExamController extends Controller {
		
	protected $data = array();
	protected $results = array();

	public function __construct(){
		for($i = 0; $i < 10; $i++){
			$t = $i*3+1;
			$this->data[$t] = 0;
			$this->data[$t+1] = 0;
			$this->data[$t+2] = 0;
			$this->results[$i] = 0;
		};
	}
	public function doexam(){
		
		for($i = 0; $i<10; $i++) {
			$id = rand(0,20);
			$temp = TestOnline::where('id','=',$id)->get()->toArray();
			$resultsDB[$i] = $temp;
			$_SESSION["dtb[$i]"] = $temp;
		}
		
		return view('doExamPage')->with('data', $resultsDB);
	}
		
	public function showresults(){
		if(isset($_POST['cb']))
		foreach($_POST['cb'] as $row){
			$this->data[$row] = 1;		
		}
		for($i = 0; $i<10; $i++) {
			$temp = $_SESSION["dtb[$i]"];
			$t =$i*3 + 1;
			foreach($temp as $row){
				$temp = 0;
				foreach($row as $key => $value){
					if(($key == "a0" && $value == $this->data[$t])
					||($key == "a1" && $value == $this->data[$t+1])
					||($key == "a2" && $value == $this->data[$t+2])) $temp++;	
				}
				if( $temp == 3) $this->results[$i] = 1;
			}
		}
		//session_destroy();
		return view('resultsPage')->with('res', $this->results);
	}
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
