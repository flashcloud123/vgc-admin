$('document').ready(function(){

	
	$('.login').on('click',function(){


		var email = $('.email').val();
		var password = $('.password').val();

		var btn = $(this);

		$.ajax({

			url : ajax_url+'login/login',
			type: 'POST',
			data : {email:email,password:password},
			beforeSend : function() {

				btn.attr('disabled','disabled');
				btn.html('wait..');
				$('.form-error').hide();
				$('.form-error').html('');
			},
			success : function(html) {	

				console.log(html);

				btn.removeAttr('disabled');
				btn.html('Login');
				var data = $.parseJSON(html);

				if (data.status=='success') {

					window.location = ajax_url+'dashboard';

				} else {

					$('.form-error').show();

					$('.form-error').html(data.error);

				}
			}

		});


		return false;
	});



	$('#amount-doller').on('keyup',function(){
		var price = 0.0306;
		var dollers = $(this).val();
		if (dollers<=0) {

			alert('Please enter a valid amount');

			$('#total-coins').val(''); 
			return false;
		}

		var coins = (1/price)*dollers;

		$('#total-coins').val(coins); 

	});

	$('.store').on('click',function(evt){

		var heading = $('.heading').val();
		var content = editor.getData();
		var error_div = $('.error');
		var btn = $(this);
		var table = btn.attr('data-table');
		// alert(content);

		$.ajax({

			url : ajax_url+'dashboard/store',
			type: 'POST',
			data: {heading:heading,content:content,table:table},
			beforeSend : function(){
				btn.html('Please Wait');
				error_div.html('');
				
			},
			success : function(html){

				btn.html('submit');
				console.log(html)

				 var data = $.parseJSON(html);

				if (data.status=='success') {


					$('.success-msg').html('Successfully created !');
					$('.heading').val('');
					$('.content-box').val('');
					editor.setData('');

				} else {

					$('.heading-error').html(data.heading);
					$('.content-error').html(data.content);
					
				}


			},
		error : function(jqXHR,exception) {
				show_error(jqXHR,exception);
			}
		});

		return false;

	});


		$('.create_menu').on('click',function(evt){

		var menu = $('.menu').val();
		var error_div = $('.error');
		var btn = $(this);
		
		


		if (menu.length==0 || menu=='') {

			error_div.html('Please fill a menu name !');

			return false;

		}

		$.ajax({

			url : ajax_url+'dashboard/store_menu',
			type: 'POST',
			data: {menu:menu},
			beforeSend : function(){
				btn.html('Please Wait');
				error_div.html('');
				
			},
			success : function(html){

				btn.html('submit');
				console.log(html)

				

				if (html=='success') {


					$('.success-msg').html('Successfully created !');
					$('.menu').val('');
					
					
				} else {

					alert('Error occured !');
					
				}


			},
		error : function(jqXHR,exception) {
				show_error(jqXHR,exception);
			}
		});

		return false;

	});

	$('.edit').on('click',function(evt){

		var heading = $('.heading').val();
		var content = editor.getData();
		var error_div = $('.error');
		var btn = $(this);
		var id = btn.attr('data-id');
		var table = btn.attr('data-table');
		// alert(content);

		$.ajax({

			url : ajax_url+'dashboard/update',
			type: 'POST',
			data: {heading:heading,content:content,id:id,table:table},
			beforeSend : function(){
				btn.html('Please Wait');
				error_div.html('');
				
			},
			success : function(html){

				btn.html('submit');
				console.log(html)

				 var data = $.parseJSON(html);

				if (data.status=='success') {


					$('.success-msg').html('Successfully updated! !');
				

				} else {

					$('.heading-error').html(data.heading);
					$('.content-error').html(data.content);
					
				}


			},
		error : function(jqXHR,exception) {
				show_error(jqXHR,exception);
			}
		});

		return false;

	});
	
	$('.delete').on('click',function(){

		var btn = $(this);

		var id = btn.attr('data-id');
		var div  = $('.success-msg');
		var table = btn.attr('data-table');

		// console.log(id+" "+div+" "+table);

		var confirm   = window.confirm('Are you sure ?');

		if (confirm) {

			if (id=='') {

			alert('Error occured !, try later !');
			return false;
		}	

		$.ajax({

			url : ajax_url+'dashboard/delete',
			type: 'POST',
			data: {id:id,table:table},
			beforeSend : function(){
				btn.html('Wait...');
				div.html('');
				
			},
			success : function(html){

				btn.html('delete');
				console.log(html)

				if (html=='success') {

					$('.row_'+id).hide();

					div.html('Successfully deleted !');

				} else {

					alert('These was an error, try leter !');
					
				}


			},
		error : function(jqXHR,exception) {
				show_error(jqXHR,exception);
			}
		});


		}
	});


	$('.menu-order').on('blur',function(){

		var id = parseInt($(this).attr('data-id'));
		var order = $(this).val();

		if (order<=0){

			alert('Please provide a valid order ! ');

			return false;
		}

		$.ajax({

			url : ajax_url+'dashboard/update_menu',
			type: 'POST',
			data: {id:id,menu_order:order},
			beforeSend : function(){
				$('#loader_'+id).show();
				
			},
			success : function(html){

				
				console.log(html)

				if (html=='success') {

					$('#loader_'+id).hide();

					$('.success-msg').html('Successfully updated !');

				} else {

					alert('These was an error, try leter !');
					
				}


			},
		error : function(jqXHR,exception) {
				show_error(jqXHR,exception);
			}
		});


	});

	$('.update-menu').on('click',function(){

		var btn = $(this);
		var id = parseInt(btn.attr('data-id'));
		var menu = $('.menu').val();

		if (id<=0){

			alert('Please provide a valid order ! ');

			return false;
		}

		$.ajax({

			url : ajax_url+'dashboard/update_menu',
			type: 'POST',
			data: {id:id,menu:menu},
			beforeSend : function(){
				btn.html('Wait...');
				
			},
			success : function(html){

				btn.html('submit');
				
				console.log(html)

				if (html=='success') {

					$('.success-msg').html('Successfully updated !');

				} else {

					alert('These was an error, try leter !');
					
				}


			},
		error : function(jqXHR,exception) {
				show_error(jqXHR,exception);
			}
		});

		return false;


	});


		$('.store-home').on('click',function(evt){

		var heading          = $('#heading').val();
		var main_sub_heading = $('#main_sub_heading').val();
		var sub_heading      = $('#sub_heading').val();
		var heading_bottom   = $('#heading_bottom').val();
		
		// var content      = editor.getData();
		var error_div    = $('.error');
		var btn          = $(this);
		var table        = btn.attr('data-table');
		// var section_type = btn.attr('data-type');
		// alert(content);

		$.ajax({

			url : ajax_url+'dashboard/store_home',
			type: 'POST',
			data: {heading:heading,main_sub_heading:main_sub_heading,sub_heading:sub_heading,heading_bottom:heading_bottom,table:table},
			beforeSend : function(){
				btn.html('Please Wait');
				error_div.html('');
				
			},
			success : function(html){

				btn.html('submit');
				console.log(html)

				 var data = $.parseJSON(html);

				if (data.status=='success') {


					$('.success-msg').html('Successfully created !');
					$('.heading').val('');
					$('.content-box').val('');
					// editor.setData('');

				} else {

					$('.heading-error').html(data.heading);
					$('.sub_heading-error').html(data.sub_heading);
					$('.main_sub_heading-error').html(data.main_sub_heading);
					$('.heading_bottom-error').html(data.heading_bottom);
					
				}


			},
		error : function(jqXHR,exception) {
				show_error(jqXHR,exception);
			}
		});

		return false;

	});


	$('.update-home').on('click',function(evt){

		var heading          = $('#heading').val();
		var main_sub_heading = $('#main_sub_heading').val();
		var sub_heading      = $('#sub_heading').val();
		var heading_bottom   = $('#heading_bottom').val();
		var id               = $(this).attr('data-id');
		var error_div        = $('.error');
		var btn              = $(this);
		var table            = btn.attr('data-table');
		
		$.ajax({

			url  : ajax_url+'dashboard/update_home',
			type : 'POST',
			data : {heading:heading,main_sub_heading:main_sub_heading,sub_heading:sub_heading,heading_bottom:heading_bottom,table:table,id:id},
			beforeSend : function(){
				btn.html('Please Wait');
				error_div.html('');
				
			},
			success : function(html){

				btn.html('submit');
				console.log(html)

				 var data = $.parseJSON(html);

				if (data.status=='success') {


					$('.success-msg').html('Successfully created !');
					// $('.heading').val('');
					// $('.content-box').val('');
					// editor.setData('');

				} else {

					$('.heading-error').html(data.heading);
					$('.sub_heading-error').html(data.sub_heading);
					$('.main_sub_heading-error').html(data.main_sub_heading);
					$('.heading_bottom-error').html(data.heading_bottom);
					
				}


			},
		error : function(jqXHR,exception) {
				show_error(jqXHR,exception);
			}
		});

		return false;

	});	


		$('.change-rate').on('click',function(){

			$('.change-rate-div').toggleClass('hide-change');


		});

		$('.submit-rate').on('click',function(){

			var rate = Number($('#rate').val());
			var btn = $(this);

			if (rate<=0) {

				alert('Please enter a valid rate !');
			}

			$.ajax({

				type  : 'POST',
				url  :ajax_url+'dashboard/change_rate',
				data :{rate:rate},
				beforeSend : function(){

					btn.html('Wait...');
				},
				success:function(html){

					btn.removeClass('btn-default');
					btn.addClass('btn-primary');
					$('.curr-rate').html(rate+' USD');
					if (html=='success') {

						btn.html('changed');


					} else {

						alert('Error occured, please try again !');
					}

				}


			});

			return false;
		});



		

});


function show_error(jqXHR,exception) {

	console.log(jqXHR.responseText);
				var msg = '';
		        if (jqXHR.status === 0) {
		            msg = 'Not connect.\n Verify Network.';
		        } else if (jqXHR.status == 404) {
		            msg = 'Requested page not found. [404]';
		        } else if (jqXHR.status == 500) {
		            msg = 'Internal Server Error [500].';
		        } else if (exception === 'parsererror') {
		            msg = 'Requested JSON parse failed.';
		        } else if (exception === 'timeout') {
		            msg = 'Time out error.';
		        } else if (exception === 'abort') {
		            msg = 'Ajax request aborted.';
		        } else {
		            msg = 'Uncaught Error.\n' + jqXHR.responseText;
		        }
		        alert(msg);
}





