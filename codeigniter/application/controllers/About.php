<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	public function index()
	{
		$data = array(
			'nama' => "Rangga Putra Harianto",
			'kampus' => "Politeknik Negeri Malang",
			'jurusan' => "Teknologi Informasi",
			'nim' => "1541180042",
			'kelas' => "TI-2B",
			'alamat' => "Jl.Simpang Setaman, Malang",
			'nomer' => "085755706262",
			'email' => "ranggaputra942@gmail.com",
			'hobby1' => "Futsal",
			'hobby2' => "Bulutangkis",
			);
		$this->load->view('about', $data);	
	}

}

/* End of file About.php */
/* Location: ./application/controllers/About.php */

?>