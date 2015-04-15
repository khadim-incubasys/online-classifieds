
<?php $this->load->view('include/header'); ?>
<div class="wrapper">
    <div class="main-wrap">
        <div class="aside">
            <?php $this->load->view('advertisement/power_ads'); ?>
        </div>
        <div class="main-content col-xs-8">
            <div class="row">
                <div class="col-xs-7">
                    <img class="ad-img img-responsive" src="<?= base_url() . UPLOAD_PATH . 'cat.jpg'; ?>" alt=""  style="width:100%; height: 100%;" />
                    
                    <div class="thumb">
                        <img class="img-responsive" src="<?= base_url() . UPLOAD_PATH . 'cat.jpg'; ?>" alt="" />
                        <img class="img-responsive" src="<?= base_url() . UPLOAD_PATH . 'cat.jpg'; ?>" alt="" />
                        <img class="img-responsive" src="<?= base_url() . UPLOAD_PATH . 'cat.jpg'; ?>" alt="" />
                    </div>
                </div>
                <div class="col-xs-5">
                    <div class="row">
                        <h3>Dell Inspiron 3721 </h3>
                        <h3> <span class="location-view">Lahore</span></h3>
                        <h3><span class="price-view pull-right">Rs. 30</span></h3>
                    </div>
                    <div class="row">
                        <a class="buy-view align-center" href="<?= base_url() ?>advertisement/buy/id">Buy</a>
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