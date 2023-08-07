<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	public function index()
	{
		$this->load->view('home/home');
	}


	public function data_gol_darah()
	{
		$data = array(
			'gol_darah' => $this->M_gol_darah->tampil_gol_darah()
		);
		$this->load->view('home/data_golongan_darah', $data, false);
	}

	public function kategori_gol_darah($gol_darah)
	{
		$data = array(
			'gol_darah' => $this->M_gol_darah->kategori_gol_darah($gol_darah),
			'nama_gol_darah' => $gol_darah
		);
		$this->load->view('home/data_golongan_darah', $data, false);
	}
}
