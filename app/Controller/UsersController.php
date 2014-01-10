<?php

App::import('Vendor', 'Snapchat', array('file' => 'php-snapchat/src/snapchat.php'));

class UsersController extends AppController{

	var $name = 'Users';
	
	public function add()
	{
		
		
	}

	public function send()
	{
		if(!empty($this->data))
		{
			$this->User->save($this->data);
		}
		
 		$snapchat = new Snapchat('kvishy', 'pass0602');

 		$id = $snapchat->upload(
 			Snapchat::MEDIA_IMAGE, 			
 	        file_get_contents('https://s3-us-west-2.amazonaws.com/cribspot-img/listings/lrg_52828e46a79fc.jpg')
		);

		 $snapchat->send($id, array($this->data['Users']['snapchatUser']), 8);

	}


}