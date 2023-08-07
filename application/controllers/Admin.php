<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
	public function tambah_pendonor()
	{

		$nrp_pendonor = $this->db->get_where('tabel_donor_darah', ['nrp_pendonor' => htmlspecialchars($this->input->post('nrp', true))])->row_array();
		$jenis_gol_darah = htmlspecialchars($this->input->post('jenis_gol_darah', true));

		if ($nrp_pendonor) {
			$this->session->set_flashdata('pesan',  '<div class="alert alert-danger alert-dismissible fade show" role="alert">Data tidak berhasil ditambah ! Data yang telah ada tidak boleh ditambahkan kembali!   <button type="button" style="color : white;" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>');
			$data = array(
				'gol_darah' => $this->M_gol_darah->kategori_gol_darah($jenis_gol_darah),
				'nama_gol_darah' => $jenis_gol_darah
			);
			$this->load->view('home/data_golongan_darah', $data, false);
		} else {

			$nama_pendonor = htmlspecialchars($this->input->post('nama', true));
			$pangkat_pendonor = htmlspecialchars($this->input->post('pangkat', true));
			$nrp_pendonor = htmlspecialchars($this->input->post('nrp', true));
			$jabatan_pendonor = htmlspecialchars($this->input->post('jabatan', true));
			$golongan_darah = htmlspecialchars($this->input->post('gol_darah', true));
			$kontak_pendonor = htmlspecialchars($this->input->post('kontak', true));
			$keterangan = htmlspecialchars($this->input->post('keterangan', true));


			$data = array(
				'nama_pendonor' => $nama_pendonor,
				'pangkat_pendonor' => $pangkat_pendonor,
				'nrp_pendonor' => $nrp_pendonor,
				'jabatan_pendonor' => $jabatan_pendonor,
				'golongan_darah' => $golongan_darah,
				'kontak_pendonor' => $kontak_pendonor,
				'keterangan' => $keterangan
			);

			$this->M_gol_darah->tambah_gol_darah($data);
			$this->session->set_flashdata('pesan',  '<div class="alert alert-success alert-dismissible fade show" role="alert">Data Berhasil Ditambah !!   <button type="button" style="color : white;" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>');

			// $data = [
			// 	'nama_gol_darah' => $jenis_gol_darah
			// ];

			redirect('home/kategori_gol_darah/' . $jenis_gol_darah);

			// $data = array(
			// 	'gol_darah' => $this->M_gol_darah->kategori_gol_darah($jenis_gol_darah),
			// 	'nama_gol_darah' => $jenis_gol_darah
			// );
			// $this->load->view('home/data_golongan_darah', $data, false);
		}
	}

	public function hapus_pendonor($id_donor_darah, $golongan_darah)
	{
		$data = array(
			'id_donor_darah' => $id_donor_darah,
		);
		if ($data) {
			$this->M_gol_darah->hapus_gol_darah($data);
			$this->session->set_flashdata('pesan',  '<div class="alert alert-success alert-dismissible fade show" role="alert">Data Berhasil Dihapus !!   <button type="button" style="color : white;" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>');
		} else {
			$this->session->set_flashdata('pesan',  '<div class="alert alert-danger alert-dismissible fade show" role="alert">Data Gagal Dihapus !!   <button type="button" style="color : white;" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>');
		}

		redirect('home/kategori_gol_darah/' . $golongan_darah);


		// $data = array(
		// 	'gol_darah' => $this->M_gol_darah->kategori_gol_darah($golongan_darah),
		// 	'nama_gol_darah' => $golongan_darah
		// );
		// $this->load->view('home/data_golongan_darah', $data, false);
	}

	public function edit_pendonor($id_donor_darah, $golongan_darah)
	{
		$data = array(
			'gol_darah' => $this->M_gol_darah->detail_gol_darah($id_donor_darah),
			'nama_gol_darah' => $golongan_darah

		);
		$this->load->view('home/detail_golongan_darah', $data, false);
	}

	public function update_pendonor($id_donor_darah, $golongan_darah)
	{

		$this->form_validation->set_rules('nama_pendonor', 'Nama Pendonor', 'required', array(
			'required' => '%s Wajib Diisi !'
		));
		$this->form_validation->set_rules('pangkat_pendonor', 'Pangkat Pendonor', 'required', array(
			'required' => '%s Wajib Diisi !'
		));
		$this->form_validation->set_rules('nrp_pendonor', 'NRP Pendonor', 'required', array(
			'required' => '%s Wajib Diisi !'
		));
		$this->form_validation->set_rules('jabatan_pendonor', 'Jabatan Pendonor', 'required', array(
			'required' => '%s Wajib Diisi !'
		));
		$this->form_validation->set_rules('golongan_darah', 'Golongan Darah', 'required', array(
			'required' => '%s Wajib Diisi !'
		));
		$this->form_validation->set_rules('kontak_pendonor', 'Kontak Pendonor', 'required', array(
			'required' => '%s Wajib Diisi !'
		));
		$this->form_validation->set_rules('keterangan', 'Keterangan Pendonor', 'required', array(
			'required' => '%s Wajib Diisi !'
		));

		if ($this->form_validation->run() == false) {
			$data = array(
				'gol_darah' => $this->M_gol_darah->kategori_gol_darah($golongan_darah),
				'nama_gol_darah' => $golongan_darah
			);
			$this->load->view('home/data_golongan_darah', $data, false);
		} else {
			$nama_pendonor = htmlspecialchars($this->input->post('nama_pendonor', true));
			$pangkat_pendonor = htmlspecialchars($this->input->post('pangkat_pendonor', true));
			$nrp_pendonor = htmlspecialchars($this->input->post('nrp_pendonor', true));
			$jabatan_pendonor = htmlspecialchars($this->input->post('jabatan_pendonor', true));
			$golongan_darah = htmlspecialchars($this->input->post('golongan_darah', true));
			$kontak_pendonor = htmlspecialchars($this->input->post('kontak_pendonor', true));
			$keterangan = htmlspecialchars($this->input->post('keterangan', true));

			$data = array(
				'id_donor_darah' => $id_donor_darah,
				'nama_pendonor' => $nama_pendonor,
				'pangkat_pendonor' => $pangkat_pendonor,
				'nrp_pendonor' => $nrp_pendonor,
				'jabatan_pendonor' => $jabatan_pendonor,
				'golongan_darah' => $golongan_darah,
				'kontak_pendonor' => $kontak_pendonor,
				'keterangan' => $keterangan
			);

			$this->M_gol_darah->update_gol_darah($data);
			$this->session->set_flashdata('pesan',  '<div class="alert alert-success alert-dismissible fade show" role="alert">Data Berhasil Diubah !!   <button type="button" style="color : white;" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>');

			redirect('home/kategori_gol_darah/' . $golongan_darah);

			// $data = array(
			// 	'gol_darah' => $this->M_gol_darah->kategori_gol_darah($golongan_darah),
			// 	'nama_gol_darah' => $golongan_darah
			// );
			// $this->load->view('home/data_golongan_darah', $data, false);
		}
	}



	public function edit_password()
	{
		$this->load->view('home/ganti_password');
	}

	public function update_password()
	{
		$data['user'] = $this->db->get_where('tabel_user', ['email' =>
		$this->session->userdata('email')])->row_array();
		$this->form_validation->set_rules('password_lama', 'Password Lama', 'required|trim');
		$this->form_validation->set_rules('password_baru', 'Password Baru', 'required|trim|min_length[3]|matches[password_baru2]', [
			'matches' => 'Password baru tidak sama dengan ulangi password, silahkan masukkan ulang!',
			'min_length' => 'password terlalu pendek!'
		]);
		$this->form_validation->set_rules('password_baru2', 'Konfirmasi Password', 'required|trim|min_length[3]|matches[password_baru]');


		if ($this->form_validation->run() == False) {
			$this->load->view('home/ganti_password');
		} else {
			$password_lama = $this->input->post('password_lama');
			$password_baru = $this->input->post('password_baru');
			if (!password_verify($password_lama, $data['user']['password'])) {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Password lama salah</div>');
				redirect('admin/edit_password');
			} else {
				if ($password_lama == $password_baru) {
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Password baru tidak boleh sama dengan password lama!</div>');
					redirect('admin/edit_password');
				} else {
					$password_hash = password_hash($password_baru, PASSWORD_DEFAULT);
					$this->db->set('password', $password_hash);
					$this->db->where('email', $this->session->userdata('email'));
					$this->db->update('tabel_user');

					$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                    Password telah diubah</div>');
					redirect('admin/edit_password');
				}
			}
		}
	}
}
