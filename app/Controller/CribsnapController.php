<?php

App::import('Vendor', 'Snapchat', array('file' => 'php-snapchat/src/snapchat.php'));

class CribsnapController extends AppController {

public function Cribsnap() {
		$username = $this->data['User']['snapchatUser'];
		
		$snapchat = new Snapchat('kvishy', 'pass0602');

		$id = $snapchat->upload(
			Snapchat::MEDIA_IMAGE,
			file_get_contents('https://s3-us-west-2.amazonaws.com/cribspot-img/listings/lrg_52828e46a79fc.jpg')
		);


		print_r($id);
		if ($snapchat->send($id, array('kvishy'), 8));
		{
				$this->Session->setFlash(__('message sent', true));
		}

}

};

?>