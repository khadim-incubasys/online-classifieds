
<?php $this->load->view('include/header'); ?>
<div class="wrapper">
    <div class="main-wrap">
        <div class="aside">
            <?php $this->load->view('advertisement/power_ads'); ?>
        </div>
        <div class="main-content">
            <h2><?= $title; ?></h2>
            <div class="holder ads">
                <div class="block">
                    <div class="image">
                        <img class="ad-img" src="<?= base_url() . UPLOAD_PATH . 'charger.jpg'; ?>" alt="" class="img-responsive">
                    </div>
                    <div class="text-wrap">
                        <a href="<?= base_url() ?>advertisement/view/1">
                            <span class="title">Laptop1</span>
                        </a>
                        <span class="price">Rs. 30</span>
                        <span class="location">Lahore</span>
                    </div>
                    <a class="buy" href="<?= base_url() ?>advertisement/buy/id">Buy</a>
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
    <?php
    if ($this->router->method == "login") {
        $this->load->view('user/login-partial');
        ?>
        <script>
            $(window).load(function () {
                $('.modal').modal('show');
            });
        </script>
        <?php
    }
    ?>
</div>
<?php $this->load->view('include/footer'); ?>