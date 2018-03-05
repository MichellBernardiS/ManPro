<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RegistrasiModel extends CI_Model {
	public function registrasi($nama, $nim, $fakultas, $programstudi, $ipk, $nohp, $nohportu, $persyaratan1, $persyaratan2, $persyaratan3, $persyaratan4, $pengajuanpinjaman, $wd3, $catatan)
	{
		$this -> load -> database();
		$this -> db -> select('nama, nim, fakultas, programstudi, ipk, nohp, nohportu, persyaratan1, persyaratan2, persyaratan3, persyaratan4, pengajuanpinjaman, wd3, catatan');
		$this -> db -> from('users');
		$this -> db -> where('nama', $nama);
		$this -> db -> where('nim', $nim);
		$this -> db -> where('fakultas', $fakultas);
		$this -> db -> where('programstudi', $programstudi);
		$this -> db -> where('ipk', $ipk);
		$this -> db -> where('nohp', $nohp);
		$this -> db -> where('nohportu', $nohportu);
		$this -> db -> where('persyaratan1', $persyaratan1);
		$this -> db -> where('persyaratan2', $persyaratan2);
		$this -> db -> where('persyaratan3', $persyaratan3);
		$this -> db -> where('persyaratan4', $persyaratan4);
		$this -> db -> where('pengajuanpinjaman', $pengajuanpinjaman);
		$this -> db -> where('wd3', $wd3);
		$this -> db -> where('catatan', $catatan);
		$this -> db -> limit(1);

		$query = $this -> db -> get();

		if($query -> num_rows() == 1)
		{
			return $query -> result();
		}
		else
		{
			return false;
		}
	}
}
?>