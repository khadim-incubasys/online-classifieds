
<?php $this->load->view('include/header'); ?>
<div class="wrapper">
    <div class="main-wrap">
        <div class="aside">
            <?php $this->load->view('advertisement/power_ads'); ?>
        </div>
        <div class="main-content col-xs-8">
            <div class="row">
                <div class="col-xs-7">
                    <img id="ad-img-view" class="img-responsive" src="<?= base_url() . UPLOAD_PATH . $ad['image_url']; ?>" alt="" />

                    <div class="thumb">
                        <img class="img-responsive" src="<?= base_url() . UPLOAD_PATH . $ad['image_url']; ?>" alt="" />
                        <img class="img-responsive" src="<?= base_url() . UPLOAD_PATH . $ad['image1']; ?>" alt="" />
                        <img class="img-responsive" src="<?= base_url() . UPLOAD_PATH . $ad['image2']; ?>" alt="" />
                        <img class="img-responsive" src="<?= base_url() . UPLOAD_PATH . $ad['image3']; ?>" alt="" />
                    </div>
                </div>
                <div class="col-xs-5">
                    <div class="product-info text-left">
                        <div class="row">
                            <h3 id="title-view"><?= ucfirst($ad['title']); ?></h3>
                            <h4> <span class="location-view"><?= ucfirst($ad['location']); ?></span></h4>
                            <div class="row price-view">
                                Rs. <?= $ad['price']; ?>
                            </div>
                            <div  class="contact-details">
                                <h4> <strong> Contact Details:</strong></h4>
                                <input name="user_id" type="hidden" id="user_id" value="<?= $user->id; ?>" />
                                <h4><?= $user->name; ?></h4>
                                <h4><?= $user->email; ?></h4>
                                <h4><?= $user->phone; ?></h4>
                                <h4><?= $user->city; ?> , <?= $user->country; ?></h4>
                                <h4><?= $user->address; ?></h4>
                            </div>
                        </div>


                    </div>
                    <div class="row">
                        <?php
                        $class = "buy-view";
                        if (!is_logged_in()) {
                            $class = "trigger-login";
                        }
                        ?>
                        <input type="button" class="<?= $class; ?> align-center text-center" data-id="<?= $ad['id']; ?>" value="Request to Buy"/>    
                    </div>
                    <input name="is_rated" type="hidden" id="is_rated" value="<?= ($is_rated) ? 1 : 0; ?>"/>
                    <div class="row user-rating">
                        Seller Rating: <span id="rating"><?= $rating; ?> </span>
                        
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="holder">
                    <div class="block-single">

                        <div class="text-wrap">

                            <span class="description-view">
                                <h3>Description:</h3>
                                <?= $ad['description']; ?>
                            </span>
                        </div>

                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('include/footer'); ?>