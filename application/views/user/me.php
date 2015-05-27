
<?php $this->load->view('include/header'); ?>
<div class="wrapper">
    <div class="row clearfix">
        <div class="main-wrap">
            <div class="user-content">
                <h2 class="form-header-user"><?= $title; ?>
                <?php $this->load->view('message'); ?>
                </h2>
                <div id="contact" class="form-user" role="form">
                    <div class="row">
                        <div class="col-xs-4 form-group">
                            <img class="dp-img img-responsive" src="<?= base_url() . UPLOAD_PATH . $user->image_url; ?>" alt="" >
                        </div>
                        <h1> <?= $user->name; ?></h1>
                        <h3> <?= $user->email; ?> </h3>
                        <h4><?= $user->phone ?></h4>
                        <h4><?= $user->city ?> , <?= $user->country ?></h4>
                        <h4><?= $user->address ?></h4>
                    </div>


                    <br />
                    <div class="row">
                        <div class="col-xs-10 form-group">
                            <a href="<?= base_url(); ?>user/edit_me" class="btn btn-primary pull-right " id="custom-btn">Edit</a>
                        </div>
                    </div>
                </div>
            </div>
            <?php $this->load->view('user/side-bar'); ?>
        </div>
    </div>
</div>
<?php $this->load->view('include/footer'); ?>
