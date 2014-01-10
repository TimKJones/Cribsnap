 <?php

App::import('Vendor', 'Snapchat', array('file' => 'php-snapchat/src/snapchat.php'));

 class CribsnapController extends AppController {

 public function Cribsnap()
 {
 	$this->redirect(array('controller' => 'Users', 'action' => 'add'));
 }

 // public function add()
 // {
	// $this->Session->setFlash(__('message sent', true));
	// $username = $this->data['User']['snapchatUser'];
 // }

 // public function Cribsnap() {
 // 		$username = $this->data['Form']['snapchatUser'];
		
 // 		$snapchat = new Snapchat('kvishy', 'pass0602');

 // 		$id = $snapchat->upload(
 // 			Snapchat::MEDIA_IMAGE, 			
 // 	        file_get_contents('https://s3-us-west-2.amazonaws.com/cribspot-img/listings/lrg_52828e46a79fc.jpg')
	// 	);

	// 	 $snapchat->send($id, array($username), 8);
	
 // }
 
 };

 ?>