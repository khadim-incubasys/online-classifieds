
<?php $this->load->view('include/header'); ?>


<?php $this->load->view('user/login-partial'); ?>
<script>
    $(window).load(function () {
      $('.modal').modal('show');
    });
</script>
<?php $this->load->view('include/footer'); ?>