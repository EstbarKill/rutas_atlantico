<?php 
echo $this->Form->create();
echo $this->Form->control('email', ['required' => true]);
echo $this->Form->control('password', ['required' => true]);
echo $this->Form->button(__('Login'));
echo $this->Form->end();
?>