<div class="row clearfix">
    <div class="f-holder">
        <div class="f-margins">
            <h1><?= APP_TITLE ?></h1>
            <div class="holder">
                <div class="wrap">
                    <h2>Help Center</h2>
                    <ul class="help-block">
                        <li><a href="<?= base_url(); ?>welcome/about_us"> About</a></li>
                        <li><a href="#"> Blog</a></li>
                        <li><a href="#"> Career</a></li>
                        <li><a href="#"> Privacy Policy</a></li>
                        <li><a href="#"> Terms and Conditions</a></li>
                        <li><a href="<?= base_url(); ?>welcome/contact_us"> Contact</a></li>

                    </ul>
                </div>
                <div class="wrap">
                    <h2>category</h2>
                    <ul id="category-footer">
                    </ul>
                </div>     
                <div class="wrap">
                    <h2>Location</h2>
                    <ul id="location-footer">

                    </ul>
                </div>
                <div class="wrap">
                    <h2>Follow Us</h2>
                    <ul>
                        <li><a href="#">  <img class="follw-img" src="<?= base_url() . 'assets/images/twitter.png'; ?>" alt="" class="img-responsive"></a></li>
                        <li><a href="https://www.facebook.com/khadim.Raath"> <img class="follw-img" src="<?= base_url() . 'assets/images/fb.png'; ?>" alt="" class="img-responsive"></a></li>
                        <li><a href="#"> <img class="follw-img" src="<?= base_url() . 'assets/images/google.png'; ?>" alt="" class="img-responsive"></a></li>
                        <li><a href="#"> <img class="follw-img" src="<?= base_url() . 'assets/images/linkedin.png'; ?>" alt="" class="img-responsive"></a></li>

                    </ul>
                </div>     
            </div>
        </div>
    </div>
</div>
<?php
if (!is_logged_in()) {
    $this->load->view('user/login-partial');
}
if ($this->router->method == "login") {
    ?>
    <script>
        $(window).load(function() {
            $('.modal').modal('show');
        });
    </script>
    <?php
}
?>
</div>
</body>
</html>