<?php
defined('BASEPATH') OR exit('No direct script access allowed');


/**
* 
*/
require APPPATH.DIRECTORY_SEPARATOR.'third_party'.DIRECTORY_SEPARATOR.'easybitcoin.php';

class Dashboard extends CI_Controller
{


	
	public function __construct() {

		parent::__construct();

		if (!$this->session->userdata('is_logged_in')) {
			
			return redirect('login');
		}
		$this->load->model('dashboardModel');
		// print_r($this->dashboardModel->checkUser(md5('Amit@1993#')));
	}


	public function index() {



		$data['main_content'] = 'dashboard';
		$data['visits'] = $this->dashboardModel->get_visits();
		$data['unique_visits'] = $this->dashboardModel->get_unique_visits();

		$data['bdc_rate'] = json_decode($this->get_bdc_rate());

		$this->load->view('includes/template',$data);


	}

// about section

	public function about() {



		$data['main_content'] = 'about/index';
		$data['abouts'] = $this->dashboardModel->get('','about');

		$this->load->view('includes/template',$data);


	}

	public function edit_about() {

		$data['main_content'] = 'about/edit';
		
		$id  = $this->uri->segment(3);

		
	
		if (is_null($id)) {
			
			return redirect('dashboard');
		}

		$data['about'] = $this->dashboardModel->get($id,'about');
		
		
		$this->load->view('includes/template',$data);


	}

	public function create_about() {



		$data['main_content'] = 'about/create';
		// $data['main_balance'] = $this->get_main_balance();
		// $data['users'] = $this->dashboardModel->get_users();
		// $data['total_users'] = $this->dashboardModel->count_users();

		$this->load->view('includes/template',$data);


	}



	public function store_about() {


		if ($this->input->post()) {
				
		// print_r($this->input->post());

			$output = $this->dashboardModel->store('about');

			echo json_encode($output);


		} else {


			return redirect('dashboard');
		}

	}

	public function update_about() {


		if ($this->input->post()) {
				
		// print_r($this->input->post());

			$output = $this->dashboardModel->update('about');

			echo json_encode($output);


		} else {


			return redirect('dashboard');
		}

	}

	public function update_home() {


		if ($this->input->post()) {
				
		// print_r($this->input->post());
			$output = $this->dashboardModel->update_home('home');

			echo json_encode($output);


		} else {


			return redirect('dashboard');
		}

	}

	public function delete_about() {


		if ($this->input->post()) {
				
		// print_r($this->input->post());

			$output = $this->dashboardModel->delete('about');

			echo $output;


		} else {


			return redirect('dashboard');
		}

	}

	// end about

// infrastructure section

	public function infrastructure() {



		$data['main_content'] = 'infrastructure/index';
		$data['abouts'] = $this->dashboardModel->get('','infrastructure');

		$this->load->view('includes/template',$data);


	}

	public function edit_infrastructure() {

		$data['main_content'] = 'infrastructure/edit';
		
		$id  = $this->uri->segment(3);

		
	
		if (is_null($id)) {
			
			return redirect('dashboard');
		}

		$data['about'] = $this->dashboardModel->get($id,'infrastructure');
		
		
		$this->load->view('includes/template',$data);


	}

	public function create_infrastructure() {



		$data['main_content'] = 'infrastructure/create';
		// $data['main_balance'] = $this->get_main_balance();
		// $data['users'] = $this->dashboardModel->get_users();
		// $data['total_users'] = $this->dashboardModel->count_users();

		$this->load->view('includes/template',$data);


	}



	public function store_infrastructure() {


		if ($this->input->post()) {
				
		// print_r($this->input->post());

			$output = $this->dashboardModel->store('infrastructure');

			echo json_encode($output);


		} else {


			return redirect('dashboard');
		}

	}

	public function update_infrastructure() {


		if ($this->input->post()) {
				
		// print_r($this->input->post());

			$output = $this->dashboardModel->update('infrastructure');

			echo json_encode($output);


		} else {


			return redirect('dashboard');
		}

	}

	public function delete_infrastructure() {


		if ($this->input->post()) {
				
		// print_r($this->input->post());

			$output = $this->dashboardModel->delete('infrastructure');

			echo $output;


		} else {


			return redirect('dashboard');
		}

	}

	// end infrastructure

// contact section

	public function contribute() {



		$data['main_content'] = 'contribute/index';
		$data['contacts'] = $this->dashboardModel->get('','contribute');

		$this->load->view('includes/template',$data);


	}

	public function edit_contribute() {

		$data['main_content'] = 'contribute/edit';
		
		$id  = $this->uri->segment(3);

		
	
		if (is_null($id)) {
			
			return redirect('dashboard');
		}

		$data['contact'] = $this->dashboardModel->get($id,'contribute');
		
		
		$this->load->view('includes/template',$data);


	}

	public function create_contribute() {



		$data['main_content'] = 'contribute/create';
		// $data['main_balance'] = $this->get_main_balance();
		// $data['users'] = $this->dashboardModel->get_users();
		// $data['total_users'] = $this->dashboardModel->count_users();

		$this->load->view('includes/template',$data);


	}



	public function store() {


		if ($this->input->post()) {
				
		//print_r($this->input->post());

		$output = $this->dashboardModel->store($this->input->post('table'));

		echo json_encode($output);


		} else {


			return redirect('dashboard');
		}

	}


public function store_home() {


		if ($this->input->post()) {
				
		//print_r($this->input->post());

		$output = $this->dashboardModel->store_home($this->input->post('table'));

		echo json_encode($output);


		} else {


			return redirect('dashboard');
		}

	}


	public function update() {


		if ($this->input->post()) {
				
		// print_r($this->input->post());

			$output = $this->dashboardModel->update($this->input->post('table'));

			echo json_encode($output);


		} else {


			return redirect('dashboard');
		}

	}

	public function delete() {


		if ($this->input->post()) {
				
		//print_r($this->input->post());

			$output = $this->dashboardModel->delete($this->input->post('table'));

			echo $output;


		} else {


			return redirect('dashboard');
		}

	}

	// end contact



	public function logo() {



		$data['main_content'] = 'logo/index';
		
		$data['logos'] = $this->dashboardModel->get('','logo');
		

		$this->load->view('includes/template',$data);


	}


	public function token_info() {



		$data['main_content'] = 'token_info/index';
		$data['faqs'] = $this->dashboardModel->get('','token_info');

		$this->load->view('includes/template',$data);


	}

	public function edit_token_info() {

		$data['main_content'] = 'token_info/edit';
		
		$id  = $this->uri->segment(3);

		
	
		if (is_null($id)) {
			
			return redirect('dashboard');
		}

		$data['faq'] = $this->dashboardModel->get($id,'token_info');
		
		
		$this->load->view('includes/template',$data);


	}

	public function create_token_info() {



		$data['main_content'] = 'token_info/create';
		
		$this->load->view('includes/template',$data);


	}



	public function terms() {



		$data['main_content'] = 'terms/index';
		$data['faqs'] = $this->dashboardModel->get('','terms');

		$this->load->view('includes/template',$data);


	}

	public function edit_terms() {

		$data['main_content'] = 'terms/edit';
		
		$id  = $this->uri->segment(3);

		
	
		if (is_null($id)) {
			
			return redirect('dashboard');
		}

		$data['faq'] = $this->dashboardModel->get($id,'terms');
		
		
		$this->load->view('includes/template',$data);


	}

	public function create_terms() {



		$data['main_content'] = 'terms/create';
		
		$this->load->view('includes/template',$data);


	}

	// note

	public function note() {



		$data['main_content'] = 'note/index';
		$data['notes'] = $this->dashboardModel->get('','note');

		$this->load->view('includes/template',$data);


	}

	public function edit_notes() {

		$data['main_content'] = 'note/edit';
		
		$id  = $this->uri->segment(3);

		
	
		if (is_null($id)) {
			
			return redirect('dashboard');
		}

		$data['note'] = $this->dashboardModel->get($id,'note');
		
		
		$this->load->view('includes/template',$data);


	}

	public function create_note() {



		$data['main_content'] = 'note/create';
		
		$this->load->view('includes/template',$data);


	}

	//end note

	

	public function upload_logo() {



		$data['main_content'] = 'logo/upload_logo';
	
		$this->load->view('includes/template',$data);


	}


	public function upload_paper() {



		$data['main_content'] = 'paper/upload_logo';
	
		$this->load->view('includes/template',$data);


	}

	public function paper() {

		$data['main_content'] = 'paper/index';

		$data['white_papers'] = $this->dashboardModel->get_papers();
		

		$this->load->view('includes/template',$data);


	}

	public function menu() {

		$data['main_content'] = 'menu/index';
		
		$data['menus'] = $this->dashboardModel->get_menu();
		


		$this->load->view('includes/template',$data);

	}

	public function create_menu() {

		$data['main_content'] = 'menu/create';
		
		$this->load->view('includes/template',$data);

	}

	public function store_menu() {


	if ($this->input->post()) {
				
		

		$output = $this->dashboardModel->store_menu();

		echo $output;


		} else {


			return redirect('dashboard');
		}

	}

	public function update_menu() {

		if ($this->input->post()) {
			
			$output = $this->dashboardModel->update_menu();

			echo $output;	

		} else {

			return redirect('dashboard');

		}
	}

		


	public function edit_menu() {

		$data['main_content'] = 'menu/edit';
		
		$id  = $this->uri->segment(3);

		
	
		if (is_null($id)) {
			
			return redirect('dashboard');
		}

		$data['menu'] = $this->dashboardModel->get($id,'menu');
		
		
		$this->load->view('includes/template',$data);


	}

	public function upload_site_paper() {



		if ($this->input->post()) {
			
	
				      // print_r($file);

			        $this->dashboardModel->upload_paper($this->input->post('paper'));
		            $this->session->set_flashdata('success','Uploaded successfuly');
					return redirect('dashboard/paper');
	

		} else {

			return redirect('dashboard');
		}

	}

	public function upload_site_logo() {



		if ($this->input->post()) {
			
	
				$config['upload_path']   = './uploads/';
				$config['allowed_types'] = 'jpg|png|jpeg';
				$config['encrypt_name']  = TRUE;
				
		        $this->load->library('upload', $config);

		        if ($this->upload->do_upload('file')) {

			        $data = $this->upload->data();
			        $file = './uploads/'.$data['file_name'];
			        $heading = $this->input->post('heading');

			        // print_r($file);
			        $this->dashboardModel->upload_logo($data['file_name'],$heading);
		            $this->session->set_flashdata('success','Uploaded successfuly');
					return redirect('dashboard/logo');

			    }  else {

					$this->session->set_flashdata('error','could not upload logo, try later');
					return redirect('dashboard/upload_logo');

		        }
					

		} else {

			return redirect('dashboard');
		}

	}

	public function banner_section() {



		$data['main_content'] = 'banner_section/index';
		$data['banner_sections'] = $this->dashboardModel->get('','home');
		
		$this->load->view('includes/template',$data);


	}


	public function create_banner() {



		$data['main_content'] = 'banner_section/create';
		
		$this->load->view('includes/template',$data);


	}



	public function edit_banner_section() {

		$data['main_content'] = 'banner_section/edit';
		
		$id  = $this->uri->segment(3);

		
	
		if (is_null($id)) {
			
			return redirect('dashboard');
		}

		$data['banner_sections'] = $this->dashboardModel->get($id,'home');
		
		
		$this->load->view('includes/template',$data);


	}



	public function contribute_mew() {



		$data['main_content'] = 'contribute_mew/index';
		$data['contribute_mew'] = $this->dashboardModel->get('','contribute_mew');
		
		$this->load->view('includes/template',$data);


	}


	public function create_contribute_mew() {



		$data['main_content'] = 'contribute_mew/create';
		
		$this->load->view('includes/template',$data);


	}



	public function edit_contribute_mew() {

		$data['main_content'] = 'contribute_mew/edit';
		
		$id  = $this->uri->segment(3);

		
	
		if (is_null($id)) {
			
			return redirect('dashboard');
		}

		$data['contribute_mew'] = $this->dashboardModel->get($id,'contribute_mew');
		
		
		$this->load->view('includes/template',$data);


	}


	public function contribute_metamask() {



		$data['main_content'] = 'contribute_metamask/index';
		$data['contribute_metamask'] = $this->dashboardModel->get('','contribute_metamask');
		
		$this->load->view('includes/template',$data);


	}


	public function create_contribute_metamask() {



		$data['main_content'] = 'contribute_metamask/create';
		
		$this->load->view('includes/template',$data);


	}



	public function edit_contribute_metamask() {

		$data['main_content'] = 'contribute_metamask/edit';
		
		$id  = $this->uri->segment(3);

		
	
		if (is_null($id)) {
			
			return redirect('dashboard');
		}

		$data['contribute_metamask'] = $this->dashboardModel->get($id,'contribute_metamask');
		
		
		$this->load->view('includes/template',$data);


	}



	public function section_four() {



		$data['main_content'] = 'section_four/index';
		// $data['section_four'] = $this->dashboardModel->get_banner('','contribute_metamask');
		
		$this->load->view('includes/template',$data);


	}


	public function create_section_four() {



		$data['main_content'] = 'section_four/create';
		
		$this->load->view('includes/template',$data);


	}



	public function edit_section_four() {

		$data['main_content'] = 'section_four/edit';
		
		$id  = $this->uri->segment(3);

		
	
		if (is_null($id)) {
			
			return redirect('dashboard');
		}

		$data['section_four'] = $this->dashboardModel->get($id,'main');
		
		
		$this->load->view('includes/template',$data);


	}

	public function change_password() {

		$data['main_content'] = 'change_password';

		$this->load->view('includes/template',$data);

	}



	public function password_change() {

		if ($this->input->post()) {
			
			$output = $this->dashboardModel->check_info();

			if ($output) {
			
				return redirect('dashboard');	
			} else {

				return redirect('dashboard/change_password');
			}
			
		} else {

			return redirect('dashboard');
		}
	}

	private function get_bdc_rate() { 

			$url = 'http://18.221.195.185/api/';

			// $url = 'https://min-api.cryptocompare.com/data/price?fsym='.$crypto.'&tsyms=USD';
			// $url = 'https://min-api.cryptocompare.com/data/price?fsym='.$crypto.'&tsyms=USD';
			 if(!function_exists("curl_init")) return "cURL extension is not installed";
			    if (trim($url) == "") die("@ERROR@");
			    $curl = curl_init($url);
			    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); 
			    // curl_setopt($curl, CURLOPT_POST, 1);                        
			    // curl_setopt($curl, CURLOPT_USERPWD, 'username:password');
			    curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_ANY);                    
			    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);                          
			    curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);                       
			    $response = curl_exec($curl);                                          
			    $resultStatus = curl_getinfo($curl);                                   
			   	
			    if($resultStatus['http_code'] == 200) {
			       
			        // All Ok
			    
			    } else {

			        return json_encode($resultStatus);                            
				}

			    $curl = null;
			    return utf8_encode($response);      
	} 

	public function change_rate() {

		if ($this->input->post()) {
			
			$rate = $this->dashboardModel->change_rate();

			if ($rate) {
				
				echo 'success';
			}
		} else {

			return redirect('dashboard');
		}

	}
}