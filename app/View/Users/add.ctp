<html>

<?php
echo $this->Form->create('Users', array('action' => 'send'));
echo $this->Form->input('snapchatUser');
echo $this->Form->end(__('Submit', true));

?>



</html>