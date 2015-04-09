
<?php $this->load->view('include/header'); ?>
<div class="wrapper">
    <div class="row clearfix">
        <div class="main-wrap">
            <div class="user-content">
                <h2 class="form-header-user">ME</h2>
                <div id="contact" class="form-user" role="form">
                    <div class="row">
                        <div class="col-xs-8 col-md-10 form-group">
                            <img class="ad-img" src="<?= base_url() . UPLOAD_PATH . 'cat.jpg'; ?>" alt="" class="img-responsive">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-6 col-md-10 form-group">
                            Line1
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-6 col-md-10 form-group">
                            Line2
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-6 col-md-10 form-group">
                            Line2
                        </div>
                    </div>
                    <br />
                    <div class="row">
                        <div class="col-xs-6 col-md-10 form-group">
                            <button class="btn btn-primary pull-right " id="custom-btn">Edit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <?php $this->load->view('user/side-bar'); ?>
        </div>
    </div>
</div>
<?php $this->load->view('include/footer'); ?>
