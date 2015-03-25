
<?php $this->load->view('include/header'); ?>
<div class="wrapper">
    <div class="main-wrap">
        <div class="aside">
            <?php $this->load->view('advertisement/power_ads'); ?>
        </div>
        <div class="main-content">
            <h2>Dell Inspiron 3721 
                <span class="location-view">, Lahore</span>
                <span class="price-view">Rs. 30</span>
            </h2>
            <div class="holder">
                <div class="block-single">
                    <div class="imagex">
                        <img class="ad-img" src="<?= base_url() . UPLOAD_PATH . 'Laptops.jpg'; ?>" alt="" class="img-responsive">
                        <img class="ad-img" src="<?= base_url() . UPLOAD_PATH . 'laptop2.jpg'; ?>" alt="" class="img-responsive">
                        <img class="ad-img" src="<?= base_url() . UPLOAD_PATH . 'laptop3.jpg'; ?>" alt="" class="img-responsive">
                    </div>

                    <div class="text-wrap">
                        <span class="description-view">
                            This is a sample description.This is a sample description.This is a sample description.
                            This is a sample description.This is a sample description.This is a sample description.
                            This is a sample description.This is a sample description.This is a sample description.
                            This is a sample description.This is a sample description.
                        </span>
                    </div>
                    <a class="buy-view" href="<?= base_url() ?>advertisement/buy/id">Buy</a>
                </div>


            </div>
        </div>

    </div>
</div>
<?php $this->load->view('include/footer'); ?>