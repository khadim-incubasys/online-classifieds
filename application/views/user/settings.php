
<?php $this->load->view('include/header'); ?>
<div class="wrapper">
    <div class="row clearfix">
        <div class="main-wrap">
            <div class="user-content">
                <h2 class="form-header-user"><?= $title; ?></h2>
                <div id="contact" class="form-user" role="form">
                    <h1>Coming Soon......</h1>


                    <div class="rating">
                        <span><input type="radio" name="rating" id="str5" value="5"><label for="str5">☆</label></span>
                        <span><input type="radio" name="rating" id="str4" value="4"><label for="str4">☆</label></span>
                        <span><input type="radio" name="rating" id="str3" value="3"><label for="str3">☆</label></span>
                        <span><input type="radio" name="rating" id="str2" value="2"><label for="str2">☆</label></span>
                        <span><input type="radio" name="rating" id="str1" value="1"><label for="str1">☆</label></span>
                    </div>
                </div>
            </div>
            <?php $this->load->view('user/side-bar'); ?>
        </div>
    </div>
</div>
<?php $this->load->view('include/footer'); ?>
