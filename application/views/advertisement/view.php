
<?php $this->load->view('include/header'); ?>
<div class="wrapper">
    <div class="main-wrap">
        <div class="aside">
            <?php $this->load->view('advertisement/power_ads'); ?>
        </div>
        <div class="main-content col-xs-8">
            <div class="row">
                <div class="col-xs-7">
                    <img id="ad-img-view" class="img-responsive" src="<?= base_url() . UPLOAD_PATH . 'cat.jpg'; ?>" alt="" />

                    <div class="thumb">
                        <img class="img-responsive" src="<?= base_url() . UPLOAD_PATH . 'cat.jpg'; ?>" alt="" />
                        <img class="img-responsive" src="<?= base_url() . UPLOAD_PATH . 'laptop.jpg'; ?>" alt="" />
                        <img class="img-responsive" src="<?= base_url() . UPLOAD_PATH . 'led.jpg'; ?>" alt="" />
                        <img class="img-responsive" src="<?= base_url() . UPLOAD_PATH . 'cat.jpg'; ?>" alt="" />
                    </div>
                </div>
                <div class="col-xs-5">
                    <div class="product-info text-left">
                        <div class="row">
                            <h3>Dell Inspiron 3721</h3>
                            <h4> <span class="location-view">Lahore, Pakistan</span></h4>
                            <div class="row price-view">
                                Rs. 30
                            </div>
                            <div  class="contact-details">
                                <h4> Contact Details:</h4>
                                <h5>Khadim Husain</h5>
                                <h5>Khadim.nu@gmail.com</h5>
                                <h5>030013456789</h5>
                                <h5>Lahore , Pakistan</h5>
                                <h5>Kamran Block Allam Iqbal Town Lahore</h5>
                            </div>
                        </div>


                    </div>
                    <div class="row">
                        <a class="buy-view align-center text-center" href="<?= base_url() ?>advertisement/buy/id">Request to Buy</a>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="holder">
                    <div class="block-single">
                        <!--                        <div class="imagex">
                                                    <img class="ad-img" src="<?= base_url() . UPLOAD_PATH . 'cat.jpg'; ?>" alt="" class="img-responsive">
                                                    <img class="ad-img" src="<?= base_url() . UPLOAD_PATH . 'cat.jpg'; ?>" alt="" class="img-responsive">
                                                    <img class="ad-img" src="<?= base_url() . UPLOAD_PATH . 'cat.jpg'; ?>" alt="" class="img-responsive">
                                                </div>-->

                        <div class="text-wrap">

                            <span class="description-view">
                                <h3>Description:</h3>
                                This is a sample description.This is a sample description.This is a sample description.
                                This is a sample description.This is a sample description.This is a sample description.
                                This is a sample description.This is a sample description.This is a sample description.
                                This is a sample description.This is a sample description.
                            </span>
                        </div>

                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('include/footer'); ?>