
<?php $this->load->view('include/header'); ?>
<div class="wrapper">
    <div class="main-wrap">
        <div class="aside">
            <?php $this->load->view('advertisement/power_ads'); ?>
        </div>
        <div class="main-content">
            <h2><?= $title; ?></h2>
            <div class="holder">
                <?php
                if ($cats && !empty($cats)) {
                    foreach ($cats as $cat) {
                        ?>
                        <div class="block">
                            <div class="image">
                                <img class="ad-img" src="<?= base_url() . "assets/images/" . $cat['image_url']; ?>" alt="" class="img-responsive">
                            </div>
                            <div class="text-wrap">
                                <a href="<?= base_url() ?>advertisement/view_by_category/<?= $cat['title'];?>">
                                    <span class="title"><?= $cat['title'] ?></span>
                                </a>
                                <span><?= $cat['ads_count']; ?> ADs</span>
                            </div>
                        </div>
                    <?php
                    }
                }
                ?>

            </div>
        </div>

    </div>
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
</div>
<?php $this->load->view('include/footer'); ?>