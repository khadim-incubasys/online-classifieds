
<?php $this->load->view('include/header'); ?>
<div class="wrapper">
    <div class="row clearfix">
        <div class="main-wrap">
            <div class="user-content">
                <h2 class="form-header-user">Change Password</h2>
                <form id="form" action="<?= base_url(); ?>user/change_password" method="post" class="form-user" role="form">
                    <div class="row">
                        <div class="col-xs-8 col-md-10 form-group">
                            <input class="form-control" id="password" name="password" placeholder="0ld Password" type="password" data-parsley-required autofocus />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-6 col-md-10 form-group">
                            <input class="form-control" id="new-password" name="new-password" placeholder="New Password" type="password" data-parsley-required />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-6 col-md-10 form-group">
                            <input class="form-control" id="confirm-password" name="confirm-password" placeholder="Confirm Password" type="password" data-parsley-required />
                        </div>
                    </div>
                    <br />
                    <div class="row">
                        <div class="col-xs-6 col-md-10 form-group">
                            <button class="btn btn-primary pull-right " id="custom-btn" type="submit">Change</button>
                        </div>
                    </div>

                </form>
            </div>
            <?php $this->load->view('user/side-bar'); ?>
        </div>
    </div>
</div>
<?php $this->load->view('include/footer'); ?>
