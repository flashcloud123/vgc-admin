<?php 
defined('BASEPATH') OR exit('No direct script access allowed');


/**
* 
*/
class DashboardModel extends CI_Model
{
	
	
	public function get_users() {

		$q = $this->db->order_by('username','asc')->get('users');
		if ($q->num_rows()) {
		
			return $q->result();
		}
	}

	public function count_users() {

		$q = $this->db->count_all_results('users');
		
		
	    return $q;
		
	}

	public function get_user_by_addess($address){

		$q = $this->db->where(['wallet_address'=>$address])->get('users');

		if ($q->num_rows()) {
			
			return $q->row();
		}
	}

	public function store($table) {


		$this->load->library('form_validation');

		$output = array('status'=>'false','heading'=>'','content'=>'');

		if ($this->form_validation->run('about_form_validation')==FALSE) {

			 	$this->form_validation->set_error_delimiters('', '');
				$output['heading'] = form_error('heading');
				$output['content'] = form_error('content');

		} else {

			$info = $this->input->post();

			unset($info['table']);
			$this->db->insert($table,$info);

			if ($this->db->affected_rows()>0) {
				# code...
				$output['status'] = 'success';
				
			}
				

		}

		return $output;
	}


	public function store_home($table) {


		$this->load->library('form_validation');

		$output = array('status'=>'false','heading'=>'','sub_heading'=>'','main_sub_heading'=>'','heading_bottom'=>'');

		if ($this->form_validation->run('home_form_validation')==FALSE) {

			 	$this->form_validation->set_error_delimiters('', '');
				$output['heading']          = form_error('heading');
				$output['sub_heading']      = form_error('sub_heading');
				$output['main_sub_heading'] = form_error('main_sub_heading');
				$output['heading_bottom']   = form_error('heading_bottom');
				

		} else {

			$info = $this->input->post();

			unset($info['table']);
			$this->db->insert($table,$info);

			if ($this->db->affected_rows()>0) {
				# code...
				$output['status'] = 'success';
				
			}
				

		}

		return $output;
	}


	public function update($table) {


		$this->load->library('form_validation');

		$output = array('status'=>'false','heading'=>'','content'=>'');

		if ($this->form_validation->run('about_form_validation')==FALSE) {

			 	$this->form_validation->set_error_delimiters('', '');
				$output['heading'] = form_error('heading');
				$output['content'] = form_error('content');

		} else {

			$info = $this->input->post();
			$id = $info['id'];
			unset($info['id']);
			unset($info['table']);
			$this->db->where(['id'=>$id])->update($table,$info);

			if ($this->db->affected_rows()>=0) {
				# code...
				$output['status'] = 'success';
				
			}
				

		}

		return $output;
	}


	public function update_home($table) {


		$this->load->library('form_validation');

	$output = array('status'=>'false','heading'=>'','sub_heading'=>'','main_sub_heading'=>'','heading_bottom'=>'');

		if ($this->form_validation->run('home_form_validation')==FALSE) {

			 	$this->form_validation->set_error_delimiters('', '');
				$output['heading']          = form_error('heading');
				$output['sub_heading']      = form_error('sub_heading');
				$output['main_sub_heading'] = form_error('main_sub_heading');
				$output['heading_bottom']   = form_error('heading_bottom');
				

		} else {

			$info = $this->input->post();
			$id   = $info['id'];
			unset($info['id']);
			unset($info['table']);
			$this->db->where(['id'=>$id])->update($table,$info);

			if ($this->db->affected_rows()>=0) {
				# code...
				$output['status'] = 'success';
				
			}
				

		}

		return $output;
	}


	public function get($id = '',$table){ 

		if (!empty($id)) {
			
			$id = (int) $id;

			$q = $this->db->where(['id'=>$id])->order_by('created_at','desc')->get($table);
			
			if ($q->num_rows()) {
		
				return $q->row();
			}	

		} else {

			$q = $this->db->order_by('created_at','desc')->get($table);
			
			if ($q->num_rows()) {
		
				return $q->result();
			}	
		}

	

		
	}


	public function delete($table) {

		$id = (int) $this->input->post('id');


		$this->db->where(['id'=>$id])->delete($table);

		$output = 'false';
		if ($this->db->affected_rows()==1) {
			
			$output = 'success';	

		}

		return $output;

	}


	public function get_visits() {

		$q = $this->db->count_all_results('ci_sessions');

		if ($q) {
			
			return $q;
		}
	}

	public function get_unique_visits() {

		$q = $this->db->select("DISTINCT 'ip_address' ")->get('ci_sessions');

		if ($q->num_rows()) {
			
			return $q->num_rows();
		}
	}

	public function get_menu($id = '') {


		if (empty($id)) {
			
			$q = $this->db->order_by('menu_order','ASC')->get('menu');

			if ($q->num_rows()) {
				
				return $q->result();
			}

		} else {

			$id = (int) $id;

			$q = $this->db->where(['id'=>$id])->get('menu');

			if ($q->num_rows()) {
				
				return $q->row();
			}

		} 

	}

	public function store_menu() {

		$info = $this->input->post();

		$output = 'false';
		$this->db->insert('menu',$info);

		if ($this->db->affected_rows()==1) {
				
				$output= 'success';

		}	
			return $output;

	}

	public function update_menu() {

		$id    = (int) $this->input->post('id');
		$info = $this->input->post();

		unset($info['id']);
		

		$this->db->where(['id'=>$id])->update('menu',$info);

		$output = 'false';
		if ($this->db->affected_rows()>=0) {
		 	
		 	$output = 'success';
		 } 

		 return $output;



	}

	public function upload_logo($logo,$heading) {

		$array = array('logo'=>$logo,'heading'=>$heading);

		$this->db->insert('logo',$array);

		if ($this->db->affected_rows()>=0) {
		
			return true;
		}

	}

	public function upload_paper($logo) {

		$array = array('name'=>$logo);

		$this->db->insert('paper',$array);

		if ($this->db->affected_rows()>=0) {
		
			return true;
		}

	}

	public function get_banner($section_type,$table){


		$q = $this->db->where(['section_type'=>$section_type])->get($table);

		if ($q->num_rows()) {
			
			return $q->result();
		}
	}

	public function get_papers() {

		$q = $this->db->get('paper');

		if ($q->num_rows()) {
			
			return $q->result();
		}
	}

	
	public function check_info() {

		$info = $this->input->post();

		unset($info['submit']);

		$password  = md5($info['oldpassword']);


		$q = $this->db->where(['password'=>$password,'email'=>$this->session->userdata('email')])->get('admin');

		if ($q->num_rows()==1) {
			

			if (($info['newpassword']==$info['retype']) && !empty($info['newpassword'])) {
				
				$this->db->set('password',md5($info['newpassword']))->where(['id'=>$this->session->userdata('user_id')])->update('admin');
				$this->session->set_flashdata('success','Successfully updated password');
				return true;

			}else {

			 $this->session->set_flashdata('form_error','Password did not matched !');
			 return false;
			}
			
		} else {

			 $this->session->set_flashdata('form_error','Admin not found');
			 return false;
		}

	}

	public function change_rate() {

		$array = array('price'=>$this->input->post('rate'));

		$this->db->update('rate',$array);
		if ($this->db->affected_rows()>=0) {
			return true;
		}
	}




}