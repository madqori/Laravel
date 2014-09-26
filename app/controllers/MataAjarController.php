<?php

class MataAjarController extends Controller {

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */

	public function __construct(){
		$this->mataajar = new MataAjar();
	}

	protected function index()
	{
		$data = $this->mataajar->getDataMataAjar();
            return View::make('index')
                        ->with('data', $data);
	}

	public function input(){
		$input = Input::all();
		$this->mataajar->simpan($input);
		// $this->warnabarang->simpan($input);
		return Redirect::to('/');
	}

	public function hapus($id)
	{
		$this->mataajar->hapus($id);
        return Redirect::to('/');
	}

	public function edit($id){
		$data = $this->mataajar->getDataMataAjar($id);
            return View::make('edit')
                        ->with('data', $data);
	}

	public function doEdit(){
		$input = Input::all();
		$this->mataajar->doEdit($input);
		return Redirect::to('/');
	}

}