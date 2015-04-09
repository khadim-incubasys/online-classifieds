
<?php $this->load->view('include/header'); ?>
<div class="wrapper">
    <div class="main-wrap">
        <div class="aside">
            <?php $this->load->view('advertisement/power_ads'); ?>
        </div>
        <div class="main-content">
           <h2><?= $title; ?></h2>
            <div class="holder">
                <div class="block">
                    <div class="image">
                        <img class="ad-img" src="<?= base_url() . UPLOAD_PATH . 'laptops.jpg'; ?>" alt="" class="img-responsive">
                    </div>
                    <div class="text-wrap">
                        <a href="<?= base_url() ?>category/view_all/laptop">
                            <span class="title">All Lapgops-Dell Inspiron series</span>
                        </a>
                        <span>this is text area</span>
                    </div>
                </div>
                <div class="block">
                    <div class="image">
                        <img class="ad-img" src="<?= base_url() . UPLOAD_PATH . 'laptop1.jpg'; ?>" alt="" class="img-responsive">
                    </div>
                    <div class="text-wrap">
                        <a href="<?= base_url() ?>category/view_all/laptop">
                            <span class="title">title</span>
                        </a>
                        <span>this is text area</span>
                    </div>
                </div>
                <div class="block">
                    <div class="image">
                        <img class="ad-img" src="<?= base_url() . UPLOAD_PATH . 'mobile.jpg'; ?>" alt="" class="img-responsive">
                    </div>
                    <div class="text-wrap">
                        <a href="<?= base_url() ?>category/view_all/laptop">
                            <span class="title">title</span>
                        </a>
                        <span>this is text area</span>
                    </div>
                </div>
                <div class="block">
                    <div class="image">
                        <img class="ad-img" src="<?= base_url() . UPLOAD_PATH . 'laptop1.jpg'; ?>" alt="" class="img-responsive">
                    </div>
                    <div class="text-wrap">
                        <a href="<?= base_url() ?>category/view_all/laptop">
                            <span class="title">title</span>
                        </a>
                        <span>this is text area</span>
                    </div>
                </div>
                <div class="block">
                    <div class="image">
                        <img class="ad-img" src="<?= base_url() . UPLOAD_PATH . 'router.jpg'; ?>" alt="" class="img-responsive">
                    </div>
                    <div class="text-wrap">
                        <a href="<?= base_url() ?>category/view_all/laptop">
                            <span class="title">title</span>
                        </a>
                        <span>this is text area</span>
                    </div>
                </div>
                <div class="block">
                    <div class="image">
                        <img class="ad-img" src="<?= base_url() . UPLOAD_PATH . 'laptop1.jpg'; ?>" alt="" class="img-responsive">
                    </div>
                    <div class="text-wrap">
                        <a href="<?= base_url() ?>category/view_all/laptop">
                            <span class="title">title</span>
                        </a>
                        <span>this is text area</span>
                    </div>
                </div>
                <div class="block">
                    <div class="image">
                        <img class="ad-img" src="<?= base_url() . UPLOAD_PATH . 'led.jpg'; ?>" alt="" class="img-responsive">
                    </div>
                    <div class="text-wrap">
                        <a href="<?= base_url() ?>category/view_all/laptop">
                            <span class="title">title</span>
                        </a>
                        <span>this is text area</span>
                    </div>
                </div>
                <div class="block">
                    <div class="image">
                        <img class="ad-img" src="<?= base_url() . UPLOAD_PATH . 'laptop1.jpg'; ?>" alt="" class="img-responsive">
                    </div>
                    <div class="text-wrap">
                        <a href="<?= base_url() ?>category/view_all/laptop">
                            <span class="title">title</span>
                        </a>
                        <span>this is text area</span>
                    </div>
                </div>

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