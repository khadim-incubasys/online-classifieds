
<?php $this->load->view('include/header'); ?>
<div class="wrapper">
    <div class="row clearfix">
        <div class="main-wrap">
            <div class="user-content">
                <h2 class="form-header-user">ME</h2>
                <div id="contact" class="form-user" role="form">
                    <div class="row">
                        <div class="col-xs-6 form-group">

                            <ul class="demo-2 effect">
                                <li>
                                    <input type="button" class="btn-primary btn upload" value="upload" name="upload profile" />
                                </li>
                                <li><img class="dp-img img-responsive"  src="<?= base_url() . UPLOAD_PATH . 'cat.jpg'; ?>" alt=""/></li>
                            </ul>


<!--                            <img class="dp-img img-responsive" src="<?= base_url() . UPLOAD_PATH . 'cat.jpg'; ?>" alt="" >-->
                        </div>
                        <div class="col-xs-6 form-group">
                            <h4> Khadim Raath</h4>
                            <h5> Khadim.raath@incubasys.com </h5>
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
