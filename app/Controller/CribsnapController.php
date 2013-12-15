<?php

App::import('Vendor', 'Snapchat', array('file' => 'php-snapchat/src/snapchat.php'));

class CribsnapController extends AppController {


public function Cribsnap() {
		
		$snapchat = new Snapchat('kvishy', 'pass0602');

		$id = $snapchat->upload(
			Snapchat::MEDIA_IMAGE,
			file_get_contents('https://s3-us-west-2.amazonaws.com/cribspot-img/listings/lrg_528fb90fdf5a8.jpg')
		);


		print_r($id);
		$snapchat->send($id, array('kvishy'), 8);
		$this->Session->setFlash(__('message sent', true));

}

};

?>