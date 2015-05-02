
<?php $this->load->view('include/header'); ?>
<div class="wrapper">
    <div class="row clearfix">
        <div class="main-wrap">
            <div class="user-content">
                <h2 class="myads-header"><?= $title; ?>
                <?php $this->load->view('message'); ?>
                </h2>
                <?php
                if ($ads && !empty($ads)) {
                    foreach ($ads as $ad) {
                        ?>
                        <div class="row myads">
                            <div class="col-xs-3 form-group">
                                <img class="dp-img img-responsive" src="<?= base_url() . UPLOAD_PATH . $ad['image_url']; ?>" alt="" >
                            </div>
                            <div class="myads-details">
                                <h3 class="ad-field"> <?= $ad['title']; ?> <span class="myads_price">Rs. <?= $ad['price']; ?></span></h3>
                                <h4 class="ad-field"> <?= $ad['category']; ?>, <?= $ad['location']; ?> </h4>
                                <h5 class="ad-field">154 Likes , 31 Reviews</h5>
                                <h6 class="ad-field">
                                    <?= $ad['description']; ?>
                                </h6>
                                <div class="myads-links"><a class="link" href="<?= base_url(); ?>advertisement/delete_ad/<?= $ad['id']; ?>">Delete</a></div>
                            </div>
                        </div>
                    <?php
                    }
                }
                ?>
                <br />

            </div>
<?php $this->load->view('user/side-bar'); ?>
        </div>
    </div>
</div>
<?php $this->load->view('include/footer'); ?>
