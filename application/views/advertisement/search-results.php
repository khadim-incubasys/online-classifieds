
<?php $this->load->view('include/header'); ?>
<div class="wrapper">
    <div class="main-wrap">
        <div class="aside">
            <?php $this->load->view('advertisement/power_ads'); ?>
        </div>
        <div class="main-content">
            <h2><?= $title; ?></h2>
            <div class="holder ads">
                <?php
                if ($ads && !empty($ads)) {
                    foreach ($ads as $ad) {
                        ?>
                        <div class="block">
                            <div class="image">
                                <img class="ad-img" src="<?= base_url() . UPLOAD_PATH . $ad['image_url']; ?>" alt="" class="img-responsive">
                            </div>
                            <div class="text-wrap">
                                <a href="<?= base_url() ?>advertisement/view/<?= $ad['id']; ?>">
                                    <span class="title"><?= $ad['title']; ?></span>
                                </a>
                                <span class="price">Rs. <?= $ad['price']; ?></span>
                                <span class="location"><?= $ad['location']; ?></span>
                            </div>
                            <a class="buy" href="<?= base_url() ?>advertisement/contact_to_buy/<?= $ad['id']; ?>">Buy</a>
                        </div>
                        <?php
                    }
                } else {
                    ?>
                    <h2 id="no-results">No Results Found </h2>
                    <?php
                }
                ?>

            </div>
        </div>

    </div>
    <?php if ($ads && !empty($ads)) { ?>
        <div class="pagination">
            <ul>
                <li><a href="#">Prev</a></li>
                <li class="active">
                    <a href="#">1</a>
                </li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">Next</a></li>
            </ul>
        </div>
    <?php } ?> 
</div>
<?php $this->load->view('include/footer'); ?>