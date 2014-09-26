<?php

class MataAjar extends Eloquent {

	protected $table = 'kodewarna'; //table pada database

	protected $primaryKey = 'kodewarna'; //primary key table

	public $timestamps = false; 

	public function simpan($input){
		$this->kodewarna = $input['kodewarna'];
		$this->warnabarang= $input['warnabarang'];
		$this->save();
	}

	public function getDataMataAjar($id = null){
		if ($id == 1) {
            return $this->find($id)->get();
        }else{
            return self::all();
        }
	}

	public function hapus($id){
        self::find($id)->delete();
    }

    public function doEdit($input){
            $id = $input['id_mataajar'];
            $update = $this->find($id);
           // $user = User::find(1);

			$update->nama_mataajar = $input['nama_mataajar'];

			$update->save();
    }
}
