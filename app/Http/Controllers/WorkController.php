<?php namespace App\Http\Controllers;

use Illuminate\Html\FormFacade;

class WorkController extends Controller {
	public function index() {
		return view('work_index');
	}

	public function create() {
		return view('work_create');
	}
}