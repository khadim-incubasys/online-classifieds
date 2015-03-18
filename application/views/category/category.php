
<?php $this->load->view('include/header'); ?>
<div class="wrapper">
    <div class="row clearfix">
        <div class="col-md-3 column">
            <h2>
                <a href="<?= base_url().'category/laptops' ?>" >Title </a>
            </h2>
            <div class="image-wrap">
                <a href="#" >
                    <img class="ad-img" src="<?= base_url() . UPLOAD_PATH . 'laptop.jpg'; ?>" alt="" class="img-responsive">
                </a>
            </div>
            <p>
                Details, this is sample <a class="btn" href="#">View details »</a>
            </p>
        </div>

    </div>
</div>
<?php $this->load->view('include/footer'); ?>
