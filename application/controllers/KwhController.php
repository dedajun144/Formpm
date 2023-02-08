<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KwhController extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct() {
        parent::__construct();
        $this->load->model('Kwh_Model');
    }

	public function index()
	{
		/* $this->load->view('welcome_message'); */

		if ($this->input->post('finish')) {
            $this->form_validation->set_rules('namepop', 'Nama POP', 'trim|required');
            $this->form_validation->set_rules('dayalistrik', 'Daya Listrik', 'trim|required');
            $this->form_validation->set_rules('cos', 'COS', 'trim|required');
            $this->form_validation->set_rules('arester', 'Arester', 'trim|required');
            $this->form_validation->set_rules('idpelanggan', 'ID Pelanggan', 'trim|required');
            $this->form_validation->set_rules('phasa', 'Phasa', 'trim|required');
            $this->form_validation->set_rules('tipecos', 'Tipe COS', 'trim|required');
			$this->form_validation->set_rules('tipearester', 'Tipe Arester', 'trim|required');
			$this->form_validation->set_rules('rn', 'R-N', 'trim|required');
			$this->form_validation->set_rules('tn', 'T-N', 'trim|required');
			$this->form_validation->set_rules('rt', 'R-T', 'trim|required');
			$this->form_validation->set_rules('ng', 'N-G', 'trim|required');
			$this->form_validation->set_rules('sn', 'S-N', 'trim|required');
			$this->form_validation->set_rules('rs', 'R-S', 'trim|required');
			$this->form_validation->set_rules('st', 'S-T', 'trim|required');
			$this->form_validation->set_rules('r', 'R', 'trim|required');
			$this->form_validation->set_rules('s', 'S', 'trim|required');
			$this->form_validation->set_rules('t', 'T', 'trim|required');
			$this->form_validation->set_rules('rmcb', 'R', 'trim|required');
			$this->form_validation->set_rules('smcb', 'S', 'trim|required');
			$this->form_validation->set_rules('tmcb', 'T', 'trim|required');
			$this->form_validation->set_rules('rwarna', 'R Warna', 'trim|required');
			$this->form_validation->set_rules('nwarna', 'N Warna', 'trim|required');
			$this->form_validation->set_rules('swarna', 'S Warna', 'trim|required');
			$this->form_validation->set_rules('gwarna', 'G warna', 'trim|required');
			$this->form_validation->set_rules('twarna', 'T Warna', 'trim|required');
			$this->form_validation->set_rules('rmm', 'R mm', 'trim|required');
			$this->form_validation->set_rules('nmm', 'N mm', 'trim|required');
			$this->form_validation->set_rules('smm', 'S mm', 'trim|required');
			$this->form_validation->set_rules('gmm', 'G mm', 'trim|required');
			$this->form_validation->set_rules('tmm', 't mm', 'trim|required');
			$this->form_validation->set_rules('temuan', 'Temuan', 'required');
			$this->form_validation->set_rules('rekomendasi', 'Rekomendasi', 'required');


            if ($this->form_validation->run() !== FALSE) {
                $result = $this->Kwh_Model->insert_kwh($this->input->post('namepop'), 
				$this->input->post('dayalistrik'), 
				$this->input->post('cos'),
				 $this->input->post('arester'),
				  $this->input->post('idpelanggan'), 
				  $this->input->post('phasa'),
				   $this->input->post('tipecos'),
				   $this->input->post('tipearester'),
				   $this->input->post('rn'),
				   $this->input->post('tn'),
				   $this->input->post('rt'),
				   $this->input->post('ng'),
				   $this->input->post('sn'),
				   $this->input->post('rs'),
				   $this->input->post('st'),
				   $this->input->post('r'),
				   $this->input->post('s'),
				   $this->input->post('t'),
				   $this->input->post('rmcb'),
				   $this->input->post('smcb'),
				   $this->input->post('tmcb'),
				   $this->input->post('rwarna'),
				   $this->input->post('nwarna'),
				   $this->input->post('swarna'),
				   $this->input->post('gwarna'),
				   $this->input->post('twarna'),
				   $this->input->post('rmm'),
				   $this->input->post('nmm'),
				   $this->input->post('smm'),
				   $this->input->post('gmm'),
				   $this->input->post('tmm'),
				   $this->input->post('temuan'),
				   $this->input->post('rekomendasi')
				
				);
                $data['success'] = $result;
                $this->load->view('Kwh', $data);
            } else {
                $this->load->view('Kwh');
            }
        } else {
            $this->load->view('Kwh');
        }
    }
	}