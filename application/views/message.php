<?php
$display_msg='';
$class='error';
if ($this->session->flashdata('message')) {
    $msg = $this->session->flashdata('message');
    $msg = explode(':', $msg);
    if(count($msg)>1){
    $class = $msg[0];
    $display_msg = $msg[1];
    }
    else{
        $class="error";
      $display_msg = $msg[0];  
    }
}
?>
<span class="<?= $class; ?>">
        <?php if ($this->session->flashdata('message')) { print_r($display_msg); } ?>
</span>