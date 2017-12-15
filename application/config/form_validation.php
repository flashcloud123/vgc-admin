<?php 



$config = [

		'login_form_validation'=>[

							[
							'field' => 'email',
							'label' => 'Email',
							'rules' => 'required'
        
							],
							[
							
							'field' => 'password',
							'label' => 'Password',
							'rules' => 'required'
        
							]

		], 

		'about_form_validation'=>[

							[
							'field' => 'heading',
							'label' => 'Heading',
							'rules' => 'required|trim'
        
							],
							[
							
							'field' => 'content',
							'label' => 'Content',
							'rules' => 'required|trim'
        
							]

		], 
		'home_form_validation'=>[

							[
							'field' => 'heading',
							'label' => 'Heading',
							'rules' => 'required|trim'
        
							],
							[
							
							'field' => 'main_sub_heading',
							'label' => 'main sub heading',
							'rules' => 'required|trim'
        
							],
							[
							
							'field' => 'sub_heading',
							'label' => 'sub heading',
							'rules' => 'required|trim'
        
							],
							[
							
							'field' => 'heading_bottom',
							'label' => 'heading  bottom',
							'rules' => 'required|trim'
        
							]

		], 

];